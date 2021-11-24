<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

/**
 * Class FieldDescriptionBase.
 */
abstract class FieldDescriptionBase implements FieldDescriptionInterface
{
    protected \Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter $camelCaseToSnakeCaseNameConverter;

    /**
     * FieldDescriptionBase constructor.
     */
    public function __construct()
    {
        $this->camelCaseToSnakeCaseNameConverter = new CamelCaseToSnakeCaseNameConverter(null, false);
    }

    /**
     * {@inheritdoc}
     *
     * @return \QR\TeamleaderApiClient\Serializer\FieldDescription\Field[]
     */
    public function getFields(): array
    {
        $fields = [];
        foreach ($this->getFieldMapping() as $key => $value) {
            $fields[] = $this->convertToField($key, $value);
        }

        return $fields;
    }

    protected function convertToField(int|string $key, array|string $value): Field
    {
        // Set up the defaults.
        $fieldName = is_numeric($key) ? $value : $key;
        $getter = 'get'.$this->toUpperCamelCase($fieldName);
        $setter = 'set'.$this->toUpperCamelCase($fieldName);
        $targetClass = null;

        // If the value is an array, we check if we can replace some defaults.
        if (\is_array($value)) {
            $getter = $value['getter'] ?? $getter;
            $setter = $value['setter'] ?? $setter;
            $targetClass = $value['target_class']
                ?? $targetClass;
        }

        return new Field($fieldName, $getter, $setter, $targetClass);
    }

    /**
     * @param $string
     *
     * @return string|string[]|null
     */
    protected function toUpperCamelCase(string $string): string
    {
        return $this->camelCaseToSnakeCaseNameConverter->denormalize($string);
    }

    /**
     * @return mixed[]
     */
    abstract protected function getFieldMapping(): array;
}
