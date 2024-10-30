<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 * CSS Variables
 */
class CssVariables {
    protected $attributes;

    protected $attributesDefinition;

    protected $components;

    protected $cssVariablePrefix;

    protected $selector;

    public function __construct($attributes, $cssVariablePrefix, $selector) {
        $this->attributes        = $attributes;
        $this->cssVariablePrefix = $cssVariablePrefix;
        $this->selector          = $selector;
        $this->components        = [];
    }

    public function addAttributesDefinition($attributesDefinition) {
        $this->attributesDefinition = $attributesDefinition;
    }

    public function addBackground($cssName, $attributeName) {
        return $this->addComponent(new Background($cssName, $attributeName));
    }

    public function addBorder($cssName, $attributeName) {
        return $this->addComponent(new Border($cssName, $attributeName));
    }

    public function addBorderRadius($cssName, $attributeName) {
        return $this->addComponent(new BorderRadius($cssName, $attributeName));
    }

    public function addComponent($component) {
        $component->setAttributes($this->attributes);
        $component->addAttributesDefinition($this->attributesDefinition);
        $this->components[] = $component;
        return $this;
    }

    /**
     * Adds spacing component
     */
    public function addSpacing($cssName, $attributeName) {
        return $this->addComponent(new Spacing($cssName, $attributeName));
    }

    public function addSingleValue($cssName, $attributeName) {
        return $this->addComponent(new SingleValueComponent($cssName, $attributeName));
    }

    /**
     *
     */
    public function addTypography($cssName, $attributeName) {
        return $this->addComponent(new Typography($cssName, $attributeName));
    }

    public function addTabbedBackgroundColor($cssName, $attributeName) {
        return $this->addComponent(new TabbedBackgroundColor($cssName, $attributeName));
    }

    public function getStyles() {
        $styles = "";
        foreach ($this->components as $component) {
            foreach ($component->getCssVariablesArray() as $variableName => $variableValue) {
                $cssVariableName = sprintf('--%s-%s', $this->cssVariablePrefix, $variableName);
                $styles .= sprintf("%s : %s;\n", $cssVariableName, $variableValue);
            }
        }

        return sprintf("%s{%s}", $this->selector, $styles);
    }
}
