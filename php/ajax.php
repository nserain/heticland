<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/02/2015
 * Time: 19:39
 */
session_start();


// On recupere les valeurs
    $name = $_SESSION['nameCharacter'];
    $hpUser = $_GET['hpUser'];
    $hpBoss = $_GET['hpBoss'];
    $AttakDmgBoss =  $_GET['AttakDmgBoss'];
    $AttakNameBoss = $_GET['AttakNameBoss'];
    $AttakNameUSer =  $_GET['AttakNameUSer'];
    $AttakDmgUser =  $_GET['AttakDmgUser'];


if ($hpBoss>0 && $hpUser>0)
{

            $hpBoss -=  $AttakDmgUser[1];
            echo "Vous attaquez ! <br>";
            echo $name." utilise ". $AttakNameUSer[1] ." !";
            echo 'Le prof à perdu '. $AttakDmgUser[1] .' points de vie</br>';
                if($hpBoss>0){
                    echo "Le prof vous attaque !<br>";
                    $hpUser -= $AttakDmgBoss[1];
                    echo "Le prof utilise ".$AttakNameBoss[1]." !";
                    echo $name." a perdu ".$AttakDmgBoss." points de vie</br>";
                }
                else{
                    echo "Victoire !";
                }

}
else{
    if(!$hpUser>0){
        echo $name."  a perdu le combat";
    }
    else{

    }
}


// SCRIPT D'ATTAQUE OFFENSIVE
// SCRIPT LANCER PAR L'AJAX GRACE AU BOUTON ATTAQUE OFFENSIVE
// RECUPERE LES VARIABLES DE COMBAT ( chance de touche, force, vita restante ...)
// DEFINI LES VARIABLES LIEE AU COUP (Est ce qu'on touche ?)
// ON EFFECTU L ACTION DE COUP OU NON

// INCLUDE DU SCRIPT DU BOT
?>
<script>
    var vita = <?php echo json_encode('='.$hpUser.'='.$hpBoss.'=') ?>;
</script>