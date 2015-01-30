<?php
/**
 * Set error reporting
 *
 */
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

/*
 * Define Anba paths
 *
 */ 
define('ANBA_INSTALL_PATH', __DIR__ . '/..');
define('ANBA_THEME_PATH', ANBA_INSTALL_PATH . '/theme/render.php');

/*
 * Include bootstrapping functions
 *
 */
include(ANBA_INSTALL_PATH . '/src/bootstrap.php');

/*
 * Start the session
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/*
 * Create the Anba variable
 *
 */
$anba = array();

/*
 * Site settings
 *
 */
$anba['lang']			= 'sv';
$anba['title_append']	= ' | Anba';

$anba['header'] = <<<EOD
<img class='sitelogo' src='img/anba.png' alt='Anba Logo'/>
<span class='sitetitle'>Min 'ME' sida</span>
<span class='siteslogan'>I ♥ PHP</span>
EOD;

$anba['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Anba | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
 * The navbar menu
 *
 */
$anba['navbar'] = array (
	'class' => 'nb-plain',
	'items' => array(
		'home'		=> array('text'=>'Home', 'url'=>'me.php', 'title'=>'Presentation'),
		'exam'		=> array('text'=>'Examination', 'url'=>'examination.php', 'title'=>'Examination of assignments'),
		'source'	=> array('text'=>'Source Code', 'url'=>'source.php', 'title'=>'See source code'),
	),
	'callback_selected' => function($url) {
		if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
			return true;
		}
	}
);

/**
 * Theme settings
 *
 */
$anba['stylesheet'] 	= array('css/style.css');
$anba['favicon']		= 'favicon_om.ico';

/**
 * Javascript settings
 *
 */
$anba['jquery']			= null;
$anba['jquery']			= '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';