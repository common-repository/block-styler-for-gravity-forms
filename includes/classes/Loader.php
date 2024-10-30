<?php
namespace WPT\GutenbergGravityForm;

use WPTools\Pimple\Container;

/**
 * Container
 */
class Loader extends Container
{
    /**
     *
     * @var mixed
     */
    public static $instance;

    public function __construct()
    {
        parent::__construct();

        $this['bootstrap'] = function ($container) {
            return new WP\Bootstrap($container);
        };

        $this['gravityform'] = function ($container) {
            return new GravityForm\GravityForm($container);
        };

        $this['gravityform_styler_block'] = function ($container) {
            return new Gutenberg\GravityFormStylerBlock($container);
        };

        $this['freemius'] = function ($container) {
            return new Freemius\Freemius($container);
        };

    }

    /**
     * Get container instance.
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Loader();
        }

        return self::$instance;
    }

    /**
     * Plugin run
     */
    public function run()
    {
        // activation hook
        register_activation_hook($this['plugin_file'], [$this['bootstrap'], 'register_activation_hook']);

        add_action(
            'rest_api_init',
            [
                $this['gravityform'],
                'rest_api_init',
            ]
        );

        add_action('admin_head', [$this['freemius'], 'setup_premium_javascript_variable']);

        add_action('init', [$this['gravityform_styler_block'], 'register']);

        // add_action('wp_enqueue_scripts', [$this['divi'], 'enqueue_divi_module_assets']);
        // move gravityform scripts to footer
        add_filter('gform_init_scripts_footer', function () {return true;});

        $loader = $this;
        add_action(
            'admin_menu',
            function () use ($loader) {
                add_submenu_page(
                    'options-general.php',
                    $loader['plugin_name'],
                    $loader['plugin_name'],
                    'manage_options',
                    $loader['plugin_slug'],
                    function () use ($loader) {
                        ob_start();
                        require $loader['plugin_dir'] . '/resources/views/sub_menu.php';
                        // phpcs:ignore
                        echo ob_get_clean();
                    }
                );
            },
            99
        );

        add_action('wp_loaded', function () {

            $registered_blocks = \WP_Block_Type_Registry::get_instance()->get_all_registered();

            foreach ($registered_blocks as $name => $block) {
                if ($name == 'wptools/gravityform-styler') {
                    // block options fix.
                    $block->attributes['extUtilities'] = [
                        'type'    => 'object',
                        'default' => [],
                    ];

                }

            }

        }, 100);

    }
}
