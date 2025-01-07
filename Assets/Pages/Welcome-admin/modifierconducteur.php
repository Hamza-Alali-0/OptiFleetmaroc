<?php
$email_error = null;
session_start();

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "optifleetmaroc") or die(mysqli_error($conn));

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $CIN = $_POST['CIN'];
    $experience = $_POST['experience'];

    // Check if the provided email exists in the database
    $sql_check_existence = "SELECT * FROM conducteurs WHERE email=?";
    $stmt = $conn->prepare($sql_check_existence);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result_existence = $stmt->get_result();

    if ($result_existence->num_rows > 0) {
        // Fetch the result row
        $row = $result_existence->fetch_assoc();
        // Check if the provided email matches the existing one
        if ($id != $row['email']) {
            $email_error = "EMAIL Doesn't exist";
        } else {
            // Check if the new email already exists
            $sql_check_email = "SELECT * FROM conducteurs WHERE email=?";
            $stmt = $conn->prepare($sql_check_email);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result_email = $stmt->get_result();

            if ($result_email->num_rows > 0 && $id == $email) {
                $email_error = "EMAIL ALREADY EXISTS";
            } else {
                // Update the conductor details
                $stmt = $conn->prepare("UPDATE conducteurs SET nom=?, prenom=?, email=?, CIN=?, experience=? WHERE email=?");
                $stmt->bind_param("ssssss", $nom, $prenom, $email, $CIN, $experience, $id);
                $stmt->execute();
                $email_error = "Modifié avec succès";

                $stmt->close();
            }
        }
    } else {
        $email_error = "EMAIL Doesn't exist";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content goes here -->
</head>
<body>
    <!-- Your HTML body content goes here -->
</body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
    More Templates Visit ==> Free-Template.co
    -->
    <title>Dashboard-ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">OptiFleet Maroc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active"> <p><a href="index.html"  class="btn btn-primary ftco-animate ">QUITTER</a></p></li>
            <li class="nav-item"><a href="#section-Conducteurs" class="nav-link"></a></li>
            <li class="nav-item"><a href="#section-Vehicules" class="nav-link"></a></li>
            <li class="nav-item"><a href="#section-Entretien" class="nav-link"></a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link"></a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link"></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

   
    
    

    

   <!-- Ajouteremployee -->


    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-Entretien">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">Modifier le Conducteur</h2>
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <p class="lead"></p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate">
            <div class="ftco-pricing">
              <h2>Conducteur</h2>
              


              <p class="lead"><div class="ftco-icon mb-3"><span class="oi oi-person display-4 text-muted"></span></div></p>
            <form action="" method="post">
            <legend>Entrer Email du conducteur a modifier </legend>
              <input type="text" value="" name="id">
              <br><br>

            <legend>Entrer Nom </legend>
              <input type="text" value="" name="nom">
              <br><br>
            <legend>Entrer Prenom </legend>
              <input type="text" value="" name="prenom">
              <br><br>
              <legend>Entrer Email </legend>
              <input type="text" value="" name="email">
              <br><br>
              <legend>Entrer CIN </legend>
              <input type="text" value="" name="CIN">
              <br><br>
              <legend>Entrer experience </legend>
              <input type="text" value="" name="experience">
              
              <br><br><br>
              <button  type="submit"  >Modifier</button>
              <br><br>
              <div class="error email-error">
        <p id ="info-message">
        <?php echo $email_error; ?>
   </p>
</div>
            
            </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    
       

          

    </section>
    

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>
    <script>
      function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
      </script>
      
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      <script>
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()", 0);
        window.onunload=function(){null};
    
      </script>
    
  </body>
</html>