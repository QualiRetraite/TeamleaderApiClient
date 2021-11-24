<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ParseDataDenormalizer.
 */
class ParseDataDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        return $this->denormalizer->denormalize(
            $data['data'],
            $class,
            $format,
            $context
        );
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return isset($data['data']) && 1 === \count($data);
    }
}
