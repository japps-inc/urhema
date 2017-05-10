<?php

/**
 * JAPPS-MVC - an extremely advanced naked PHP application
 *
 * @package japps-mvc
 * @author Francisco
 */

// TODO get rid of this and work with namespaces + composer's autoloader

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// This is the (totally optional) auto-loader for Composer-dependencies (to load tools into your project).
// If you have no idea what this means: Don't worry, you don't need it, simply leave it like it is.
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// load application config (error reporting etc.)


// FOR DEVELOPMENT: this loads PDO-debug, a simple function that shows the SQL query (when using PDO).
// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug
require APP . 'libs/helper.php';

// load application class
require APP . 'core/Application.php';
require APP . 'core/Controller.php';
require APP . 'core/Session.php';
require APP . 'core/Auth.php';
require APP . 'core/Request.php';
require APP . 'core/View.php';
require APP . 'core/Config.php';
require APP . 'core/Environment.php';
require APP . 'core/DatabaseFactory.php';
require APP . 'core/Filter.php';
require APP . 'core/Csrf.php';
require APP . 'core/Encryption.php';
require APP . 'core/Mail.php';
require APP . 'core/Redirect.php';
require APP . 'core/Text.php';

// start the application
$app = new Application();
