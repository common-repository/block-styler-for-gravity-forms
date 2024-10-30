<?php

namespace WPT\GutenbergGravityForm\Gutenberg;

use  Style\CssVariables ;
/**
 * GravityFormStylerBlock.
 */
class GravityFormStylerBlock
{
    protected  $container ;
    /**
     * Constructor.
     */
    public function __construct( $container )
    {
        $this->container = $container;
    }
    
    public function register()
    {
        $attributes = new Attributes();
        // Register block styles for both frontend + backend.
        wp_register_style(
            'wptools-gravityforms-block-css',
            $this->container['plugin_url'] . '/dist/blocks.style.build.css',
            [ 'wp-editor' ],
            null
        );
        // Register block editor script for backend.
        wp_register_script( 'wptools-gravityforms-block-js', $this->container['plugin_url'] . '/dist/blocks.build.js', [
            'wp-blocks',
            'wp-element',
            'wp-components',
            'wp-editor'
        ] );
        // Register block editor styles for backend.
        wp_register_style(
            'wptools-gravityforms-block-editor-css',
            $this->container['plugin_url'] . '/dist/blocks.editor.build.css',
            [ 'wp-edit-blocks' ],
            null
        );
        register_block_type( 'wptools/gravityform-styler', [
            'render_callback' => [ $this, 'render_callback' ],
            'style'           => 'wptools-gravityforms-block-css',
            'editor_script'   => 'wptools-gravityforms-block-js',
            'editor_style'    => 'wptools-gravityforms-block-editor-css',
            'attributes'      => $attributes->get_attributes(),
        ] );
    }
    
    public function render_callback( $attributes, $content )
    {
        $selector = sprintf( 'div#gform_wrapper_%s', $attributes['id'] );
        $cssVariables = new Style\CssVariables( $attributes, 'wpt-gf', $selector );
        $cssVariables->addAttributesDefinition( ( new Attributes() )->get_attributes() );
        $cssVariables->addTabbedBackgroundColor( 'btn-background-color', 'buttonBackground' )->addSpacing( 'btn-margin', 'buttonMargin' )->addSpacing( 'btn-padding', 'buttonPadding' )->addSingleValue( 'btn-align', 'buttonAlignment' )->addBorder( 'btn', 'buttonBorder' )->addBorder( 'btn-hover', 'buttonBorderHover' )->addBorderRadius( 'btn', 'buttonBorderRadius' )->addBorderRadius( 'btn-hover', 'buttonBorderRadiusHover' )->addTypography( 'btn', 'buttonTypography' );
        $inlineCss = $cssVariables->getStyles();
        $shortcode = sprintf(
            '[gravityform id="%s" title="%s" description="%s" ajax="%s" tabindex="%s" field_values="%s" /]',
            $attributes['id'],
            ( $attributes['title'] ? 'true' : 'false' ),
            ( $attributes['description'] ? 'true' : 'false' ),
            ( $attributes['ajax'] ? 'true' : 'false' ),
            $attributes['tabindex'],
            $attributes['field_values']
        );
        ob_start();
        include $this->container['plugin_dir'] . '/resources/views/blocks/gravity-form-styler.php';
        $blockHtml = ob_get_clean();
        // phpcs:ignore
        if ( isset( $_GET['context'] ) and $_GET['context'] == 'edit' ) {
            return sprintf( "%s<style>%s</style>", $blockHtml, $inlineCss );
        }
        wp_register_style( 'wptools-gutenberg-gravityforms-styler-inline-css', false );
        wp_enqueue_style( 'wptools-gutenberg-gravityforms-styler-inline-css' );
        wp_add_inline_style( 'wptools-gutenberg-gravityforms-styler-inline-css', $inlineCss );
        if ( !$attributes['loadGoogleFontsManually'] ) {
            Style\GoogleFonts::importFonts( 'wptools-gutenberg-gravityforms-styler-inline-css' );
        }
        return $blockHtml;
    }

}