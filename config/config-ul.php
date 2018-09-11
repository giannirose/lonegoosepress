<?php
    define('PERCH_LICENSE_KEY', 'XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX');

    $http_host = getenv('HTTP_HOST');
    switch($http_host)
{
    case('lgoose.loc') :

            define('PERCH_DB_USERNAME', 'XXXX');
            define('PERCH_DB_PASSWORD', 'XXXXXXXXX');
            define('PERCH_DB_SERVER',   "XXXXXXXXX");
            define('PERCH_DB_DATABASE', 'XXXXXX_');
            define('PERCH_DB_PREFIX',   'XXXXXX_');
            break;

    case('staging.lonegoosepress.com') :
            define("PERCH_DB_USERNAME", 'xxxxxxx');
            define("PERCH_DB_PASSWORD", 'XXXXXXXXXX');
            define("PERCH_DB_SERVER", "localhost");
            define("PERCH_DB_DATABASE", "xxxxxxx");
            break;
}

    define('PERCH_EMAIL_FROM', 'john.rose3@comcast.net');
    define('PERCH_EMAIL_FROM_NAME', 'John Rose');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');

    define('PERCH_DEBUG', true);
    define('PERCH_FEATHERS', true);
