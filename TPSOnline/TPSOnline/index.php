<?PHP
$PHP_SELF 	= $_SERVER['PHP_SELF'];
$URI 		= explode('/', $PHP_SELF);

// Define base path
if(count($URI) > 2):
	defined('BASEPATH')
    	|| define('BASEPATH', '/'.$URI[1]);
else:
	defined('BASEPATH')
    	|| define('BASEPATH', $URI[0]);
endif;


// Define path to home
defined('HOME_PUBLIC')
	|| define('HOME_PUBLIC', $_SERVER['DOCUMENT_ROOT'].BASEPATH);

// Check OS Server
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'):
		
	// Define path to system
	defined('SYSTEM_PATH')
		|| define('SYSTEM_PATH', 'D:/SYSTEM');
else:
	// Define path to system
	defined('SYSTEM_PATH')
		|| define('SYSTEM_PATH', '/media/SERVER/DEVELOPER/SYSTEM');  
endif;


// Define path to application
defined('APP_PATH')
    || define('APP_PATH', HOME_PUBLIC.'/application');
	
// Define path to modules directory
defined('MODULE_PATH')
    || define('MODULE_PATH', APP_PATH);
	
// Define path to configs directory
defined('CONFIGS_PATH')
    || define('CONFIGS_PATH', APP_PATH.'/config');
	
// Define path to data directory
defined('DATA_DIR')
    || define('DATA_DIR', HOME_PUBLIC.'/data/');

// Define path to logs directory
defined('LOGS_DIR')
    || define('LOGS_DIR', HOME_PUBLIC.'/data/logs/');

// Define path to image directory
defined('IMAGES_DIR')
    || define('IMAGES_DIR', '/data/uploads');

// Define path to upload files
defined('UPLOAD_PATH')
    || define('UPLOAD_PATH', realpath(dirname(__FILE__) . '/data'));
	
// Define path themes
$string = file_get_contents(DATA_DIR. "themes.json");
$json	= json_decode($string, true);

defined('VIEW_THEMES')
			|| define('VIEW_THEMES', $json['Themes']['name']);

// Template Extension
defined('TPLEXT')
			|| define('TPLEXT', ".tpl");
				
//chdir(dirname(__DIR__));
chdir(HOME_PUBLIC);

// Setup autoloading
require SYSTEM_PATH.'/Vendor/Smarty/libs/Smarty.class.php';
require 'init_autoloader.php';

// load constans variable
require CONFIGS_PATH.'/constans.config.php';

// Run the application!
Zend\Mvc\Application::init(require CONFIGS_PATH.'/application.config.php')->run();
