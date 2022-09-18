<?php

namespace auto;

use auto\Main;

use pocketmine\scheduler\Task;
use pocketmine\Player;

class ResetTask extends Task{
  
  public function __construct(Main $main){
    $this->main = $main;
  }
  
  public function onRun(): void{
    $this->main->resetmine();
  }
}
