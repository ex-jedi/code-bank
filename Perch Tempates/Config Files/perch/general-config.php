<?php
    define('PERCH_LICENSE_KEY', 'P21602-RYY608-BHZ161-RLB241-LVV027');

    define("PERCH_DB_USERNAME", 'master_control');
    define("PERCH_DB_PASSWORD", 'roygbiv');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "newworld_local");
    define("PERCH_DB_PREFIX", "perch3_");

    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'mark@pixelsmiths.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Mark Phoenix');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);

    define('PERCH_CUSTOM_EDITOR_CONFIGS', true);

    define('PERCH_EMAIL_METHOD', 'smtp');
    define('PERCH_EMAIL_HOST', 'smtp.gmail.com');
    define('PERCH_EMAIL_AUTH', true);
    define('PERCH_EMAIL_SECURE', 'ssl');
    define('PERCH_EMAIL_PORT', 465);
    define('PERCH_EMAIL_USERNAME', 'your.name@gmail.com');
    define('PERCH_EMAIL_PASSWORD', 'your gmail password');

    define('PERCH_PARANOID', true);
    define('PERCH_VERIFY_UPLOADS', false);

    //define('PERCH_TEMPLATE_FILTERS', true);
    //define('PIPIT_PHONE_COUNTRY', 'GB');

  // Environments
    // define('PERCH_PRODUCTION_MODE', 'PERCH_DEVELOPMENT');
    // define('PERCH_PRODUCTION_MODE', 'PERCH_STAGING');
    define('PERCH_PRODUCTION_MODE', 'PERCH_PRODUCTION');
    // define('PERCH_DEBUG', true );
