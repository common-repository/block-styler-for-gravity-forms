<?php

namespace WPT\GutenbergGravityForm\Freemius;

/**
 * Freemius.
 */
class Freemius
{
    protected  $container ;
    /**
     * Constructor.
     */
    public function __construct( $container )
    {
        $this->container = $container;
    }
    
    public function setup_premium_javascript_variable()
    {
        $isPremium = false;
        echo  sprintf( '<script type="text/javascript">var wptools_gutenberg_gf_styler_is_premium = %b;</script>', $isPremium ) ;
        echo  '<style>.gform_wrapper{display:block !important;}</style>' ;
    }

}