<?php
return CMap::mergeArray(array(
        'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
        'name'       => 'Nix Track Demo',

        // preloading 'log' component
        'preload'    => array('log'),

        // autoloading model and component classes
        'import'     => array(
            'application.models.*',
            'application.components.*',
        ),

        // application components
        'components' => array(
            'urlManager'   => array(
                'urlFormat'      => 'path',
                'showScriptName' => false,
                'rules'          => array(
                    '\d+'                               => 'site/index',
                    '<controller>/partials/<view>.html' => '<controller>/partial',

                    array('<model>/query', 'pattern' => 'api/<model:\w+>', 'verb' => 'GET'),
                ),
            ),

            'db'           => array(
                'connectionString' => getenv('DB_DSN'),
                'username'         => getenv('DB_USER'),
                'password'         => getenv('DB_PASSWORD'),
                'charset'          => 'utf8',
            ),

            'errorHandler' => array(
                // use 'site/error' action to display errors
                'errorAction' => 'site/error',
            ),
            'log'          => array(
                'class'  => 'CLogRouter',
                'routes' => array(
                    array(
                        'class'  => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                ),
            ),
        ),
    ),
    file_exists($localConfig = __DIR__ . '/main.local.php') ? require $localConfig : []
);