<?php

namespace mlr\shortcode;

use helpers;

class ShortcodeModal extends helpers\CreateShortcode
{
    public $name;

    public function __construct()
    {
        $this->name = SHORTCODE_NAME_MODAL;
        parent::__construct(array($this, 'callback'));
    }
    public function callback()
    {
        add_shortcode($this->name, function ($attr) {
            $attr = shortcode_atts(array(
                'lang' => 'UK,EN',
                'page' => '1,2'
            ), $attr, $this->name);

            global $post;
            ob_start();
            do_action(ACTION_NAME_INIT_SHORTCODE, $post->ID, $attr);
            return ob_get_clean();
        });
    }
}
