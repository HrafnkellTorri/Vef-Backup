<?php


namespace Mini\Controller;

use Mini\Model\Scores;

class SongsController
{

    public function index()
    {
        // Instance new Model (Song)
        $User = new Scores();
        $Users = $User->getAllUsersSpacebar();
        
        $Type = new Scores();
        $Types = $Type->getAllUsersTyping();
        
        $Village = new Scores();
        $Villagers = $Village->getAllUsersVillage();
        
        $amount_of_users = $User->getUsersAndScore();

       // load views. within the views we can echo out $songs and $amount_of_songs easily

        require APP . 'view/_templates/header.php';

        require APP . 'view/songs/index.php';

        require APP . 'view/_templates/footer.php';
    }



   
    public function ajaxGetStats()
    {
        // Instance new Model (Song)
        $Score = new Score();
        $amount_of_songs = $Score->getAmountOfSongs();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_songs;
    }

}
