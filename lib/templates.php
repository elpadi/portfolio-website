<?php
namespace Portfolio\Templates;

function _include(string $path, array $data) {
	extract($data);
	include(APP_ROOT_DIR."/lib/templates/$path.php");
}

function _global(array $data) {
	_include('global', $data);
}

function partial(string $name, array $data=[]) {
	_include("partials/$name", $data);
}

function url(string $path) {
	return APP_URL."/$path";
}

function img(string $filename, string $alt='', string $ext='jpg') {
	$url = url("assets/img/$filename.$ext");
	printf('<img src="%s" alt="%s">', $url, $alt);
}

function js(array $filenames) {
	foreach ($filenames as $filename) {
		$url = url("assets/js/$filename.js?v=$_ENV[JS_VERSION]");
		printf('<script src="%s"></script>', $url);
	}
}

function css(array $filenames) {
	foreach ($filenames as $filename) {
		$url = url("assets/css/$filename.css?v=$_ENV[CSS_VERSION]");
		printf('<link rel="stylesheet" href="%s">', $url);
	}
}

function site_screenshot(string $slug) {
	$url = url("assets/sites/$slug/screenshot.jpg");
	printf('<img src="%s" alt="">', $url);
}

function birth() {
	return strtotime('1986-11-07T20:06:05');
}

function alive() {
	return time() - birth();
}

function tilts() {
	$files = glob(APP_ROOT_DIR.'/assets/img/head-tilt/*');
	shuffle($files);
	usort($files, function($a, $b) { return strpos($a, 'human') ? -1 : (strpos($b, 'human') ? 1 : 0); });
	foreach ($files as $f) {
		$name = basename($f);
		$url = url("assets/img/head-tilt/$name");
		printf('<img src="%s" alt="%s">', $url, basename($f, '.jpg'));
	}
}

