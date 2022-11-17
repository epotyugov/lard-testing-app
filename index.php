<?php
require_once(__DIR__ . '\vendor\autoload.php');

/** 
 * Эрзац-роутер
 */
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
	case '/' :
		require __DIR__ . '/views/404.php';
		break;
	default:
		http_response_code(404);
		require __DIR__ . '/Views/DogsView.php';
		break;
	}