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
        <p><?= $value["type"] ?></p>
    <?php
    }
    ?>

    <p></br>Ci-dessous, le nom et prénom des 20 premiers clients de la Base De Données "Colyseum" :</p>

        <?php
        foreach ($resultFirstClients as $key => $value) {
        ?>
    <p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
<?php
        }
?>

<p></br>Ci-dessous, le nom et prénom des clients possédant une carte de fidélité :</p>

    <?php
    foreach ($resultClientsFidelity as $key => $value) {
    ?>
<p><?= $value["lastName"] . " " . $value["firstName"] ?></p>
<?php
    }
?>

<p></br>Ci-dessous, les clients donc le nom commence par "M" (classés par ordre alphabétique) :</p>

    <?php
    foreach ($resultClientsM as $key => $value) {
    ?>
<p>Nom : <?= $value["lastName"] ?>, Prénom : <?= $value["firstName"] ?></p>
<?php
    }
?>

<p></br>Ci-dessous, titres, artistes, dates et heures des spectacles (titres classés par ordre alphabétique) :</p>

    <?php
    foreach ($resultshowsInfos as $key => $value) {
    ?>
<p>Titre : <?= $value["title"] ?>, Artiste : <?= $value["performer"] ?></p>
<p>Date : <?= $value["date"] ?>, Heure : <?= $value["startTime"] ?></p>
<?php
    }
?>

<p></br>Ci-dessous, fiche d'identité de chaque client :</p>

    <?php
    foreach ($resultidentityClients as $key => $value) {
    ?>
<p></br>Nom : <?= $value["lastName"] ?></p>
<p>Prénom : <?= $value["firstName"] ?></p>
<p>Date de naissance : <?= $value["birthDate"] ?></p>
<p>Carte de fidélité :
    <?php
        if ($value["card"] == 0) {
            echo "Non";
        } else {
            echo "Oui";
        }
    ?>
</p>
<p>
    <?php
        if ($value["card"] == 0) {
            echo "";
        } else {
            echo "Numéro de carte : " . $value["cardNumber"];
        }
    ?>
</p>

<?php
    }
?>
</body>

</html>