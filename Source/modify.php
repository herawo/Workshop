<?php

if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);

$id=$_GET['id'];
$contact_mail=$_POST['contact_mail'];
$full_description=$_POST['full_description'];
$contact_name=$_POST['contact_name'];
$title=$_POST['title'];
$duration_month=$_POST['duration_month'];
$duration_day=$_POST['duration_day'];
$start=$_POST['start'];
$location=$_POST['location'];
$rate=$_POST['rate'];
$file=$_POST['file'];
$creator=$_COOKIE['COMMID'];
$statut="Attente";

$stmt = $dbh->prepare("UPDATE projet
				SET 
				contact_mail = :contact_mail,
				full_description = :full_description,
				contact_name = :contact_name,
				title = :title,
				duration_month = :duration_month,
				duration_day = :duration_day,
				start = :start,
				location = :location,
				rate = :rate,
				file = :file,
				creator = :creator,
				statut = :statut
				WHERE idProjet = :id");

$stmt->bindParam(':contact_mail', $contact_mail);
$stmt->bindParam(':full_description', $full_description);
$stmt->bindParam(':contact_name', $contact_name);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':duration_month', $duration_month);
$stmt->bindParam(':duration_day', $duration_day);
$stmt->bindParam(':start', $start);
$stmt->bindParam(':location', $location);
$stmt->bindParam(':rate', $rate);
$stmt->bindParam(':file', $file);
$stmt->bindParam(':creator',$creator);
$stmt->bindParam(':statut',$statut);
$stmt->bindParam(':id',$id);

$stmt->execute();

header('Location: Page_d\'accueil.php');

?>