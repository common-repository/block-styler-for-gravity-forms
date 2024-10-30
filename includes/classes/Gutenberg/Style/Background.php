<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class Background
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
        $values = $this->getAttributeValues();
        if (isset($values['color'])) {
            $vars[sprintf('%s-background-color', $this->cssName)] = $values['color'];
        }

        // wp_die(var_dump($values));

        if (isset($values['image'], $values['image']['url'])) {
            $vars[sprintf('%s-background-image', $this->cssName)] = 'url(' . $values['image']['url'] . ')';
        }

        $vars[sprintf('%s-background-repeat', $this->cssName)]   = $values['repeat'];
        $vars[sprintf('%s-background-size', $this->cssName)]     = $values['size'];
        $vars[sprintf('%s-background-position', $this->cssName)] = $values['position'];

        return $vars;
    }
}
