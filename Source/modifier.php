<?php
//setcookie("connected",true);
if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}

$project=$_GET['id'];
$creator=$_COOKIE['COMMID'];
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);




$id=$_GET['id'];

$stmt = $dbh->prepare("SELECT * FROM projet WHERE creator=:creator");

$stmt->bindParam(":creator", $creator);

$stmt->execute();

while($donnees = $stmt->fetch()){
  $date=$donnees['date'];
  $contact_mail=$donnees['contact_mail'];
  $full_description=$donnees['full_description'];
  $contact_name=$donnees['contact_name'];
  $title=$donnees['title'];
  $duration_month=$donnees['duration_month'];
  $duration_day=$donnees['duration_day'];
  $start=$donnees['start'];
  $location=$donnees['location'];
  $rate=$donnees['rate'];
  $file=$donnees['file'];
  $statut=$donnees['statut'];
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Modification</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/fichebesoin.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
	<header class="masthead">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="Page_d'accueil.php">TABLEAU DE BORD</a>
			
			</div>
		</div>
		</nav>
    </header>
	<div class="container">
    	<div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" action=<?php echo 'modify.php?id='.$id ?> method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $contact_mail?> class="form-control" id="client" type="text" placeholder="Email client" required data-validation-required-message="Please enter your email address." name="contact_mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $contact_name?> class="form-control" id="Contactname" type="text" placeholder="Nom du client" required data-validation-required-message="Please enter your phone number." name="contact_name" pattern="[A-Za-z]{0,10}">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input value="<?php echo htmlentities($title, ENT_QUOTES, "UTF-8")?>" class="form-control" id="title" type="text" placeholder="Titre" required data-validation-required-message="Please enter a title." name="title" ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
			        <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <textarea class="form-control" id="fulldesc"  placeholder="Description" required data-validation-required-message="Please enter a description." name="full_description"><?php echo $full_description?></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
			        <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <textarea value=<?php echo $contact_mail?> class="form-control" id="3mainkey" rows="3" placeholder="3 mots clé" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				        <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $duration_month?> class="form-control" id="duration" type="text" placeholder="Durée(mois)" required data-validation-required-message="Please enter a message." name="duration_month" pattern="[0-9]">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $duration_day?> class="form-control" id="duration" type="text" placeholder="Durée(jour)" required data-validation-required-message="Please enter a day." name="duration_day" pattern="[0-9]">
                  <p class="help-block text-danger"></p>
                </div>
				        <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $start?> class="form-control" id="start" type="date" placeholder="Démarrage au plus tard" required data-validation-required-message="Please enter a date." name="start">
                  <p class="help-block text-danger"></p>
                </div>
				        <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $location?> class="form-control" id="text" type="text" placeholder="Lieu" required data-validation-required-message="Please enter a location." name="location" pattern="[A-Za-z]{0,100}">
                  <p class="help-block text-danger"></p>
                </div>
				        <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $rate?> class="form-control" id="rate" type="text" placeholder="Prix(€ HT)" required data-validation-required-message="Please enter a price." name="rate" pattern="[0-9]{0,100}">
                  <p class="help-block text-danger"></p>
                </div>
				        <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $file?> class="form-control" id="rate" type="file" data-validation-required-message="Please enter a message." name="file">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group floating-label-form-group controls">
                  <input value=<?php echo $statut?> class="form-control" id="statut" type="text" placeholder="statut" data-validation-required-message="Please enter a message." name="file">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Valider</button>
              </div>
			   <div class="control-group">
              </div>
            </form>
          </div>
        </div>
	<div\>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
