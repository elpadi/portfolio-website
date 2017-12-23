<?php
global $sites;

define('APP_ROOT_DIR', dirname(__DIR__));
if (!defined('APP_URL')) {
	define('APP_URL', '');
}
if (!isset($_ENV['CSS_VERSION'])) $_ENV['CSS_VERSION'] = '1';
if (!isset($_ENV['JS_VERSION'])) $_ENV['JS_VERSION'] = '1';

$sites = new Portfolio\Sites();
$sites->fetch(APP_ROOT_DIR.'/assets/sites');

