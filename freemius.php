<?php

if ( !function_exists( 'wptool_gbfgf_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wptool_gbfgf_fs()
    {
        global  $wptool_gbfgf_fs ;
        
        if ( !isset( $wptool_gbfgf_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wptool_gbfgf_fs = fs_dynamic_init( [
                'id'             => '5092',
                'slug'           => 'block-styler-for-gravity-forms',
                'type'           => 'plugin',
                'public_key'     => 'pk_ce5b92ca3b25375a2bf12039049a7',
                'is_premium'     => false,
                'premium_suffix' => 'Premium',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'trial'          => [
                'days'               => 7,
                'is_require_payment' => false,
            ],
                'menu'           => [
                'slug'    => 'block-styler-for-gravity-forms',
                'support' => false,
                'parent'  => [
                'slug' => 'options-general.php',
            ],
            ],
                'is_live'        => true,
            ] );
        }
        
        return $wptool_gbfgf_fs;
    }
    
    // Init Freemius.
    wptool_gbfgf_fs();
    // Signal that SDK was initiated.
    do_action( 'wptool_gbfgf_fs_loaded' );
}
