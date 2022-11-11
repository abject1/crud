<?php 

include './fonctionsSQL.php';
include './fonctionsTable.php';
$action = $_GET["action"];

if ($action == "DELETE") {
    $id = $_GET["id"];
} else {
    $id = $_GET["id"];
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $age = $_GET["age"];
    $mail = $_GET["mail"];
}

if ($action == "CREATE") {
    createUser($nom, $prenom, $age, $mail);

    echo "user cree <br>";
    echo "<a href='index.php'>Liste des utilisateurs</a>";
}

if ($action == "UPDATE") {
    updateUser($id, $nom, $prenom, $age, $mail);

    echo "user modifier <br>";
    echo "<a href='index.php'>Liste des utilisateurs</a>";
}

if ($action == "DELETE") {
    deleteUser($id);

    echo "user delete <br>";
    echo "<a href='index.php'>Liste des utilisateurs</a>";
}
