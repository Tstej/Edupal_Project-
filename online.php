<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM `ecourse`";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);
$i = 1;
?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script type="text/javascript" src="course.js"> </script>
  <style>
    .compare11 {
      display: flex;
      align-items: center;
      height: 400px;
      background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/buildawebsite.jpg");
      background-size: cover;
      background-position: center;

    }

    .heading11 {
      background-color: #FFFFFF;
      display: inline-block;
      color: #F06529;
      font-weight: 700;
      padding: 10px 35px;
      border-radius: 5px;
      margin-left: 340px;
      font-size: 30px;


    }

    .head1 {
      text-align: center;
      color: white;


    }


    .hh2 {
      background-color: #FFFFFF;
      display: inline-block;
      color: #F06529;
      font-weight: 700;
      padding: 10px 35px;
      border-radius: 5px;

      font-size: 26px;
    }

    .searchbar1 {

      text-align: center;
      border-radius: 15px;
      border-color: pink;
      border-width: 3px;
      display: inline-block;
      font-size: small;
      padding: 5px;
      padding-left: 35px;
      padding-right: 35px;
      margin-left: 400px;

    }

    .comparenow {
      border-radius: 5px;
      border-color: #F06529;
      padding: 2px;
      padding-left: 30px;
      padding-right: 30px;
      background-color: #F06529;
      color: white;
      cursor: pointer;
    }

    .comparenow :hover {
      color: white;
      transition: none;
      outline: none;
      color: white;
    }



    /* List styles */

    /* Create three equal columns that floats next to each other */
    .column {
      background-color: white;
      float: left;
      height: auto;
      width: 100%;
      padding: 10px;
      border: 10px
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row {

      content: "";
      display: block;
      clear: both;
      border: 200px;
      padding: 50px;
    }

    @media screen and (max-width: 900px) {
      .column {
        width: 100%;
      }
    }

    .star-color {
      color: orange;
    }

    .btn {

      background-color: pink;
      border-radius: 10px;
      color: #C71585;
      padding: 5px 5px;
      margin-right: auto;
      font-size: 18px;
      cursor: pointer;
      border-color: #A90C4B;

    }

    .background {
      display: flex;
      height: auto;
      background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/buildawebsite.jpg");
      background-size: cover;
      background-repeat: repeat-y;
    }

    .img7 {
      float: left;
      margin-top: 13.5px;
      box-sizing: inherit;
      margin-right: 50px;

    }

    .info {
      margin-top: 5px;
      font-size: 14px;
      font-family: OpenSans, Arial, sans-serif;
      box-sizing: inherit;
      display: flex;
      flex-direction: column;
      justify-content: center;
      max-width: 100%;
      margin-left: 98px;
    }

    .text {
      box-sizing: inherit;
      font-family: "Source Sans Pro", "Arial", "sans-serif";
      margin: 0px 0px 0px;
      line-height: 25px;
      font-weight: 400px;
      max-width: 100%;
    }

    .no {
      float: left;
      margin-top: 65px;
      margin-right: 30px;
      margin-left: 20px;
      font-size: 30px;
      color: black;
    }

    .a {
      font-size: 25px;
      color: white;
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-weight: bold;
      margin-top: 0%;
    }
  </style>
</head>

<body>
  <form action="online.php" method="POST">
    <?php include "navbar.php" ?>
    <section class="compare11">

      <div class="head1">
        <p class="heading11">List Institutions for your desired Course</p>
        <br>
        <div>
          <input class="searchbar1" type="text" placeholder="select or start typing.." list="lists" name="select_course">
          <input type="submit" class="comparenow" onclick="myFunction()" name="go" value="Go">

          <datalist id="lists" style="background-color: #FFFFFF;" name="slect">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <option value="<?php echo $row['ecname']; ?>">
                <?php if ($row['ecname'] == $database) {
                  echo "selected";
                } ?>
                <?php echo $row['ecname']; ?>
              </option>
            <?php
            }


            ?>

          </datalist>
        </div>

      </div>

    </section>
  </form>





  <section class="background" id="myDIV" name="myDIV">

    <div class="row">

      <?php
      $abcd = $_POST['select_course'];
      $selectquery = "SELECT * from eplatform,ecourse,ecp where ecourse.ecno = ecp.ecno AND eplatform.epno = ecp.epno AND ecname = '" . $abcd . "'  ";
      $query4 = mysqli_query($conn, $selectquery); ?>
      <p class="hh2"> To help make your work easier, we came up with a list of the top online learning platforms analyzed by type of course you want to choose<br>
      </p>
      <p class="a">choose the right platform for your needs from these distinct online learning platforms: <?php echo $abcd; ?> </p>
      <?php
      while ($res = mysqli_fetch_array($query4)) {

      ?>
        <p> .</p>
        <div class="column" style="border: 2px solid #ddd; ">
          <div class="no">
            <h1 class="serialno">
              <?php echo ($i++); ?>
            </h1>
          </div>
          <div style="border: 2px solid black;">
            <?php echo '<img class="img7" src= "data:image;base64,' . base64_encode($res['image']) . '"style="width:320px; height:230px;">';
            ?>
            <div class="info">
              <h1 style="color: #008080; font-size:27px; font-family:Georgia, 'Times New Roman', Times, serif;margin-bottom:0%">
                <?php
                echo $res['epname'];
                ?>
              </h1>
              <p class="texft" style="color: #A90C4B; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif; margin-bottom:0%">
                <?php
                echo $res['epdesc'];
                ?>
              </p>
              <h3 style="color: #0A1065; margin-bottom:0%;"> No. of users : <?php echo $res['no_of_users']; ?> </h3>
              <br>
              <span class="fa fa-star star-color">
                <span class="fa fa-star star-color">
                  <span class="fa fa-star star-color">
                    <span class="fa fa-star star-color">
                      <span class="fa fa-star star-color">
                      </span></span></span></span></span>
              <br>
              <a class="btn" href="<?php echo $res['link']; ?>" target="_blank" role="button" style="margin-bottom: 10px;"> Learn More</a>
              <br>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>

  </section>







</body>

<script>
  function myFunction() {
    var x = document.getElementById(" myDIV");
    if (x.style.display == 'none') {
      x.style.display = 'block';
    } else {
      x.style.display = 'none';
    }
  }
  var x = document.getElementById("slect").value;
</script>





</html>