<?php

    require "AccessBdd.php";

    function insertArticle($article){
        $connexion = openDb();
        $sqlRequest = 'INSERT INTO article(`ID`, `Titre`, `Date`, `Provenance`, `idee_generale`, `date_dajout`) VALUES (NULL,"'.$article['Titre'].'","'.$article['Date'].'","'.$article['Provenance'].'","'.$article['Idee_generale'].'","'.$article['date_dajout'].'");';
        $stmt = mysqli_prepare($connexion,$sqlRequest);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        closeDb($connexion);
    }

    function selectArticle(){
        $connexion = openDb();
        $sqlRequest = "SELECT `Titre`, `Date`, `Provenance`, `idee_generale`, `date_dajout` FROM article ";"";
        $result = mysqli_query($connexion, $sqlRequest);
        $res = array();
        $i = 0;
        while ($data = mysqli_fetch_row($result)) {
            $res[$i]['Titre'] = $data[0];
            $res[$i]['Date'] = $data[1];
            $res[$i]['Provenance'] = $data[2];
            $res[$i]['idee_generale'] = $data[3];
            $res[$i]['date_dajout'] = $data[4];
            $i++;
        }
        mysqli_free_result($result);
        closeDb($connexion);
        return $res;
    }

?>