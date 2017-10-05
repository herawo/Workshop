<?php
if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);

$id=$_GET['id'];

$stmt = $dbh->prepare("DELETE FROM projet WHERE idProjet=:id");

$stmt->bindParam(":id", $id);

$stmt->execute();


header('Location: Page_d\'accueil.php');
?>