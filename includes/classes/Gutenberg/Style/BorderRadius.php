<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class BorderRadius
{
    use DefaultComponentFunctions;

    public function __construct($cssName, $attributeName)
    {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray()
    {
        $vars[sprintf('%s-border-radius-top-left', $this->cssName)]    = $this->attributes[$this->attributeName]['radius']['topLeft'];
        $vars[sprintf('%s-border-radius-top-right', $this->cssName)]  = $this->attributes[$this->attributeName]['radius']['topRight'];
        $vars[sprintf('%s-border-radius-bottom-right', $this->cssName)] = $this->attributes[$this->attributeName]['radius']['bottomRight'];
        $vars[sprintf('%s-border-radius-bottom-left', $this->cssName)]   = $this->attributes[$this->attributeName]['radius']['bottomLeft'];


        return $vars;
    }
}
