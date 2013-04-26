<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/');
define('LIB_DIR', ROOT_DIR .'lib/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', LIB_DIR .'cache/');

require('config.php');
require(ROOT_DIR .'vendor/autoload.php');
require(LIB_DIR .'markdown.php');
require(LIB_DIR .'pico.php');
$pico = new Pico();

?>