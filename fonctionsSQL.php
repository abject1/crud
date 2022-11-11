<?php

function connexion()
{
    try {
        $user = "root";
        $psw = "";
        $pdo = new PDO('mysql:host=localhost;dbname=crud', $user, $psw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br>";
        die();
    }
}

function getAllUsers()
{
    $con = connexion();
    $requete = 'SELECT * FROM utilisateurs';
    $rows = $con->query($requete);
    return $rows;
}

function createUser($nom, $prenom, $age, $mail)
{
    try {
        $con = connexion();
        $sql = "INSERT INTO utilisateurs (nom, prenom, age, mail) VALUES ('$nom', '$prenom', '$age', '$mail')";
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function readUser($id)
{
    $con = connexion();
    $requete = "SELECT * from utilisateurs WHERE id = '$id'";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

function updateUser($id, $nom, $prenom, $age, $mail)
{
    try {
        $con = connexion();
        $requete = "UPDATE utilisateurs SET nom = '$nom', prenom = '$prenom', age = '$age', mail = '$mail' WHERE id = '$id'";
        $stmt = $con->query($requete);
    } catch (PDOException $e) {
        echo $requete . "<br>" . $e->getMessage();
    }
}

function deleteUser($id)
{
    try {
        $con = connexion();
        $requete = "DELETE FROM utilisateurs WHERE id = '$id";
        $stmt = $con->query($requete);
    } catch (PDOException $e) {
        echo $requete . "<br>" . $e->getMessage();
    }
}

function getNewUser()
{
    $user['id'] = "";
    $user['nom'] = "";
    $user['prenom'] = "";
    $user['mail'] = "";
}
