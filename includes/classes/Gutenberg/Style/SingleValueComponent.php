<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class SingleValueComponent {
    use DefaultComponentFunctions;

    public function __construct($cssName, $attributeName) {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray() {

        $vars = [];

        $value                = $this->getAttributeValues();
        $vars[$this->cssName] = $value;

        return $vars;
    }
}
