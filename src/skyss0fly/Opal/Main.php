<?php
namespace skyss0fly\Opal;
use pocketmine\player\Player;
use pocketmine\event\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;


class Main extends PluginBase{
  public function onEnable():void {
    $this->getLogger()->info(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . "[" .TEXTFORMAT::RED . "OPAL" . TEXTFORMAT::YELLOW . "]" . TEXTFORMAT:GREEN . " Opal is ready to go!");
  }
public function onChat(PlayerChatEvent $event) {
 $rand = rand(1,5); 
  if ($rand === 4) {
    $strings = array( 'What?', 'Yesterday was Cheese Day!', "A potato flew around my room", "hold on guys, gotta walk my fish rq", "ok 19 dollar fortnite card", "when?", "Crazy? i was crazy once", "Did somebody say Menulog?", "Hey baba grill", "ok who moved my secret stash?", "guys my fish just invented a time machine", "cap", "when the imposter is sus", "GOD JUST SHUT UP!", "UwU", "change your underwear bro, i can smell them thru the screen" ); 
    $key = array_rand($strings); 
    $this->getServer()->broadcastMessage(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . "[" .TEXTFORMAT::RED . "OPAL" . TEXTFORMAT::YELLOW . "] " . TEXTFORMAT:GREEN . $strings[$key]);
  }
  else {
    /*nothing
      lol
      */
  }
}
}
