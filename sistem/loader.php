<?php 

// Tüm Hataları Göster
error_reporting(0);

ini_set("display_errors",1);


spl_autoload_register(function ($className){
	
	
	$className=str_replace('\\',DIRECTORY_SEPARATOR,$className);
	$file=__DIR__.DIRECTORY_SEPARATOR."{$className}.php";
	if (is_readable($file)) require_once $file;
	
});


session_start();
ob_start();

$code = new Classes\code();
$code->connect2db();

$ayarlar=$code->getSettings();

define("PATH", realpath("."));
define("URL", $ayarlar->site_url);
define("TEMA_URL", $ayarlar->site_url."/tema/".$ayarlar->site_tema);
define("TEMA",PATH."/tema/".$ayarlar->site_tema);



?>