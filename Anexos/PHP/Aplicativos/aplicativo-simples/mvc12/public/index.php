<?php

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'App' . DIRECTORY_SEPARATOR);

define('CORE', ROOT . 'Core' . DIRECTORY_SEPARATOR);

define('VIEWS', APP . 'views' . DIRECTORY_SEPARATOR);

// This is the auto-loader for Composer-dependencies (to load tools into your project).
require ROOT . 'vendor/autoload.php';

// load application config (error reporting etc.)
require CORE . 'config.php';

// load application class
use Core\Application;

// start the application
$app = new Application();

