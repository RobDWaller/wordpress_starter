<?php namespace Config;

use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;

class Config
{
    protected $fileSystem;

    public function __construct(Filesystem $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function make()
    {
        $configFileArrays = $this->getConfigFileArrays();

        return new Repository($configFileArrays);
    }

    private function getConfigFileArrays()
    {
        $files = $this->fileSystem->files(__DIR__);

        return $this->getArraysFromFiles($files); 
    }

    private function getArraysFromFiles(array $files)
    {
        foreach ($files as $file){
            if (!strpos($file, 'Config.php')){
	        $result[$this->fileSystem->name($file)] = require_once $file;
            }
        }
        
        return $result;
    }
}
