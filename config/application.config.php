<?php
return array(
    'modules' => array(
        'AssetManager',
        'Article',
        'Application',
        'ZeTheme',
        'ScnSocialAuth',
        'ZfcBase',
        'ZfcUser',
        'PhlyContact',
        'BjyAuthorize',
        //'RoleUserBridge',
        'WdevMarkdown',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);