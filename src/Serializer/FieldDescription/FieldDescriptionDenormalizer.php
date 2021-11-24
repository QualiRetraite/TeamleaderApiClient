<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Class FieldDescriptionDenormalizer.
 */
class FieldDescriptionDenormalizer implements
    DenormalizerInterface,
    NormalizerInterface,
    DenormalizerAwareInterface,
    NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * FieldDescriptionDenormalizer constructor.
     *
     * @param FieldDescriptionInterface[] $fieldDescriptions
     */
    public function __construct(private array $fieldDescriptions)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ): object {
        $fieldDescription = $this->getFieldDescriptionByClassName($class);
        $className = $fieldDescription->getTargetClass();
        $object = new $className();
        foreach ($fieldDescription->getFields() as $field) {
            $fieldName = $field->getName();
            $value = $data[$fieldName] ?? null;
            if (null === $value) {
                continue;
            }
            if (null !== $field->getTargetClass()) {
                $value = $this->denormalizer->denormalize(
                    $value,
                    $field->getTargetClass(),
                    $format,
                    $context
                );
            }

            $object->{$field->getSetter()}($value);
        }

        return $object;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return null !== $this->getFieldDescriptionByClassName($type);
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed[][]|\ArrayObject[]|bool[]|float[]|int[]|string[]|null[]
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $class = $object::class;
        $fieldDescription = $this->getFieldDescriptionByClassName($class);
        $resultArray = [];
        foreach ($fieldDescription->getFields() as $field) {
            $value = $object->{$field->getGetter()}();
            if (null === $value) {
                continue;
            }
            if (null !== $field->getTargetClass()) {
                $value = $this->normalizer->normalize(
                    $value,
                    $format,
                    $context
                );
            }

            $resultArray[$field->getName()] = $value;
        }

        return $resultArray;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data)
            && null !== $this->getFieldDescriptionByClassName($data::class);
    }

    protected function getFieldDescriptionByClassName(string $className): ?FieldDescriptionInterface
    {
        foreach ($this->fieldDescriptions as $fieldDescription) {
            if ($fieldDescription->getTargetClass() === $className) {
                return $fieldDescription;
            }
        }

        return null;
    }
}
