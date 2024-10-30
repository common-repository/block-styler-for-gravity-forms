<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 *
 */
class Typography
{
    use DefaultComponentFunctions;

    public function __construct(
        $cssName,
        $attributeName
    ) {
        $this->cssName       = $cssName;
        $this->attributeName = $attributeName;
        $this->cssVars       = [];
    }

    public function getCssVariablesArray()
    {
        $values = $this->getAttributeValues();

        $vars = [];

        foreach ($values as $key => $value) {
            switch ($key) {
                case 'fontFamily':
                    $vars[sprintf('%s-%s', $this->cssName, 'font-family')] = $values['fontFamily']['value'];
                    if ($values['fontFamily']['google']) {
                        GoogleFonts::$fontFamilies[] = rawurlencode($values['fontFamily']['value']);
                    }
                    break;

                case 'fontSize':
                    $vars[sprintf('%s-%s', $this->cssName, 'font-size')] = $values['fontSize'];
                    break;

                case 'fontWeight':
                    $vars[sprintf('%s-%s', $this->cssName, 'font-weight')] = $values['fontWeight'];
                    break;

                case 'fontStyle':
                    $vars[sprintf('%s-%s', $this->cssName, 'font-style')] = $values['fontStyle'];
                    break;

                case 'lineHeight':
                    $vars[sprintf('%s-%s', $this->cssName, 'line-height')] = $values['lineHeight'];
                    break;

                case 'letterSpacing':
                    $vars[sprintf('%s-%s', $this->cssName, 'letter-spacing')] = $values['letterSpacing'];
                    break;

                case 'wordSpacing':
                    $vars[sprintf('%s-%s', $this->cssName, 'word-spacing')] = $values['wordSpacing'];
                    break;

                case 'textAlign':
                    $vars[sprintf('%s-%s', $this->cssName, 'text-align')] = $values['textAlign'];
                    break;

                case 'textTransform':
                    $vars[sprintf('%s-%s', $this->cssName, 'text-transform')] = $values['textTransform'];
                    break;

                case 'color':
                    $vars[sprintf('%s-%s', $this->cssName, 'color')] = $values['color'];
                    break;

                case 'colorHover':
                    $vars[sprintf('%s-%s', $this->cssName, 'color-hover')] = $values['colorHover'];
                    break;

                default:
                    # code...
                    break;
            }
        }

        return $vars;
    }
}
