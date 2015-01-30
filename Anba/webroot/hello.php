<?php
include(__DIR__.'/config.php');

$anba['title'] = "Hello World";

$anba['header'] = <<<EOD
<img class='sitelogo' src='img/anba.png' alt='Anba Logo'/>
<span class='sitetitle'>Anba template</span>
<span class='siteslogan'>Återanvändbara moduler</span>
EOD;

$anba['main'] = <<<EOD
<h1>Hello World</h1>
<p>Detta är en exempelsida.</p>
EOD;

$anba['footer'] = <<<EOD
<footer><span class='sitefooter'></span</footer>
EOD;

include(ANBA_THEME_PATH);