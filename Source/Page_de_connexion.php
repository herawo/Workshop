<?php
  $user = 'root';
  $pass = '';
  $dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);
  $creator=$_COOKIE['COMMID'];
  $stmt = $dbh->prepare("SELECT * from commercial");
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

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">Connexion</a>
      </div>
    </nav>

  </header>
  <div class="container" style="padding: 10vh 0vw">
    <!-- <div class="row"> -->
    <div class="col-lg-8 mx-auto">
      <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
      <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
      <form name="sentMessage" id="contactForm" novalidate="" action="connection.php" methode="get">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
             <select class="form-control" id="client" type="text" placeholder="Adresse e-mail" required="" data-validation-required-message="Please enter your email address." name='mail'>
              <?php
              while($donnees = $stmt->fetch()){
                echo "<option value='".$donnees['mail']."'>".$donnees['mail']."</option>";
              }

              ?>
            </select> 
            <!-- <input class="form-control" id="client" type="text" placeholder="Adresse e-mail" required="" data-validation-required-message="Please enter your email address." name='mail'> -->
            <!-- <p class="help-block text-danger"></p> -->
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <input class="form-control" id="client" type="password" placeholder="Mot de passe" required="" data-validation-required-message="Please enter your password." name='mdp'>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <button type="submit" class="btn btn-success btn-lg" id="Connection">Connexion</button>
        </div>
      </form>
      <!-- </div> -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>Location</h3>
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

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                    <ul class="list-inline item-details">
                      <li>Client:
                        <strong>
                          <a href="http://startbootstrap.com">Start Bootstrap</a>
                        </strong>
                      </li>
                      <li>Date:
                        <strong>
                          <a href="http://startbootstrap.com">April 2014</a>
                        </strong>
                      </li>
                      <li>Service:
                        <strong>
                          <a href="http://startbootstrap.com">Web Development</a>
                        </strong>
                      </li>
                    </ul>
                    <button class="btn btn-success" type="button" data-dismiss="modal">
                      <i class="fa fa-times"></i>
                      Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                  <div class="rl"></div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                      <h2>Project Title</h2>
                      <hr class="star-primary">
                      <img class="img-fluid img-centered" src="img/portfolio/cake.png" alt="">
                      <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                        <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                          <li>Client:
                            <strong>
                              <a href="http://startbootstrap.com">Start Bootstrap</a>
                            </strong>
                          </li>
                          <li>Date:
                            <strong>
                              <a href="http://startbootstrap.com">April 2014</a>
                            </strong>
                          </li>
                          <li>Service:
                            <strong>
                              <a href="http://startbootstrap.com">Web Development</a>
                            </strong>
                          </li>
                        </ul>
                        <button class="btn btn-success" type="button" data-dismiss="modal">
                          <i class="fa fa-times"></i>
                          Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                      <div class="rl"></div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img class="img-fluid img-centered" src="img/portfolio/circus.png" alt="">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                            <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                              <li>Client:
                                <strong>
                                  <a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                              </li>
                              <li>Date:
                                <strong>
                                  <a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                              </li>
                              <li>Service:
                                <strong>
                                  <a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                              </li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal">
                              <i class="fa fa-times"></i>
                              Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                          <div class="rl"></div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                              <h2>Project Title</h2>
                              <hr class="star-primary">
                              <img class="img-fluid img-centered" src="img/portfolio/game.png" alt="">
                              <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                                <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                  <li>Client:
                                    <strong>
                                      <a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                  </li>
                                  <li>Date:
                                    <strong>
                                      <a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                  </li>
                                  <li>Service:
                                    <strong>
                                      <a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                  </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal">
                                  <i class="fa fa-times"></i>
                                  Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                              <div class="rl"></div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                  <h2>Project Title</h2>
                                  <hr class="star-primary">
                                  <img class="img-fluid img-centered" src="img/portfolio/safe.png" alt="">
                                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                      <li>Client:
                                        <strong>
                                          <a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                      </li>
                                      <li>Date:
                                        <strong>
                                          <a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                      </li>
                                      <li>Service:
                                        <strong>
                                          <a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                      </li>
                                    </ul>
                                    <button class="btn btn-success" type="button" data-dismiss="modal">
                                      <i class="fa fa-times"></i>
                                      Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                  <div class="rl"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row">
                                  <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                      <h2>Project Title</h2>
                                      <hr class="star-primary">
                                      <img class="img-fluid img-centered" src="img/portfolio/submarine.png" alt="">
                                      <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                                        <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                        <ul class="list-inline item-details">
                                          <li>Client:
                                            <strong>
                                              <a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                          </li>
                                          <li>Date:
                                            <strong>
                                              <a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                          </li>
                                          <li>Service:
                                            <strong>
                                              <a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                          </li>
                                        </ul>
                                        <button class="btn btn-success" type="button" data-dismiss="modal">
                                          <i class="fa fa-times"></i>
                                          Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

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
