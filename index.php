<?php
$born = strtotime('1986-11-07T20:06:05');
$alive = time() - $born;
$tilts = array_map(function($path) { return str_replace(__DIR__, '', $path); }, glob(__DIR__.'/img/head-tilt/*.jpg'));
shuffle($tilts);
usort($tilts, function($a, $b) { return strpos($a, 'human') ? -1 : (strpos($b, 'human') ? 1 : 0); });
include(__DIR__.'/sites.php');
include(__DIR__.'/template.php');
