<?php



namespace CC;



use pocketmine\{Server, Player};

use pocketmine\command\{Command, CommandSender};

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;



class Main extends PluginBase implements Listener{

    

    public function onEnable(): void{

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("\n§c§lChat Löschen V-0.1 ONENABLE\n§aAUTHOR: §lCrow Balde");

    }

    

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool{

		switch($cmd->getName()){

		    case "clearchat":

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

        if($sender->hasPermission("clearchat.command")){

            $name = $sender->getName();

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); 

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); 

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); 

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage(""); $this->getServer()->broadcastMessage("");

			$this->getServer()->broadcastMessage("§aChat wurde Gelöscht §a$name");

                        $this->getServer()->broadcastMessage("§4Programmiert Von §9Crow§c Balde");

                        $this->getServer()->broadcastMessage("§bDiscord : https://discord.gg/rrf3gqh");

        }

        

    }

}
