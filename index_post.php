<?php


include ('connection.php');

$request = $bdd-> prepare('INSERT INTO records (first_name, last_name, gender, age, city, country) VALUES (?, ?, ?, ?, ?, ?)');
$request-> execute([
    strip_tags(trim($_POST['first_name'])),
    strip_tags(trim($_POST['last_name'])),
    strip_tags(trim($_POST['gender'])),
    strip_tags(trim($_POST['age'])),
    strip_tags(trim($_POST['city'])),
    strip_tags(trim($_POST['country'])),
]);
$request->closeCursor();

// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: index.php');

?>