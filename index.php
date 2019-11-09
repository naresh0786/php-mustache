<!DOCTYPE html>
<html>
<head>
	<title>Mustache PHP Example</title>
</head>
<body>
<?php

	/* 
	require_once('Mustache/Autoloader.php');
	Mustache_Autoloader::register();
	$mustache = new Mustache_Engine;
	echo $mustache->render('Hello, {{firstname}}!', array('firstname' => 'John'));*/

	require_once('Mustache/Autoloader.php');
	Mustache_Autoloader::register();
	$mustache = new Mustache_Engine(array(
   'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates') 
));
	$template = $mustache->loadTemplate('welcomepage');
	echo $template->render(array('firstname' => 'John', 'lastname' => 'Doe', 'email' => 'johndoe@gmail.com'));
?>
</body>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>-->
</html>