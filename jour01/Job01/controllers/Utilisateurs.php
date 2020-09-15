<?php

// PARTIE UTILISATEURS
include("../config/db.php");
class Utilisateurs_model
{

    private $id     = '';
    public  $firstname    = '';
    public  $lastname = '';
    public  $email  = '';

    
     function getUsers($firstname){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM utilisateurs WHERE firstname = ".$firstname." ");
    $query->execute(array($username, $password));
    return $query->fetchColumn();
}


   


}