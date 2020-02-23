<?php



namespace CC;



use pocketmine\{Server, Player};

use pocketmine\command\{Command, CommandSender};

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;



class Main extends PluginBase implements Listener{

    

    public function onEnable(): void{

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("\n§c§lChat Löschen V-0.1 ONENABLE\n§aAuthor: §lCrow Balde");

    }

    

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool{

		switch($cmd->getName()){

		    case "Werbung":

		    if(!($sender instanceof Player)){

		        $sender->sendMessage("Bitte benutze den Befehl im Spiel(YT : Crow Balde)");

		        return true;

		    }

		    $this->Cc($sender);

		    break;

		}

		return true;

    }

    

    public function Cc($sender){

        if($sender->hasPermission("Werbung.command")){

            $name = $sender->getName();

			$this->getServer()->broadcastMessage("Hey Abonniere Uns Doch Auf YT"); $this->getServer()->broadcastMessage("YT : Crow Baldd"); $this->getServer()->broadcastMessage("<--->");

			$this->getServer()->broadcastMessage("Discord : https://discord.gg/fV93frR");

        }

        

    }

}
