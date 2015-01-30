<?php 

include(__DIR__.'/config.php'); 


// Add style for csource
$anba['stylesheets'][] = 'css/style.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the anba container.
$anba['title'] = "Show Source Code";

$anba['main'] = "<h1>Show Source Code</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of anba.
include(ANBA_THEME_PATH);