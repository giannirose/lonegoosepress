<?php
    define('PERCH_LICENSE_KEY', 'R31803-WXL069-YLR725-QJX127-KTH028');

    $http_host = getenv('HTTP_HOST');
    switch($http_host)
{
    case('staging.lonegoosepress.com') :
            define("PERCH_DB_USERNAME", 'lgperch');
            define("PERCH_DB_PASSWORD", 'V@nderc00k');
            define("PERCH_DB_SERVER", "localhost");
            define("PERCH_DB_DATABASE", "lgperch");
            define('PERCH_DB_PREFIX',   'perch3_');
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
    define('PERCH_FEATHERS', true);
    define('PERCH_YOUTUBE_API_KEY', 'AIzaSyDkq7KybqYH474MLZtmDZynUbiRAdQg_fA');

    # define('PERCH_DEBUG', true);
