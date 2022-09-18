<?php

namespace auto;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\console\ConsoleCommandSender;
use pocketmine\lang\Language;

use pocketmine\event\Listener;

use auto\ResetTask;

class Main extends PluginBase implements Listener {
  
  public function onEnable(): void{
    $this->getLogger()->info("Plugin Enable");
    $this->task1 = new ResetTask($this);
    $this->getScheduler()->scheduleRepeatingTask($this->task1, 18000);
  }
  
  public function onDisable(): void{
    $this->getLogger()->info("Plugin Disable");
  }
  
  public function resetmine() : void{
    $this->getServer()->broadcastMessage("§l§a»» Toutes les mines ont été reset !!!");
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), new Language("eng")), 'minereset reset mine');
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), new Language("eng")), 'minereset reset minevip');  
      
  }
}
