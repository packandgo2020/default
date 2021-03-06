<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\user\Desktop\travel-agency-website-template\LOGO.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PACK 'N' GO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          
          <a class="navbar-brand" href="index.html" ><h2> PACK <em>'N'</em> GO</h2> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="index.html">Accueil
                      
                    </a>
                </li> 

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espace Membre</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="inscription.html">S'inscrire</a>
                    <!--<a class="dropdown-item" href="testimonials.html">Login in</a>-->
                    
                    <a class="dropdown-item" href="connexion.html">S'identifier</a>
                   
                  </div>
              </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Logements</a>
                  
                  <div class="dropdown-menu">
                    <!--<a class="dropdown-item" href="about-us.html">Tunisia</a>
                    <a class="dropdown-item" href="testimonials.html">A Broad</a>-->
                    <a class="dropdown-item" href="logement.html" >Tunisie</a>
                    <a class="dropdown-item" >Etranger</a>
                    
                  </div>
              </li>

              <li >
                <a class="nav-link" href="excursion.html">Excursions
                  <span class="sr-only">(current)</span>
                </a>
            </li> 

                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Voyages</a>
                  
                  <div class="dropdown-menu">
                   <!-- <a class="dropdown-item" href="about-us.html">Organised Trip</a>
                    <a class="dropdown-item" href="testimonials.html">Scholarship</a>-->
                    <a class="dropdown-item">Voyage Organisé</a>
                    <a class="dropdown-item" >Voyage à La Carte</a>
                    
                  </div>
              </li>
              <li>
                <a class="nav-link" >Forum
                  
                </a>
            </li> 
            
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/logement.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             
            </div>
          </div>
        </div>
      </div>
 









<br> 
<br>
<?php 
                                        $reservatione=$_GET['reser'];
                                         ?>
<form  style="margin: 0pt;"  action="ajout.php?resere=<?php echo $reservatione; ?>" method="POST">
                       
                        <table width="460" class="fckTable">
                            <tbody>
                                <tr>
                                    <td colspan="2"><strong>Demande de réservation<br />
                                    </strong></td>
                                </tr>
                                <tr>
                                    <td width="150">Chambre*</td>
                                    <td><select name="chambre">
                                    <option  selected="" value="select...">sélect...</option>
                                    <option value="simple">simple</option>
                                    <option value="double">double</option>
                                   <option value="triple">triple</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td width="150">Arrivée*</td>
                                    <td><input type="date" style="width: 150px;" name="arrivee" /> </td>
                                </tr>
                                <tr>
                                    <td width="150">Départ*</td>
                                    <td><input type="date" style="width: 150px;" name="depart" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Notes</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" style="width: 500px; height: 100px;" name="notes" />&#160;<input type="hidden" value="Contact direct" name="formTitle" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">nombre de nuit</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text"  name="nbnuit" />&#160;<input type="hidden" value="Contact direct" name="formTitle" /></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><input type="submit" name="reservation" style="float: right;" value="Envoyer" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>















    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>
                    A Stay, a Trip or Honey Moon ... that's for sure with Pack 'N' Go</h4>
                  <p><a href="gmail.com"></a>packngo@gmail.com</p>
                  <p><a href="https://www.facebook.com/packandgo"></a>Facebook</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                 <!--<a href="contact.html" class="filled-button">Contact Us</a>--> 
                 <a  class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Pack 'N' Go  <a href="https://www.facebook.com/packandgo"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


  </body>
</html>