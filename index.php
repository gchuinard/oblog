<?php
//var_dump(error_reporting());
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

//error_reporting(E_ALL);
//var_dump(error_reporting());


require __DIR__.'/classes/Article.php';
require __DIR__.'/classes/Category.php';
require __DIR__.'/classes/Author.php';
require __DIR__.'/classes/Data.php';
require __DIR__.'/classes/App.php';

$app = new App();
$app->run();