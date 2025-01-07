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

   
    
    

    

   <!-- afficher -->


    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-Entretien">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase"> les Conducteurs</h2>
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
              <h2>Conducteurs</h2>
              


              

              <?php 
$cnx = new PDO('mysql:host=localhost;dbname=optifleetmaroc','root','');
$q = $cnx->prepare("SELECT * FROM conducteurs");
$q->execute();
$tab = $q->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>CIN</th>
            <th>Experience</th>
        </tr>
        <?php foreach($tab as $row): ?>
            <tr>
                <td><?php echo $row['Nom']; ?></td>
                <td><?php echo $row['Prenom']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['CIN']; ?></td>
                <td><?php echo $row['experience']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


    


            </div>
          </div>
          
        </div>
      </div>
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