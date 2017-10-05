<?php
if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);
$creator=$_COOKIE['COMMID'];
$stmt = $dbh->prepare("SELECT * from projet where creator =".$creator);
$stmt->bindparam(":mail",$mail);
$res = $stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CompanyHub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="DataTables/datatables.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
  <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">Tableau de bord</a>
      </div>
    <!-- <form class="form-inline pull-right">
            <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
            <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
      </form> -->
    </nav>
    
  </header>
    <a class="navbar-brand js-scroll-trigger" href="fiche_besoin.php">Création d'une fiche de besoin</a>
  <div class="col-lg-8 mx-auto">
    <table id="tableau_besoin" class="table">

      <thead>
      <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Nom du client</th>
        <th>Statut</th>
        <th>Date</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
        <?php
        while($donnees = $stmt->fetch()){
          echo "<tr>";
          echo "<th scope='row'>".$donnees['idProjet']."</th>";
          echo "<td>".$donnees['title']."</td>";
          echo "<td>".$donnees['contact_name']."</td>";
          echo "<td>".$donnees['statut']."</td>";
          echo "<td>".$donnees['start']."</td>";
          echo '<td><a href="delete.php?id='.$donnees['idProjet'].'">Delete</a>';
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <p>EPSI - Ecole d'ingénierie informatique
          <br>3 Bis Rue de la condamine
                <br>38610 Gières</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="Tableau_avec_tri.js"</script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>



