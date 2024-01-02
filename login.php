<?php 
$servername="localhost";
$username="root";
$password="";
$database="project";
$username1="";


$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
  die("connection failed:".$conn->connect_error);

}

if(isset($_POST['login']))
{   
   $username1= $_POST['username2'];
  $password= $_POST['password']; 
}

$sql = "select * from signup where username= '$username1' && password= '$password'";
$result = mysqli_query($conn,$sql);
$num= mysqli_num_rows($result);

if($num==1){
  
    header('location:main.php');

}
else{
   
    header('location:signup.php');

}

?>