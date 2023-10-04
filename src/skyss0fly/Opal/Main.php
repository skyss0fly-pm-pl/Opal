<?php
namespace skyss0fly\Opal;
use pocketmine\player\Player;
use pocketmine\event\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;


class Main extends PluginBase{
  public function onLoad(): void {
    $this->saveDefaultConfig();
  }
  public function onEnable():void {
    $this->getLogger()->info(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . "[" .TEXTFORMAT::RED . "OPAL" . TEXTFORMAT::YELLOW . "]" . TEXTFORMAT:GREEN . " Opal is ready to go!");
  }

public function onChat(PlayerChatEvent $event) {
 $rand = rand(1,5);
  $randmsg
  if ($rand === 4) {
    $this->getServer()->broadcastMessage(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . "[" .TEXTFORMAT::RED . "OPAL" . TEXTFORMAT::YELLOW . "]" . TEXTFORMAT:GREEN . $randtext);
  }
  else {
    /*nothing
      lol
      */
  }
  
