<?php
/**
 * Plugin Name:     Block Styler For Gravity Forms
 * Description:     Embed & style gravityform within the gutenberg editor.
 * Author:          WP Tools
 * Plugin URI:      https://wptools.app/wordpress-plugin/gutenberg-block-styler-for-gravity-forms/?utm_source=user-website&utm_medium=page&utm_campaign=guten-gf&utm_content=plugin-header
 * Text Domain:     block-styler-for-gravity-forms
 * Domain Path:     /languages
 * Version:         6.4.0
 *
 * @package         Gutenberg_Block_For_Gravity_Forms
 */

require_once __DIR__ . '/freemius.php';
require_once __DIR__ . '/vendor/autoload.php';

$loader = \WPT\GutenbergGravityForm\Loader::getInstance();

$loader['plugin_name']    = 'Block Styler For Gravity Forms';
$loader['plugin_version'] = '6.4.0';
$loader['plugin_dir']     = __DIR__;
$loader['plugin_url']     = plugins_url('/' . basename(__DIR__));
$loader['plugin_file']    = __FILE__;
$loader['plugin_slug']    = 'block-styler-for-gravity-forms';

$loader->run();
