<?php
namespace WPT\GutenbergGravityForm\WP\Gutenberg;

use WP_REST_Controller;
use WP_Block_Type_Registry;

/**
 * Block Renderer REST API: WP_REST_Block_Renderer_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 *
 * @since 5.0.0
 */

/**
 * Controller which provides REST endpoint for rendering a block.
 *
 * @see WP_REST_Controller
 * @since 5.0.0
 */
class WP_REST_Block_Renderer_Controller extends WP_REST_Controller {

    /**
     * Constructs the controller.
     *
     * @since 5.0.0
     */
    public function __construct() {
        $this->namespace = 'wpt/v2';
        $this->rest_base = 'gf-block-renderer';
    }

    /**
     * Registers the necessary REST API routes, one for each dynamic block.
     *
     * @since 5.0.0
     */
    public function register_routes() {
        $block_type = WP_Block_Type_Registry::get_instance()->get_registered('wptools/gravityform-styler');

        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base . '/(?P<name>' . $block_type->name . ')',
            [
                'args'   => [
                    'name' => [
                        'description' => __('Unique registered name for the block.'),
                        'type'        => 'string',
                    ],
                ],
                [
                    'methods'             => 'POST',
                    'callback'            => [$this, 'get_item'],
                    'permission_callback' => [$this, 'get_item_permissions_check'],
                    'args'                => [
                        'context'    => $this->get_context_param(['default' => 'view']),
                        'attributes' => [
                            /* translators: %s: The name of the block. */
                            'description'          => sprintf(__('Attributes for %s block'), $block_type->name),
                            'type'                 => 'object',
                            'additionalProperties' => false,
                            'properties'           => $block_type->get_attributes(),
                            'default'              => [],
                        ],
                        'post_id'    => [
                            'description' => __('ID of the post context.'),
                            'type'        => 'integer',
                        ],
                    ],
                ],
                'schema' => [$this, 'get_public_item_schema'],
            ]
        );

    }

    /**
     * Checks if a given request has access to read blocks.
     *
     * @since 5.0.0
     *
     * @param  WP_REST_Request $request Request.
     * @return true|WP_Error   True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request) {
        global $post;

        $post_id = isset($request['post_id']) ? intval($request['post_id']) : 0;

        if (0 < $post_id) {
            $post = get_post($post_id);

            if (!$post || !current_user_can('edit_post', $post->ID)) {
                return new WP_Error(
                    'block_cannot_read',
                    __('Sorry, you are not allowed to read blocks of this post.'),
                    [
                        'status' => rest_authorization_required_code(),
                    ]
                );
            }
        } else {
            if (!current_user_can('edit_posts')) {
                return new WP_Error(
                    'block_cannot_read',
                    __('Sorry, you are not allowed to read blocks as this user.'),
                    [
                        'status' => rest_authorization_required_code(),
                    ]
                );
            }
        }

        return true;
    }

    /**
     * Returns block output from block's registered render_callback.
     *
     * @since 5.0.0
     *
     * @param  WP_REST_Request           $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request) {
        global $post;

        $post_id = isset($request['post_id']) ? intval($request['post_id']) : 0;

        if (0 < $post_id) {
            $post = get_post($post_id);

            // Set up postdata since this will be needed if post_id was set.
            setup_postdata($post);
        }
        $registry = WP_Block_Type_Registry::get_instance();
        $block    = $registry->get_registered($request['name']);

        if (null === $block) {
            return new WP_Error(
                'block_invalid',
                __('Invalid block.'),
                [
                    'status' => 404,
                ]
            );
        }

        $data = [
            'rendered' => $block->render($request->get_param('attributes')),
        ];
        return rest_ensure_response($data);
    }

    /**
     * Retrieves block's output schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema() {
        if ($this->schema) {
            return $this->schema;
        }

        $this->schema = [
            '$schema'    => 'http://json-schema.org/schema#',
            'title'      => 'rendered-block',
            'type'       => 'object',
            'properties' => [
                'rendered' => [
                    'description' => __('The rendered block.'),
                    'type'        => 'string',
                    'required'    => true,
                    'context'     => ['edit'],
                ],
            ],
        ];
        return $this->schema;
    }
}
