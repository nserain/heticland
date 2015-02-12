<?php 

require('connexion.php');

session_destroy();

header('Location: ../index.php');

 ?>