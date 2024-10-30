<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class Border {
    use DefaultComponentFunctions;

    public function __construct($cssName, $attributeName) {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray() {
        $values = $this->getAttributeValues();

        $vars[sprintf('%s-border-width-top', $this->cssName)]    = $this->attributes[$this->attributeName]['width']['top'];
        $vars[sprintf('%s-border-width-right', $this->cssName)]  = $this->attributes[$this->attributeName]['width']['right'];
        $vars[sprintf('%s-border-width-bottom', $this->cssName)] = $this->attributes[$this->attributeName]['width']['bottom'];
        $vars[sprintf('%s-border-width-left', $this->cssName)]   = $this->attributes[$this->attributeName]['width']['left'];
        $vars[sprintf('%s-border-color', $this->cssName)]        = $this->attributes[$this->attributeName]['color'];
        $vars[sprintf('%s-border-style', $this->cssName)]        = $this->attributes[$this->attributeName]['style'];

        return $vars;
    }
}
