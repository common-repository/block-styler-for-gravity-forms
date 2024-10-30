<?php
namespace WPT\GutenbergGravityForm\Gutenberg;

/**
 * Attributes.
 */
class Attributes
{
    // public function __get_attributes_sample_function()
    // {
    //     $attributes = [];

    //     return $attributes;
    // }

    /**
     * Get all attributes
     */
    public function get_attributes()
    {
        $attributes = $this->get_general_attributes() +
        $this->get_gravityform_wrapper_attributes() +
        $this->get_title_attributes() +
        $this->get_description_attributes() +
        $this->get_progressbar_wrapper_attributes() +
        $this->get_progressbar_title_attributes() +
        $this->get_progressbar_attributes() +
        $this->get_section_break_container_attributes() +
        $this->get_section_break_title_attributes() +
        $this->get_section_break_description_attributes() +
        $this->get_label_attributes() +
        $this->get_required_field_indicator_attributes() +
        $this->get_input_field_container_attributes() +
        $this->get_sub_label_attributes() +
        $this->input_field_description_attributes() +
        $this->button_attributes() +
        $this->input_field_attributes() +
        $this->confirmation_message_attributes() +
        $this->form_validation_message_attributes() +
        $this->field_validation_attributes() +
        $this->placeholder_attributes() +
        $this->footer_attributes();

        return $attributes;
    }

    public function placeholder_attributes()
    {
        return [
            'placeholderTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "inherit",
                    "fontWeight"    => "normal",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "#000000",

                ],
            ],
        ];
    }

    public function field_validation_attributes()
    {
        return [
            'fieldValidationContainerMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '6px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'fieldValidationContainerPadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '8px',
                    'right'      => '0',
                    'bottom'     => '6px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'fieldValidationContainerBackground' => [
                'type'    => 'string',
                'default' => 'rgba(255,223,224,.25)',

            ],
            'fieldValidationContainerBorder'     => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "1px",
                        'right'  => "0",
                        'bottom' => "1px",
                        'left'   => "0",
                    ],
                    'color'      => '#C89797',
                    'style'      => 'solid',
                    'equalWidth' => false,
                ],
            ],
            'fieldValidationTypography'          => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "0.813em",
                    "fontWeight"    => "700",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "#790000",
                ],
            ],

        ];
    }

    public function form_validation_message_attributes()
    {
        return [

            'formValidationMargin'        => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '25px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'formValidationPadding'       => [
                'type'    => 'object',
                'default' => [
                    'top'        => '16px',
                    'right'      => '16px',
                    'bottom'     => '16px',
                    'left'       => '48px',
                    'equalSpace' => false,
                ],
            ],
            'validationMessageTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "1em",
                    "fontWeight"    => "700",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "#790000",
                ],
            ],

            'validationMessageBackground' => [
                'type'    => 'string',
                'default' => 'rgba(255,255,255,0)',
            ],

            'validationMessageBorder'     => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "2px",
                        'right'  => "0",
                        'bottom' => "2px",
                        'left'   => "0",
                    ],
                    'color'      => '#790000',
                    'style'      => 'solid',
                    'equalWidth' => false,
                ],
            ],

        ];
    }

    public function confirmation_message_attributes()
    {
        return [
            'confirmationPadding'      => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => true,
                ],
            ],
            'confirmationMargin'       => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => true,
                ],
            ],
            'confirmationTypography'   => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "1em",
                    "fontWeight"    => "normal",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "center",
                    "textTransform" => "none",
                    "color"         => "#3a3a3a",
                ],
            ],
            'confirmationBackground'   => [
                'type'    => 'object',
                'default' => [
                    "color"    => "#ffffff",
                    "image"    => "none",
                    "repeat"   => "initial",
                    "size"     => "contain",
                    "position" => "center center",
                ],
            ],

            'confirmationBorder'       => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "0px",
                        'right'  => "0px",
                        'bottom' => "0px",
                        'left'   => "0px",
                    ],
                    'color'      => '#000000',
                    'style'      => 'solid',
                    'equalWidth' => true,
                ],
            ],
            'confirmationBorderRadius' => [
                'type'    => 'object',
                'default' => [
                    "radius"      => [
                        'topLeft'     => "0px",
                        'topRight'    => "0px",
                        'bottomRight' => "0px",
                        'bottomLeft'  => "0px",
                    ],
                    'equalRadius' => true,
                ],
            ],
        ];
    }

    public function footer_attributes()
    {
        return [
            'footerMargin'  => [
                'type'    => 'object',
                'default' => [
                    'top'        => '14px',
                    'right'      => '0',
                    'bottom'     => '14px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'footerPadding' => [
                'type'    => 'object',
                'default' => [
                    'top'        => '16px',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
        ];
    }

    public function button_attributes()
    {
        return [

            'buttonTypography'        => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"           => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"             => "1em",
                    "fontWeight"           => "bold",
                    "fontStyle"            => "normal",
                    "lineHeight"           => "normal",
                    "letterSpacing"        => "normal",
                    "wordSpacing"          => "normal",
                    "textAlign"            => "inherit",
                    "textTransform"        => "none",
                    "color"                => "#ffffff",
                    "colorHover"           => "#ffffff",
                    "backgroundColor"      => "#0274be",
                    "backgroundColorHover" => "#3a3a3a",
                ],
            ],
            'buttonBackground'        => [
                'type'    => 'object',
                'default' => [
                    "default" => "#0274be",
                    "hover"   => "#3a3a3a",
                ],
            ],

            'buttonBorder'            => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "0px",
                        'right'  => "0px",
                        'bottom' => "0px",
                        'left'   => "0px",
                    ],
                    'color'      => '#0274be',
                    'style'      => 'solid',
                    'equalWidth' => true,
                ],
            ],

            'buttonBorderHover'       => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "0px",
                        'right'  => "0px",
                        'bottom' => "0px",
                        'left'   => "0px",
                    ],
                    'color'      => '#3a3a3a',
                    'style'      => 'solid',
                    'equalWidth' => true,
                ],
            ],
            'buttonBorderRadius'      => [
                'type'    => 'object',
                'default' => [
                    "radius"      => [
                        "topLeft"     => '2px',
                        "topRight"    => '2px',
                        "bottomRight" => '2px',
                        "bottomLeft"  => '2px',
                    ],
                    "equalRadius" => true,
                ],
            ],
            'buttonBorderRadiusHover' => [
                'type'    => 'object',
                'default' => [
                    "radius"      => [
                        "topLeft"     => '2px',
                        "topRight"    => '2px',
                        "bottomRight" => '2px',
                        "bottomLeft"  => '2px',
                    ],
                    "equalRadius" => true,
                ],
            ],

            'buttonMargin'            => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '16px',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'buttonPadding'           => [
                'type'    => 'object',
                'default' => [
                    'top'        => '10px',
                    'right'      => '30px',
                    'bottom'     => '10px',
                    'left'       => '30px',
                    'equalSpace' => false,
                ],
            ],
            'buttonAlignment'         => [
                'type'    => 'string',
                'default' => 'left',
            ],

        ];
    }

    public function get_description_attributes()
    {
        return [
            'descriptionPadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '16px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'descriptionMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],

            'descriptionTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "inherit",
                    "fontWeight"    => "400",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",

                ],
            ],
        ];
    }

    public function get_general_attributes()
    {
        $attributes = [
            'cssId'                   => [
                'type'    => 'string',
                'default' => 'gravityform-block',
            ],
            'isPremium'               => [
                'type'    => 'boolean',
                'default' => false,
            ],
            'className'               => [
                'type'    => 'string',
                'default' => '',
            ],
            'loadGoogleFontsManually' => [
                'type'    => 'boolean',
                'default' => false,
            ],
            'id'                      => [
                'type'    => 'string',
                'default' => '',
            ],
            'title'                   => [
                'type'    => 'boolean',
                'default' => true,
            ],

            'description'             => [
                'type'    => 'boolean',
                'default' => true,
            ],
            'ajax'                    => [
                'type'    => 'boolean',
                'default' => false,
            ],

            'tabindex'                => [
                'type'    => 'string',
                'default' => '',
            ],
            'field_values'            => [
                'type'    => 'string',
                'default' => '',
            ],

        ];

        return $attributes;
    }

    public function get_gravityform_wrapper_attributes()
    {
        $attributes = [
            'padding'      => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],

            'margin'       => [
                'type'    => 'object',
                'default' => [
                    'top'        => '16px',
                    'right'      => '0',
                    'bottom'     => '16px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],

            'border'       => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "0px",
                        'right'  => "0px",
                        'bottom' => "0px",
                        'left'   => "0px",
                    ],
                    'color'      => '#ffffff00',
                    'style'      => 'solid',
                    'equalWidth' => true,
                ],
            ],

            'background'   => [
                'type'    => 'object',
                'default' => [
                    "color"    => "",
                    "image"    => "none",
                    "repeat"   => "initial",
                    "size"     => "contain",
                    "position" => "center center",
                ],
            ],
            'borderRadius' => [
                'type'    => 'object',
                'default' => [
                    "radius"      => [
                        'topLeft'     => "0px",
                        'topRight'    => "0px",
                        'bottomRight' => "0px",
                        'bottomLeft'  => "0px",
                    ],
                    'equalRadius' => true,
                ],
            ],

        ];

        return $attributes;
    }

    public function get_input_field_container_attributes()
    {
        return [
            'inputFieldContainerPadding' => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'inputFieldContainerMargin'  => [
                'type'    => 'object',
                'default' => [
                    'top'        => '8px',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
        ];
    }

    public function get_label_attributes()
    {
        return [

            'labelPadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'labelMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'labelTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "inherit",
                    "fontWeight"    => "700",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "1.3",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
        ];
    }

    public function get_progressbar_attributes()
    {
        return [
            'pbBackgroundColor' => [
                'type'    => 'string',
                'default' => '#036493',

            ],
            'pbTextColor'       => [
                'type'    => 'string',
                'default' => '#ffffff',
            ],

        ];
    }

    public function get_progressbar_title_attributes()
    {
        return [
            'pbTitlePadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'pbTitleMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '8px',
                    'left'       => '12px',
                    'equalSpace' => false,
                ],
            ],
            'pbTitleTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => ".813em",
                    "fontWeight"    => "400",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "1",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
            'pbTitleOpacity'    => [
                'type'    => 'float',
                'default' => 0.6,
            ],

        ];
    }

    public function get_progressbar_wrapper_attributes()
    {
        return [
            'pbWrapperPadding' => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '16px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'pbWrapperMargin'  => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '16px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],

        ];
    }

    public function get_required_field_indicator_attributes()
    {
        return [
            'requiredFieldIndicatorColor' => [
                'type'    => 'string',
                'default' => '#790000',
            ],

        ];
    }

    public function get_section_break_container_attributes()
    {
        return [
            'sectionBreakContainerPadding'           => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '16px',
                    'bottom'     => '8px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sectionBreakContainerMargin'            => [
                'type'    => 'object',
                'default' => [
                    'top'        => '16px',
                    'right'      => '16px',
                    'bottom'     => '28px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sectionBreakContainerBorderBottomColor' => [
                'type'    => 'string',
                'default' => '#cccccc',
            ],

        ];
    }

    public function get_section_break_description_attributes()
    {
        return [
            'sbDescriptionPadding'   => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '16px',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sbDescriptionMargin'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sbDescriptionTypograhy' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => ".813em",
                    "fontWeight"    => "inherit",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "inherit",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
        ];
    }

    public function get_section_break_title_attributes()
    {
        return [
            'sbTitlePadding'   => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sbTitleMargin'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sbTitleTypograhy' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "1.25em",
                    "fontWeight"    => "700",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",

                ],
            ],
        ];
    }

    public function get_sub_label_attributes()
    {
        return [
            'sublPadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'sublMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '1px',
                    'right'      => '0',
                    'bottom'     => '9px',
                    'left'       => '1px',
                    'equalSpace' => false,
                ],
            ],
            'sublTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => ".813em",
                    "fontWeight"    => "inherit",
                    "fontStyle"     => "inherti",
                    "lineHeight"    => "normal",
                    "letterSpacing" => ".5pt",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],

        ];
    }

    public function get_title_attributes()
    {
        $attributes = [
            'titlePadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'bottom'     => '0',
                    'right'      => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'titleMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '10px',
                    'right'      => '0',
                    'bottom'     => '6px',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'titleTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "1.25em",
                    "fontWeight"    => "700",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
        ];

        return $attributes;
    }

    public function input_field_attributes()
    {
        return [
            'inputPadding'         => [
                'type'    => 'object',
                'default' => [
                    'top'        => '5px',
                    'right'      => '4px',
                    'bottom'     => '5px',
                    'left'       => '4px',
                    'equalSpace' => false,
                ],
            ],
            'inputMargin'          => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'inputTypography'      => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => "inherit",
                    "fontWeight"    => "normal",
                    "fontStyle"     => "normal",
                    "lineHeight"    => "normal",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
            'inputBorder'          => [
                'type'    => 'object',
                'default' => [
                    'width'      => [
                        'top'    => "1px",
                        'right'  => "1px",
                        'bottom' => "1px",
                        'left'   => "1px",
                    ],
                    'color'      => '#eaeaea',
                    'style'      => 'solid',
                    'equalWidth' => true,
                ],
            ],
            'inputBorderRadius'    => [
                'type'    => 'object',
                'default' => [
                    "radius"      => [
                        'topLeft'     => "0",
                        'topRight'    => "0",
                        'bottomRight' => "0",
                        'bottomLeft'  => "0",
                    ],
                    'equalRadius' => true,
                ],
            ],

            'inputBackgroundColor' => [
                'type'    => 'string',
                'default' => '#fafafa',
            ],
        ];
    }

    public function input_field_description_attributes()
    {
        return [
            'inputDescriptionPadding'    => [
                'type'    => 'object',
                'default' => [
                    'top'        => '16px',
                    'right'      => '16px',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],

            'inputDescriptionMargin'     => [
                'type'    => 'object',
                'default' => [
                    'top'        => '0',
                    'right'      => '0',
                    'bottom'     => '0',
                    'left'       => '0',
                    'equalSpace' => false,
                ],
            ],
            'inputDescriptionTypography' => [
                'type'    => 'object',
                'default' => [
                    "fontFamily"    => ['label' => 'inherit', 'value' => 'inherit', 'google' => false],
                    "fontSize"      => ".813em",
                    "fontWeight"    => "inherit",
                    "fontStyle"     => "inherit",
                    "lineHeight"    => "inherit",
                    "letterSpacing" => "normal",
                    "wordSpacing"   => "normal",
                    "textAlign"     => "inherit",
                    "textTransform" => "none",
                    "color"         => "initial",
                ],
            ],
        ];
    }
};
