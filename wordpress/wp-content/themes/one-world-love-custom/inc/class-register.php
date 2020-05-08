<?php
/**
 * Register
 *
 * @package UniversalStreaming
 */

namespace OneWorldLove;

/**
 * Register Class
 *
 * @package OneWorldLove
 */
class Register
{

    /**
     * Theme instance.
     *
     * @var object
     */
    public $theme;

    /**
     * Class constructor.
     *
     * @param object $plugin Plugin class.
     */
    public function __construct($theme)
    {
        $this->theme = $theme;
    }

    /**
     * Add scripts to admin
     *
     * @action admin_enqueue_scripts
     */
    public function add_admin_assets()
    {
        wp_enqueue_script("{$this->theme->assets_prefix}-admin");
    }
}
