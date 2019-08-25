<?php 

error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page = new Page();

    $page->setTpl("index");
    

});

$app->get('/admin', function() {
    
    $page = new PageAdmin();

    $page->setTpl("index");
    

});

$app->run();

 ?>