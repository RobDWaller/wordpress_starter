<?php

$config = new Config\Config(new Illuminate\Filesystem\Filesystem);

$data = $config->make();

foreach ($data->get('mu-plugins') as $plugin){
    require_once __DIR__ . '/' . $plugin;
}
