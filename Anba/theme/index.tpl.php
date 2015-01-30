<!doctype html>
<html class='no-js' lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<?php foreach($stylesheets as $val): ?>
<?php if(isset($inlinestyle)): ?><style><?=$inlinestyle?></style><?php endif; ?>
<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
<?php endforeach; ?>
</head>
<body>
	<div id='wrapper'>
    	<div id='header'><?=$header?></div>
    	<?php if(isset($navbar)): ?><div id='navbar'><?=get_navbar($navbar)?></div><?php endif; ?>
    	<div id='main'><?=$main?></div>
    	<div id='footer'><?=$footer?></div>
    	<?php if(isset($debug)): ?><div id='debug'><?=$debug?></div><?php endif; ?>
  	</div>


<?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>

</body>
</html>