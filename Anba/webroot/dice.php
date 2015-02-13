<?php 
/**
 * This is a anba pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anba variable with its defaults.
include(__DIR__.'/config.php'); 

// Define what to include to make the plugin to work
$anba['stylesheets'][]        = 'css/style.css';

// Do it and store it all in variables in the anba container.
$anba['title'] = "Dicegame 100";

$game = new _DiceLogic();

$anba['main'] = "<h1>The DiceGame 100!</h1>" . $game->ViewGame();

// Finally, leave it all to the rendering phase of anba.
include(ANBA_THEME_PATH);

 