<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 10/02/2015
 * Time: 13:48
 */
session_start();
require('connect.php');
if(isset($_POST["name"]) && isset($_POST['pass1'])){

    $sql="SELECT idUser FROM users WHERE nameUser='".$_POST["name"]."' and password='".$_POST["pass1"]."';";
    $resultats=$db->query($sql);
    $resultats->setFetchMode(PDO::FETCH_OBJ);
    $resultat = $resultats->fetch();
var_dump($resultat);


    if($resultat==false){
        echo "Ce compte n'existe pas encore";
        header('Location: ../index.html');
    }
    else
    {
        $id=$resultat->idUser;
        $sql="SELECT nameCharacter from characters where idUSer=$resultat->idUser;";
        $resultats=$db->query($sql);
        $resultats->setFetchMode(PDO::FETCH_OBJ);

        $resultat = $resultats->fetch();

        $_SESSION['nameCharacter']=$resultat->nameCharacter;
        header('Location: ../couloir.html');


    }

} else
{
    echo "Veuillez réessayer";
}