<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Edupal- About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    .jumbotron {
      background-image: url("images/books.png");
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
    }

    .container-fluid {
      padding: 60px 50px;
    }

    .bg-grey {
      background-color: #CBC9C5;
    }

    .logo-small {
      color: #BBC030;
      font-size: 50px;
    }

    .logo {
      color: #BBC030;
      font-size: 200px;
    }

    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }

    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #f4511e;
    }

    .carousel-indicators li {
      border-color: #f4511e;
    }

    .carousel-indicators li.active {
      background-color: #f4511e;
    }

    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    .panel {
      border: 1px solid #f4511e;
      border-radius: 0 !important;
      transition: box-shadow 0.5s;
    }

    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
    }

    .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #6A6F32ff;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }

    .panel-footer {
      background-color: white !important;
    }

    .panel-footer h3 {
      font-size: 32px;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #6A6F32ff;
      color: #fff;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #6A6F32ff;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #fff !important;
    }

    .navbar-nav li a:hover,
    .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
    }

    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
    }

    .slideanim {
      visibility: hidden;
    }

    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }

    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }

    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }

      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
    }
  </style>
</head>
<?php include "navbar.php" ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


  <div class="jumbotron text-center">
    <h1>Edupal</h1>
    <p>Leads You To Success</p>
    <form action="about.php" method="POST">
      <div class="input-group">
        <input type="email" class="form-control" name="emaill" size="50" placeholder="Email Address" required>
        <div class="input-group-btn">
          <button type="submit" class="btn btn-danger" name="subscribe">Subscribe</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>Know About Us</h2><br>
        <h4> We at Edupal offer students the best choice to do their desired course from the first-class Institutions. We help students to clear their chaos for selecting the best E-platform from various available options. </h4><br>
        <p>We provide the facility to compare many number of institutions at one place. Students can search the best rated institution for the course they desire to learn. We also deliver some more facilities, such as information about free courses, option to directly contact with us, users ratings about different institutions, chat window to ask the queries, and many more while updating them from time to time to better suit our users evolving needs and demands.</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h2>Our Values</h2><br>
        <h4><strong>MISSION:</strong> Our mission is to help those students who struggles to find the best institution for them. Harness the power of blockchain to create a two-sided marketplace and fully decentralized online education platform. We help peoples to gather more information about various institutions that are available online. We practice agile development and therefore carefully plan for the immediate goals and draw general
          plans for the future according to the vision that we want to achieve.</h4><br>
        <h4><strong>VISION:</strong> We are living in a time of information overload due to perpetual and rapid technological innovation, but still there are many capable prospective students who simply lack access to educational resources, so our vision is to provide them best education. To organize the best information about various online platforms and make it easily accessible and useful. To change the way of learning.</h4>
      </div>
    </div>
  </div>

  <!-- Container (Services Section) -->
  <div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>POWER</h4>
        <p>Superior customer service, innovation, quality and commitment..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>We care about our users..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Provide real information..</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>GREEN</h4>
        <p>Socially and environmentally responsible..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Blockchain certificates of course completion..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>To supply outstanding service and solutions..</p>
      </div>
    </div>
  </div>

    <h2>What our customers say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"This platform is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
        </div>
        <div class="item">
          <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
        </div>
        <div class="item">
          <h4>"Could I... BE any more happy with this platform?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us on</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Edupal, Pune, India</p>
        <p><span class="glyphicon glyphicon-phone"></span> +91 9812386191</p>
        <p><span class="glyphicon glyphicon-envelope"></span> www.contactedupal@gmail.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>

</body>

</html>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$emaill = "";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("connection failed:" . $conn->connect_error);
}

if(isset($_POST['subscribe']))
{
$emaill = $_POST['emaill'];
}
$sql = "insert into subscribe values('$emaill') ";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

?>