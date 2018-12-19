<?php

    function openDb(){
        $connexion = mysqli_connect("localhost", "root","root","veille_techno");
        if (mysqli_connect_errno()){
            echo "Connection failed : ".mysqli_connect_error();
            exit();
        }
        return $connexion;
    }

    function closeDb($connexion){
        mysqli_close($connexion);
    }

?>