<?php
return array(
    'modules' => array(
		'Service',
        'SmartyModule',
		'Browser',
		'QuTcPdf',
		'Application',
		'Auth',
		'Main',
		'Dashboard',
		'Admin',
		'Penerimaan',
		'Pengiriman',
		'Dokumen',
		'Dispatch'
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            CONFIGS_PATH.'/autoload/{,*.}{global,local}.php',
        ),
		
		//'config_cache_enabled' => true,
		//'config_cache_key'	=> md5('config'),
		//'module_map_cache_enabled' => true,
		//'module_map_cache_key' => md5('module_map'),
		//'cache_dir'            => DATA_DIR . 'tmp/modulecache/',
        'module_paths' => array(
            APP_PATH.'/modules',
            SYSTEM_PATH.'/Core',
			SYSTEM_PATH.'/Vendor',
        ),
    ),

);
