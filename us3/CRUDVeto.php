
<?php

//Informations de connexion à la base de données
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'zoo'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur MySQL
$pass = ''; // Mot de passe MySQL

// Connexion à la base de données

$connexion = $pdo = new PDO('mysql:dbname=zoo;host=localhost;charset=utf8mb4', 'root', '');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Requête d'insertion
$sql = "INSERT INTO image (nom) VALUES (:nom)";

// Préparation de la requête
$stmt = $connexion->prepare($sql);


// Liaison des valeurs
$stmt->bindParam(':nom', $nom);

// Exécution de la requête
$stmt->execute();

if (isset($_POST['nom']));
$nom = $_POST['nom'];
//validation
 if (empty($nom)){
    echo "veuillez entrer un nom";
}else{
    echo "Bienvenue,$nom!";

}?>

