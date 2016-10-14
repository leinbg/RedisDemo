<?php

require __DIR__ . '/bootstrap.php';

$page = new \RedisDemo\Controllers\Page;

echo $page->getAllProducts() ;
