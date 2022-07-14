<?php

try

{
    $bdd = new PDO('mysql:host=localhost;dbname=Biblio_SQLite;charset=utf8','root','root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch(Exception $e)

{
    die('Erreur:'.$e->getMessage());
}


// initialisation des tokens de sessions

if (isset($_SESSION['token'])) { $_SESSION['token'] = sha1(time()*rand(175,658));
    # code...
}


?>