<?php
/** Start session if not already started */
if (!isset($_SESSION)) session_start();

/** Load environment variables */
require_once __DIR__ . '/../app/config/_env.php';

require_once __DIR__ . '/../app/routing/routes.php';

/** Init Illuminate Database */
new \App\Classes\Database();

/** Set custom error handler */
set_error_handler([new \App\Classes\ErrorHandler(), 'handleErrors']);

/** Call the route dispatcher */
new \App\RouteDispatcher($router);
