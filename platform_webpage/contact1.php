<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.php">


    <style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
  --violet:#6c5ce7;
  --pink:#FC427B;
  --gradient:linear-gradient(90deg, var(--violet), var(--pink));
}

*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;
  text-transform: capitalize;
  transition: all .2s ease-out;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
}

html::-webkit-scrollbar{
  width:1rem;
}

html::-webkit-scrollbar-track{
  background:#333;
}

html::-webkit-scrollbar-thumb{
  background:#fff;
  border-radius: 5rem;
}

body{
  background:var(--gradient);
  padding:3rem 7%;
}

section{
  padding:2rem 7%;
}

.container{
  background:#fff;
  border-radius: .5rem;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.2);
}

.heading{
  color:transparent;
  background:var(--gradient);
  -webkit-background-clip: text;
  background-clip: text;
  padding:0 1rem;
  padding-top: 2.5rem;
  text-align: center;
  font-size: 4rem;
  text-transform: uppercase;
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  padding:.8rem 3rem;
  border-radius: .5rem;
  background:#333;
  color:#fff;
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  background:var(--gradient);
}

header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding:2rem 7%;
  border-bottom: .1rem solid rgba(0,0,0,.1);
  position: relative;
  z-index: 1000;
}

header .logo{
  font-size: 2.5rem;
  color:var(--violet);
  font-weight: bold;
}

header .logo span{
  color:var(--pink);
}

header .navbar a{
  margin-left: 2rem;
  font-size: 2rem;
  color:#333;
}

header .navbar a:hover{
  color:var(--pink);
}

#menu{
  font-size: 2.5rem;
  padding:.5rem 1rem;
  border-radius: .3rem;
  border:.1rem solid rgba(0,0,0,.2);
  cursor: pointer;
  display: none;
}

.home{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  align-items: center;
}

.home .content{
  flex:1 1 40rem;
}

.home .image{
  flex:1 1 40rem;
}

.home .image img{
  width:100%;
}

.home .content h3{
  color:transparent;
  background:var(--gradient);
  -webkit-background-clip: text;
  background-clip: text;
  font-size: 4rem;
}

.home .content p{
  padding:.5rem 0;
  font-size: 1.7rem;
  color:#666;
}

.course{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.course .box{
  flex:1 1 30rem;
  border-radius: .5rem;
  border:.1rem solid rgba(0,0,0,.1);
  padding:1rem;
  position: relative;
}

.course .box img{
  height:20rem;
  width:100%;
}

.course .box .amount{
  position: absolute;
  top:1rem; left:1rem;
  font-size: 2rem;
  padding:.5rem 1rem;
  background:var(--pink);
  color:#fff;
  border-radius: .5rem;
}

.course .box .stars i{
  color:var(--violet);
  font-size: 1.5rem;
  padding:1rem 0;
}

.course .box h3{
  color:var(--pink);
  font-size: 2.5rem;
}

.course .box p{
  color:#666;
  font-size: 1.5rem;
  padding:.5rem 0;
}

.course .icons{
  display: flex;
  justify-content: space-between;
  border-top: .1rem solid rgba(0,0,0,.1);
  margin-top: 1rem;
  padding:.5rem;
  padding-top: 1rem;
}

.course .icons p{
  color:#666;
  font-size: 1.3rem;
}

.course .icons p i{
  padding-right: .4rem;
  color:var(--pink);
}

.teacher{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.teacher .box{
  flex:1 1 23rem;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius:.5rem;
  padding:1.5rem;
  text-align: center;
}

.teacher .box img{
  height: 10rem;
  width:10rem;
  margin:.5rem 0;
  border-radius: 50%;
  object-fit: cover;
}

.teacher .box h3{
  color:var(--violet);
  font-size: 2.5rem;
}

.teacher .box span{
  color:var(--pink);
  font-size: 2rem;
}

.teacher .box p{
  color:#666;
  font-size: 1.5rem;
  padding:1rem 0;
}

.teacher .box .share a{
  height:4rem;
  width:4rem;
  line-height: 4rem;
  font-size: 2rem;
  background:var(--pink);
  border-radius: .5rem;
  margin:.3rem;
  color:#fff;
}

.teacher .box .share a:hover{
  background:var(--violet);
}

.price{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.price .box{
  flex:1 1 30rem;
  text-align: center;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
}

.price .box h3{
  font-size: 2.5rem;
  color:#333;
  padding:1.5rem 0;
}

.price .box .amount{
  font-size: 4.5rem;
  color:#fff;
  padding:1rem 0;
  background:var(--gradient);
  font-weight: bold;
}

.price .box .amount span{
  font-size: 2rem;
}

.price .box  ul{
  border-bottom: .1rem solid rgba(0,0,0,.1);
  padding: 1rem 0;
  list-style: none;
}

.price .box ul li{
  padding:.7rem 0;
  font-size: 1.7rem;
  color:#666;
}

.price .box .btn{
  margin:2rem 0;
}

.review{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.review .box{
  border-radius: .5rem;
  border:.1rem solid rgba(0,0,0,.1);
  padding:1rem;
  flex:1 1 30rem;
}

.review .box .student{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.review .box .student .student-info{
  display: flex;
  align-items: center;
}

.review .box .student i{
  font-size: 6rem;
  color:var(--pink);
  opacity: .5;
}

.review .box .student .student-info img{
  border-radius: 50%;
  object-fit: cover;
  height: 7rem;
  width:7rem;
  margin-right: 1.5rem;
}

.review .box .student .student-info h3{
  font-size: 2rem;
  color:#333;
}

.review .box .student .student-info span{
  font-size: 1.5rem;
  color:var(--pink);
}

.review .box .text{
  padding:1rem 0;
  font-size: 1.6rem;
  color:#666;
}

.contact{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.contact .image{
  flex:1 1 35rem;
}

.contact .image img{
  width:100%;
}

.contact form{
  flex:1 1 50rem;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  padding:2rem;
}

.contact form .inputBox{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.contact form .inputBox input,
.contact form .box, 
.contact form textarea{
  width: 100%;
  padding:1rem;
  margin:.7rem 0;
  font-size: 1.7rem;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  text-transform: none;
  color:#333;
} 

.contact form .inputBox input:focus,
.contact form .box:focus, 
.contact form textarea:focus{
  border-color: var(--pink);
}

.contact form .inputBox input{
  width:49%;
}

.contact form textarea{
  height: 20rem;
  resize: none;
}






















.footer .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.footer .box-container .box{
  flex:1 1 20rem;
}

.footer .box-container .box h3{
  font-size: 2.5rem;
  color:var(--violet);
  padding:.7rem 0;
}

.footer .box-container .box p{
  font-size: 1.5rem;
  color:#666;
  padding:.7rem 0;
}

.footer .box-container .box a{
  display: block;
  font-size: 1.5rem;
  color:#666;
  padding:.7rem 0;
}

.footer .box-container .box a:hover{
  color:var(--pink);
}

.footer .box-container .box p i{
  padding-right: .5rem;
  color:var(--pink);
}

.footer .credit{
  font-size: 2rem;
  margin-top: 1rem;
  padding:1rem;
  padding-top: 2rem;
  text-align: center;
  border-top: .1rem solid rgba(0,0,0,.1);
  color:#666;
}

.footer .credit span{
  color:var(--pink);
}



/* media queries  */

@media (max-width:991px){

  html{
    font-size: 55%;
  }

  body{
    padding:1.5rem;
  }

  header{
    padding:2rem;
  }

  section{
    padding:2rem;
  }

}

@media (max-width:768px){

  #menu{
    display: initial;
  }

  header .navbar{
    position: absolute;
    top:100%; left:0; right:0;
    background:#fff;
    border-top: .1rem solid rgba(0,0,0,.2);
    border-bottom: .1rem solid rgba(0,0,0,.2);
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  }

  header .navbar.active{
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }

  header .navbar a{
    font-size: 2.5rem;
    display: block;
    margin:2rem 0;
    text-align:center;
  }

  .contact form .inputBox input{
    width:100%;
  }

}

@media (max-width:400px){

  html{
    font-size: 50%;
  }

} 
</style>
</head>
<body>
    
<div class="container">

<h1 class="heading">contact us</h1>

<!-- contact section  -->

<section class="contact">

<div class="image">
    <img src="images/contact-img.svg" alt="">
</div>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="name">
        <input type="email" placeholder="email">
    </div>

    <input type="text" placeholder="subject" class="box">

    <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

    <input type="submit" class="btn" value="send">

</form>

</section>


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, maxime!</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">course</a>
            <a href="#">teacher</a>
            <a href="#">price</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
           <p> <i class="fas fa-envelope"></i> studysmart@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
        </div>

    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

</div>















<!-- custom js file link -->
<script src="script.php"></script>

</body>
</html>