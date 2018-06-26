<?php

use \Hcode\Page;
use \Hcode\Model\Category;
use \Hcode\Model\Product;

$app->config('debug', true);

$app->get('/', function() {
  	
  	$products = Product::listAll();

  	$page = new Page();

  	$page->setTpl("index", array(
  		"products"=>Product::checkList($products)
  	));

});








?>