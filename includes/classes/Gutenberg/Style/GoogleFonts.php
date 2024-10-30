<?php
namespace WPT\GutenbergGravityForm\Gutenberg\Style;

/**
 * Google fonts class
 */
class GoogleFonts
{
    public static $fontFamilies = [];

    public static function importFonts($handle)
    {
        foreach (self::$fontFamilies as $fontFamily) {
            wp_enqueue_style('wpt-' . sanitize_title($fontFamily), sprintf("https://fonts.googleapis.com/css?family=%s", $fontFamily));
        }
    }
}
