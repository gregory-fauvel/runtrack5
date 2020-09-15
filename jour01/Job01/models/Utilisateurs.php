<?php


class Utilisateurs_model
{

    private $id = '';
    public  $firstname  = '';
    public  $lastname = '';
    public  $email  = '';

    function connectdb()
    {
        include("../config/db.php");
        $base = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
        return $base;
    }


    function adduser ($firstname, $lastname, $email)
    {
        
            $requser = $this->connectdb()->query("INSERT INTO utilisateurs VALUES('$firstname','$lastname','$email')");
            $query->execute();
        
            
                 
    }
}

