<?php

namespace mlr\scripts;

use helpers;

class ScriptModal extends helpers\CreateAssets
{
    public function __construct()
    {
        parent::__construct('scripts', array(
            'name' => 'mlr-frontend-script',
            'src'  => plugin_dir_url(MLR_PLUGIN_DIR) . 'assets/build/js/frontend_scripts.js',
            'deps' => array(),
            'version' => '',
            'in_footer' => true
        ));
    }
}
