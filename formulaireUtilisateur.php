<?php

include './fonctionsSQL.php';
include './fonctionsTable.php';

$id = $_GET["id"];
if ($id == 0) {
    $user = getNewUser();
    $action = "CREATE";
    $libelle = "Creer";
} else {
    $user = readUser($id);
    $action = "UPDATE";
    $libelle = "Mettre a jour";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Formulaire</title>
    <!-- LINK JS -->
    <script defer src="./dist/js/main.js"></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <!-- LINK GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- LINK FONTAWESOME -->
    <script src="https://kit.fontawesome.com/fa162a40c4.js" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="icon" href="./assets/favIcon.png" />
    <!-- SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <form action="createUpdate.php" method="GET">
        <p>
            <a href="index.php">Retour a la page d'accueil</a>

            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <input type="hidden" name="action" value="<?php echo $action; ?>">

        <div>
            <label for="name">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Nom">
        </div>
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prenom">
        </div>
        <div>
            <label for="age">Age :</label>
            <input type="text" id="age" name="age" placeholder="Age">
        </div>
        <div>
            <label for="mail">Mail :</label>
            <input type="text" name="mail" id="mail" placeholder="Mail">
        </div>
        <div class="button">
            <button type="submit"><?php echo $libelle; ?></button>
        </div>
        </p>
    </form>

    <br>

    <?php if ($action != "CREATE") { ?>
        <form action="createUpdate.php" method="GET">
            <input type="hidden" name="action" value="DELETE">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <p>
            <div class="button">
                <button type="submit">Supprimer</button>
            </div>
            </p>
        </form>
    <?php } ?>
</body>

</html>