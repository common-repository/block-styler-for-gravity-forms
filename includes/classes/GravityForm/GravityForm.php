<?php

namespace WPT\GutenbergGravityForm\GravityForm;

/**
 * GravityForm.
 */
class GravityForm
{
    protected  $container ;
    /**
     * Constructor.
     */
    public function __construct( $container )
    {
        $this->container = $container;
    }
    
    /**
     * Forms list
     */
    public function get_forms_list( $data )
    {
        $options = [];
        $options[] = [
            'label' => 'Select Gravity Form',
            'value' => '',
        ];
        
        if ( class_exists( '\\GFAPI' ) ) {
            $forms = \GFAPI::get_forms();
            foreach ( $forms as $form ) {
                $options[] = [
                    'label' => $form['title'],
                    'value' => $form['id'],
                ];
            }
        }
        
        return $options;
    }
    
    /**
     * Gravity form list api.
     */
    public function rest_api_init()
    {
        register_rest_route( 'wptools/gravityforms', '/getFormsList', [
            'methods'             => 'GET',
            'callback'            => [ $this, 'get_forms_list' ],
            'permission_callback' => function () {
            return current_user_can( 'manage_options' );
        },
        ] );
    }

}