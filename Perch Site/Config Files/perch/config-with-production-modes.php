<?php
    define('PERCH_LICENSE_KEY', 'P31705-XUL224-CET147-HPM115-FZW017');
    $http_host = getenv('HTTP_HOST');

    define("PERCH_DB_PREFIX", "perch3_");

    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'mark@pixelsmiths.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Mark Phoenix');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);

    // Options

    // Environments
    define(' PERCH_PRODUCTION_MODE', 'PERCH_DEVELOPMENT');
    define(' PERCH_PRODUCTION_MODE', 'PERCH_STAGING');
    define(' PERCH_PRODUCTION_MODE', 'PERCH_PRODUCTION');

    // Security
    define('PERCH_PARANOID', true);

    define('PERCH_MAX_FAILED_LOGINS',	10);
    define('PERCH_AUTH_LOCKOUT_DURATION',	'1 HOUR');
    define('PERCH_STRONG_PASSWORDS', true);
    define('PERCH_PASSWORD_MIN_LENGTH',	6);
    define('PERCH_FORCE_SECURE_COOKIES', true);

    // Editor
    define('PERCH_CUSTOM_EDITOR_CONFIGS', true);

    // Debug
    define('PERCH_DEBUG', true);

    switch($http_host)
{
    case('relative-paths') :
      define("PERCH_DB_USERNAME", 'USERNAME');
      define("PERCH_DB_PASSWORD", 'PASSWORD');
      define("PERCH_DB_SERVER", "localhost");
      define("PERCH_DB_DATABASE", "DATABASE");
        break;

    case('dev.relativepaths.uk') :
      define("PERCH_DB_USERNAME", 'USERNAME');
      define("PERCH_DB_PASSWORD", 'PASSWORD');
      define("PERCH_DB_SERVER", "localhost");
      define("PERCH_DB_DATABASE", "DATABASE");
        break;

    default :
        define("PERCH_DB_USERNAME", 'USERNAME');
        define("PERCH_DB_PASSWORD", 'PASSWORD');
        define("PERCH_DB_SERVER", "localhost");
        define("PERCH_DB_DATABASE", "DATABASE");
        break;
    }

  ?>
