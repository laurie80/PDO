<?php

require "Controllers/index_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PDO BDD "Colyseum" </title>
</head>
<body>

<p>Voici la liste de tout les clients de la Base De Données "Colyseum" :</p>

<?php
foreach ($resultCLients as $key => $value) {
    ?>
    <p><?= $value["lastName"] . " " . $value["firstName"] . " " . $value["birthDate"] ?></p>
    <?php
}
?>

<p></br>Voici les types de spectacles disponibles de la Base De Données "Colyseum" :</p>

<?php
foreach ($resultShowTypes as $key => $value) {
    ?>
    <p><?= $value["type"]?></p>
    <?php
}
?>

<p></br>Ci-dessous, le nom et prénom des 20 premiers clients de la Base De Données "Colyseum" :

<?php
foreach ($resultFirstClients as $key => $value) {
    ?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
    <?php
}
?>

<p></br>Ci-dessous, le nom et prénom des clients possédant une carte de fidélité :

<?php
foreach ($resultClientsFidelity as $key => $value) {
    ?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
    <?php
}
?>

<p></br>Ci-dessous, les clients donc le nom commence par "M" (classé par ordre alphabétique) :

<?php
foreach ($resultClientsM as $key => $value) {
    ?>
    <p>Nom : <?= $value["lastName"]?>, Prénom : <?= $value["firstName"]?></p>
    <?php
}
?>

</body>
</html>