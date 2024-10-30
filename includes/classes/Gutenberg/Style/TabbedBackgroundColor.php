<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class TabbedBackgroundColor {
    use DefaultComponentFunctions;

    public function __construct($cssName, $attributeName) {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray() {
        $values = $this->getAttributeValues();
        if (isset($values['default'])) {
            $vars[sprintf('%s', $this->cssName)] = $values['default'];
        }
        if (isset($values['hover'])) {
            $vars[sprintf('%s-hover', $this->cssName)] = $values['hover'];
        }

        return $vars;
    }
}
