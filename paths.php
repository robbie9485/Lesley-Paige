<?php

// Set global variables for common paths and files, set error reporting

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function definepaths() {
	
	// Determine root path and root HTML path (gets complicated when server root or root is system root)
	if (substr(__DIR__, -1) == DIRECTORY_SEPARATOR) {
		$root = __DIR__;
		$rootHTML = '/';
	}
	else {
		$root = __DIR__ . DIRECTORY_SEPARATOR;
		if (substr($_SERVER['DOCUMENT_ROOT'], -1) == DIRECTORY_SEPARATOR) {
			$dirstart = strlen($_SERVER['DOCUMENT_ROOT']) - 1;
		}
		else {
			$dirstart = strlen($_SERVER['DOCUMENT_ROOT']);
		}
		$rootHTML = str_replace(DIRECTORY_SEPARATOR, '/', substr($root, $dirstart));
	}

	// Default extension for image files
	define('EXT', 'jpg');
	define('FORMATTED_DIMENSION', 600);
	define('THUMBNAIL_DIMENSION', 250);
	define('WATERMARK_TRANSPARENCY', 0.2);
	define('WATERMARK_FILL', 0.9);
	define('MAX_PIXELS', 800*800);
	
	// Main paths;
	define('ROOT', [
		'sys' => $root,
		'html' => $rootHTML
		]);
	define('IMG', [
		'sys' => ROOT['sys'] . 'img' . DIRECTORY_SEPARATOR,
		'html' => ROOT['html'] . 'img' . '/'
		]);
	define('HEADER', [
		'sys' => IMG['sys'] . 'header' . DIRECTORY_SEPARATOR,
		'html' => IMG['html'] . 'header' . '/'
		]);
	define('CSS', [
		'sys' => ROOT['sys'] . 'css' . DIRECTORY_SEPARATOR,
		'html' => ROOT['html'] . 'css' . '/'
		]);
	define('JS', [
		'sys' => ROOT['sys'] . 'js' . DIRECTORY_SEPARATOR,
		'html' => ROOT['html'] . 'js' . '/'
		]);
	define('ADMIN', [
		'sys' => ROOT['sys'] . 'admin' . DIRECTORY_SEPARATOR,
		'html' => ROOT['html'] . 'admin' . '/'
		]);
	define('UPLOAD', [
		'sys' => ADMIN['sys'] . 'upload' . DIRECTORY_SEPARATOR,
		'html' => ADMIN['html'] . 'upload' . '/'
		]);
	define('TMP', [
		'sys' => IMG['sys'] . 'tmp' . DIRECTORY_SEPARATOR,
		'html' => IMG['html'] . 'tmp' . '/'
		]);

	// CSS files
	define('CSS_MAIN', [
		'sys' => CSS['sys'] . 'main.css',
		'html' => CSS['html'] . 'main.css'
		]);
	define('CSS_TEXT', [
		'sys' => CSS['sys'] . 'text.css',
		'html' => CSS['html'] . 'text.css'
		]);
	define('CSS_ADMIN', [
		'sys' => ADMIN['sys'] . 'admin.css',
		'html' => ADMIN['html'] . 'admin.css'
		]);
	
	//Bootstrap files:
	define('BOOTSTRAP_CSS', [
		'sys' => CSS['sys'] . 'bootstrap.min.css',
		'html' => CSS['html'] . 'bootstrap.min.css'
		]);
	define('BOOTSTRAP_JS', [
		'sys' => JS['sys'] . 'bootstrap.min.js',
		'html' => JS['html'] . 'bootstrap.min.js'
		]);

	//Header files
	define('PHOTO', [
		'sys' => HEADER['sys'] . 'photo.png',
		'html' => HEADER['html'] . 'photo.png'
		]);
	define('STAMP', [
		'sys' => HEADER['sys'] . 'stamp.png',
		'html' => HEADER['html'] . 'stamp.png'
		]);
	define('TITLE', [
		'sys' => HEADER['sys'] . 'title.png',
		'html' => HEADER['html'] . 'title.png'
		]);
	define('TITLE_SMALL', [
		'sys' => HEADER['sys'] . 'titlesmall.png',
		'html' => HEADER['html'] . 'titlesmall.png'
		]);
		
	// Art image paths:
	define('ORIGINALS', [
		'sys' => IMG['sys'] . 'originals' . DIRECTORY_SEPARATOR,
		'html' => IMG['html'] . 'originals' . '/'
		]);
	
	define('WATERMARKED', [
		'sys' => IMG['sys'] . 'watermarked' . DIRECTORY_SEPARATOR,
		'html' => IMG['html'] . 'watermarked' . '/'
		]);
	define('THUMBNAILS', [
		'sys' => IMG['sys'] . 'thumbnails' . DIRECTORY_SEPARATOR,
		'html' => IMG['html'] . 'thumbnails' . '/'
		]);

	// Upload image paths:
	define('UPLOAD_ORIGINALS', [
		'sys' => UPLOAD['sys'] . 'originals' . DIRECTORY_SEPARATOR,
		'html' => UPLOAD['html'] . 'originals' . '/'
		]);
	
	define('UPLOAD_WATERMARKED', [
		'sys' => UPLOAD['sys'] . 'watermarked' . DIRECTORY_SEPARATOR,
		'html' => UPLOAD['html'] . 'watermarked' . '/'
		]);
	define('UPLOAD_THUMBNAILS', [
		'sys' => UPLOAD['sys'] . 'thumbnails' . DIRECTORY_SEPARATOR,
		'html' => UPLOAD['html'] . 'thumbnails' . '/'
		]);

	//Miscellaeous:
	define('STAMP_FULL', [
		'sys' => ADMIN['sys'] . 'stamp.png',
		'html' => ADMIN['html'] . 'stamp.png'
		]);
	define('STAMP_SVG', [
		'sys' => ADMIN['sys'] . 'stamp.svg',
		'html' => ADMIN['html'] . 'stamp.svg'
		]);
	define('FAVICON', [
		'sys' => IMG['sys'] . 'favicon.ico',
		'html' => IMG['html'] . 'favicon.ico'
		]);
	define('PHOTO_FULL', [
		'sys' => IMG['sys'] . 'photo.jpg',
		'html' => IMG['html'] . 'photo.jpg'
		]);	
	define('NOT_FOUND', [
		'sys' => ADMIN['sys'] . 'notfound.jpg',
		'html' => ADMIN['html'] . 'notfound.jpg'
		]);
	define('NOT_FOUND_LARGE', [
		'sys' => ADMIN['sys'] . 'notfoundlarge.jpg',
		'html' => ADMIN['html'] . 'notfoundlarge.jpg'
		]);				
}

definepaths();

?>
