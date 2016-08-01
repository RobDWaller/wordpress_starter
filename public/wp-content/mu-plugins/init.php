<?php

$respository = Config\Config::getInstance();

error_log( print_r($respository->get('base.basic.password'), 1));

foreach ($respository->get('mu-plugins') as $plugin){
    require_once __DIR__ . '/' . $plugin;
}
