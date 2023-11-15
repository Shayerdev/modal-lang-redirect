<?php

namespace mlr\styles;

use helpers;

class StyleModal extends helpers\CreateAssets
{
    public function __construct()
    {
        parent::__construct('style', array(
            'name' => 'mlr-frontend-style',
            'src'  => plugin_dir_url(MLR_PLUGIN_DIR) . 'assets/build/css/frontend_styles.css',
            'deps' => array(),
            'version' => '',
            'media' => 'all'
        ));
    }
}
