<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
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
    <?php

    include './fonctionsSQL.php';
    include './fonctionsTable.php';

    $headers = getHeaderTable();
    $users = getAllUsers();
    afficherTableau($users, $headers);

    ?>

    <a href="formulaireUtilisateur.php?id=0">Crée un utilisateur</a>
</body>

</html>