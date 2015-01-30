<?php
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
	echo "Anba: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
	varDumpPrint($exception);
}
set_exception_handler('myExceptionHandler');

/**
 * Var_Dump function
 *
 */
function varDumpPrint($var) {
	echo "<pre>";
	$out = var_export($var, true);
	$file = fopen('../src/output.txt', 'a+') or die("File creation error");
	fwrite($file, $out);
	fclose($file);
	echo "</pre>";
}


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
	$path = ANBA_INSTALL_PATH . "/src/{$class}.php";
	if(is_file($path)) {
		include($path);
	}
	else {
		throw new exception("Classfile '{$class}' does not exist.");
	}
}
spl_autoload_register('myAutoloader');
