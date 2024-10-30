<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class Spacing {
    use DefaultComponentFunctions;

    public function __construct($cssName, $attributeName) {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray() {
        $values = $this->getAttributeValues();
        if (isset($values['equalSpace'])) {
            unset($values['equalSpace']);
        }

        $vars = [];

        foreach ($values as $key => $value) {
            $vars[sprintf('%s-%s', $this->cssName, $key)] = $values[$key];
        }

        return $vars;
    }
}
