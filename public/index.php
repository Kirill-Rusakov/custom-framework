<?php

$start_frame = microtime(true);

if(PHP_MAJOR_VERSION < 8) {
    die("Require PHP version >= 8");
}

require_once __DIR__ . "/../config/config.php";
require_once ROOT . "/vendor/autoload.php";

$app = new \PHPFramework\Application();

dump($app);

dump(microtime(true) - $start_frame);