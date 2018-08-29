<?php 

include_once "classes/Player.php";

class Users 
{
    /**
     * Get the list of users
     */
    public function getUsers() {
        return ['salvi', 'paul', 'mariana', 'ines', 'juancito'];
    }

    /**
     * Get the list of Heat players
     */
    public function getHeatPlayers() {
        global $db;
        $res = $db->query("SELECT name, age, speed, accuracy FROM players");

        // translating from generic object to a Player object
        $players = [];
        foreach($res as $r) {
            $players[] = new Player($r->name, $r->age, $r->speed, $r->accuracy);
        }

        return $players;
    }

    /**
     * Save a new Heat player
     */
    public function addHeatPlayer($player) {
        global $db;
        $db->query("
            INSERT INTO players (`name`, `age`, `speed`, `accuracy`) 
            VALUES ('{$player->name}', {$player->age}, {$player->speed}, {$player->accuracy})");
    }
}
