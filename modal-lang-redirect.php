<?php

/**
 * Plugin Name: Modal lang Redirect
 * Plugin URI: https://github.com/Shayerdev/plugin-cpamatica-autoposts/tree/main
 * Description: Plugin get component modal for redirect to another page
 * Version: 1.0
 * Requires PHP: 7.4
 * Author: Shayer Developer
 * Text Domain: example.com
 * Domain Path: /src/lang
 */

require_once __DIR__ . '/vendor/autoload.php';
use mlr\shortcode;
use mlr\styles;
use mlr\scripts;
use mlr\filters;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

# Root folder
const MLR_PLUGIN_DIR = __FILE__;

const MLR_LOCALE = "mlt-plugin";

# Name filter for change modal title
const FILTER_NAME_MODAL_LABEL = "mlr_modal_label";

# Name action init shortcode
const ACTION_NAME_INIT_SHORTCODE = "action_modal_lang_redirect";

# Name shortcode for display modal
const SHORTCODE_NAME_MODAL = "modal_lang_redirect";

class MLR
{
    public function __construct()
    {
        $this->initShortcodes();
        $this->modalTemplate();
        $this->initAssets();
        $this->initFilters();
    }
    protected function initShortcodes()
    {
        (new shortcode\ShortcodeModal())->init();
    }

    public function modalTemplate()
    {
        add_action(ACTION_NAME_INIT_SHORTCODE, function ($postId, $attr) {
            try {
                # Connect file plugin
                $plugin_file_path = plugin_dir_path(MLR_PLUGIN_DIR) . 'templates/modal-select-lang.php';

                # Init filter modal data
                $modalData = apply_filters(
                    FILTER_NAME_MODAL_LABEL,
                    array(
                        'title_modal' => 'Some Title'
                    )
                );

                # Check exist file (Required)
                if (file_exists($plugin_file_path)) {
                    $params = array(
                        'postId' => $postId,
                        'attr' => $attr,
                        'modalData' => $modalData
                    );
                    include_once $plugin_file_path;
                } else {
                    throw new Exception('File template modal not detect', 0);
                }
            } catch (Exception $e) {
                error_log($e);
                echo $e;
            }
        }, 10, 2);
    }

    public function initAssets()
    {
        # Assets for Modal in frontend
        add_action(ACTION_NAME_INIT_SHORTCODE, function () {
            (new styles\StyleModal()); // Connect Modal Style
            (new scripts\ScriptModal()); // Connect Modal Scripts
        }, 10, 2);
    }

    public function initFilters()
    {
        new filters\FiltersModal();
    }
}

new MLR();
