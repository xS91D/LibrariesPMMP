<?php

namespace libs\translation;

use pocketmine\utils\Config;

class Translation
{
  
  private Config $language;
  
  public function __construct(string $src, string $extension)
  {
    switch($extension){
    case ".yml":
    $extension = Config::YAML;
    break;
    case ".json":
    $extension = Config::JSON;
    break;
    }
    if ($extension === ".ini") {
      $this->language = parse_ini_file($src);
    } else {
      $this->language = new Config($src, $extension);
    }
  }
  
  //TODO: add the function to translate the message
  
}