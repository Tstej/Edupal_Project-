
<?php 
$servername="localhost";
$username="root";
$password="";
$database="project";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
  die("connection failed:".$conn->connect_error);

}

$sql="SELECT epname FROM `eplatform`";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
?>


<html>

<head>
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
      margin-left: 40px;
      font-size: 30px;


    }

    .head1 {
      text-align: center;
      color: white;


    }

    .hh2 {
      color: #FFFFFF;
      font-weight: bold;
      margin-left: 100px;
      margin-right: 120px;
      font-size: 24px;
    }

    .searchbar1,
    .searchbar2,
    .searchbar3 {

      text-align: center;
      border-radius: 15px;
      border-color: pink;
      border-width: 3px ;
      display: inline-block;
      font-size: small;
      padding: 5px;
      padding-left: 35px;
      padding-right: 35px;
      
    }

    .comparenow{
      border-radius: 5px;
      border-color: #F06529;
      padding: 2px;
      padding-left: 30px;
      padding-right: 30px;
      background-color: #F06529;
      color: white;
    }

    .comparenow :hover{
      color: white;
      transition: none;
      outline: none;
      color: white;
    }
   
  </style>
</head>

<body>
<form action="table.php" method="POST">
  <section class="compare11" id="compare11">

    <div class="head1">
      <p class="heading11">Compare with us the Top Institutions</p>
      <p class="hh2">Compare all e-learning platforms head-to-head with this extensive & fact-based Online Learning Platform Comparison Tool!</p>
      <br>
      <div>
        <input class="searchbar1" type="text" placeholder="select or start typing.." list="lists" name="search1">
        <input class="searchbar2" type="text" placeholder="select or start typing.." list="lists" name="search2">
       
        <input type="submit" role="button " class="comparenow" value="Compare Now"> 
      

        <datalist id="lists" style="background-color: #FFFFFF;">
        
<?php
   while($row=mysqli_fetch_assoc($result))
   {
     ?>
     <option value="<?php echo $row['epname'];?>">
     <?php if($row['epname']==$database){echo "selected";}?>
     <?php echo $row['epname'];?>
   </option>
     <?php
   }
?> 
        </datalist>
      </div>

    </div>

  </section>
  </form>
</body>

</html>