<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title> Quiz</title>
    <?php include("php/connect.php");?>

</head>
<body>

<form method="php/verifyQuiz.php">
    <label> Question 1</label><br/>
    <label>
        <?php

            $salle=$_GET['salle']='salle1';


            $sql="SELECT question from rooms where nameRoom='$salle'";

            $resultats=$db->query($sql);
            $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC);
        echo $resultat[0]['question'];

        ?></label><br/>
    <input type="text" name="question1"><br/>

    <label> Question 2</label><br/>
    <label> <?php echo $resultat[1]['question']; ?></label><br/>
    <input type="text" name="question2"><br/>

    <label> Question 3</label><br/>
    <label> <?php echo $resultat[2]['question']; ?></label><br/>
    <input type="text" name="question3"><br/>
    <input type="hidden" value=<?php $salle ?>>
    <input type="submit" value="Valdier">

</form>

</body>
</html>