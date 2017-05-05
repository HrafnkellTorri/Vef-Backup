<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class Song extends Model
{
    /**
     * Get all songs from database
     */
    public function getAllUsers()
    {
        $sql = "SELECT Users.username, Scores.score from Users join Scores on Users.ID = Scores.user_ID ORDER BY Score DESC";
	    $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getUsersAndScore()
    {
        $sql = "SELECT COUNT(ID) AS user_count from Users";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->user_count;
    }
}
