<?php

namespace AutoBanHacker;

use pocketmine\Server;

use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase {

       public function onEnable(){

       }

      

       public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool {

      

             switch($cmd->getName()}{

             case "abh help":

              if($player instanceof Player){

                    $player->sendMessage("§eAutoBanHelp: /abh enable");

                   

             switch($cmd->getName()}{

             case "abh on":

              if($player instanceof Player){

                    $player->sendMessage("§aAutoBanHacker ON");

            } 

            break;

            } 

            return true;

           

      }
