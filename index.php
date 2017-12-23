<?php
global $sites;

require(__DIR__.'/vendor/autoload.php');

if (!$sites->count()) header("HTTP/1.0 500 Internal Server Error");
Portfolio\Templates\_global(compact('sites'));
