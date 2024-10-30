<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

trait DefaultComponentFunctions
{
    protected $attributeName;

    protected $attributes;

    protected $attributesDefinition;

    protected $cssName;

    public function addAttributesDefinition($attributesDefinition)
    {
        $this->attributesDefinition = $attributesDefinition;
    }

    public function getAttributeValues()
    {
        return $this->attributes[$this->attributeName];
    }

    /**
     * Get updated values only. This would result in streamlined css output
     */
    public function getUpdatedAttributes()
    {
        $updatedValues = [];
        $values        = $this->attributes[$this->attributeName];
        $default       = $this->attributesDefinition[$this->attributeName]['default'];

        if (is_array($default)) {
            foreach ($values as $key => $value) {
                if (isset($default[$key]) && ($default[$key] != $value)) {
                    $updatedValues[$key] = $value;
                }
            }
            return $updatedValues;
        } else {
            if ($default == $values) {
                return [];
            } else {
                $updatedValues[$this->attributeName] = $values;
                return $updatedValues;
            }
        }

    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
}
