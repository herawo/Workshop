<?php
if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.html");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Fiche Besoin</title>

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
            <form name="sentMessage" id="contactForm" novalidate="" action="send_contact.php" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="date" type="date" placeholder="Date" name="date">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="client" type="text" placeholder="Client a compléter" required="" data-validation-required-message="Please enter your email address." name="contact_mail">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="Contactname" type="text" placeholder="Contact name" required="" data-validation-required-message="Please enter your phone number." name="contact_name">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="title" type="text" placeholder="Title" required="" data-validation-required-message="Please enter a message." name="title"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
			  <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <textarea class="form-control" id="fulldesc"  placeholder="Full description" required="" data-validation-required-message="Please enter a message." name="full_description"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
			   <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <textarea class="form-control" id="3mainkey" rows="3" placeholder="3 main key success factors" required="" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="duration" type="text" placeholder="Duration(months)" required="" data-validation-required-message="Please enter a message." name="duration_month"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="start" type="date" placeholder="Start at the latest" required="" data-validation-required-message="Please enter a message." name="start"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="text" type="text" placeholder="Location" required="" data-validation-required-message="Please enter a message." name="location"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="rate" type="text" placeholder="Rate(€ HT)" required="" data-validation-required-message="Please enter a message." name="rate"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <input class="form-control" id="rate" type="text" placeholder="Description file a compléter" required="" data-validation-required-message="Please enter a message." name="file"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group floating-label-form-group controls">
                  <textarea class="form-control" id="consultants" rows=5 placeholder="Consultants name" required="" data-validation-required-message="Please enter a message." ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Save & Share</button>
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
