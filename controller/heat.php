<?php

// include classes
include_once "classes/Game.php";
include_once "classes/Player.php";
include_once "model/users.php";

class Heat 
{
    public function index() {
        // include the model
        $userModel = new Users();

        // create the game
        Game::$team = $userModel->getHeatPlayers();
        Game::$season = "2018";
        Game::$match = 12;

        // start game
        Game::run();

        // sort Players by points scored
        usort(Game::$team, function($a, $b) {
            return $a->score < $b->score;
        });

        // include the view
        $title = "Contest";
        include "view/heat.php";
    }

    public function add() {
        // include the view
        $title = "Add player";
        include "view/heat-add.php";
    }

    public function submit() {
        // get params from the view
        $name = $_POST['name'];
        $age = $_POST['age'];
        $accuracy = $_POST['accuracy'];

        // create new Player
        $player = new Player($name, $age, 0, $accuracy);

        // save the player
        $userModel = new Users();
        $userModel->addHeatPlayer($player);

        // redirect to the list of players
        header('Location: index.php?page=heat');
    }
}
