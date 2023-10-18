<?php

    try{
        $user ="root";
        $pass =" ";
        $dbh = new PDO('mysql:host=localhost;dbname=tuto_php' , $user, $pass);

        $requete = 'SELECT * from FOO';
        $result = $dbh->query($requete);
        //var_dump($result);

        foreach($dbh->query('SELECT * from FOO') as $row) {
            print_r($row);
        }
        $dbh = null;

    } catch (PDOException $e) {
        print "Erreur !:" . $e->getMessage() . "<br/>";
        die();
    }
function afficherLigne($row) {
    echo 'nom :' . $row['nom'];
    echo 'prenom: ' . $row['prenom '];
}

?>