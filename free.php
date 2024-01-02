<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
      }


      .b {
         display: grid;
         height: 100%;
         place-items: center;
         text-align: center;
         background: white;
      }

      .slider {
         max-width: 11000px;
         display: flex;
      }

      .slider .card {
         flex: 1;
         margin: 0 10px;
         background: #fff;
      }

      .slider .card .img1 {
         height: 280px;
         width: 100%;
      }

      .slider .card .img1 img {
         height: 100%;
         width: 100%;
         object-fit: cover;
      }

      .slider .card .content {
         padding: 10px 20px;
      }

      .card .content .title {
         font-size: 23px;
         font-weight: 600;
         color: #ff487e;
      }

      .card .content .sub-title {
         font-size: 20px;
         font-weight: 600;

         line-height: 20px;
      }

      .card .content p {
         text-align: justify;
         margin: 10px 0;
      }

      .card .content .btn {
         display: block;
         text-align: left;
         margin: 10px 0;
      }

      .card .content .btn button {
         background: #ff487e;
         color: #fff;
         border: none;
         outline: none;
         font-size: 17px;
         padding: 5px 8px;
         border-radius: 5px;
         cursor: pointer;
         transition: 0.2s;
      }

      .card .content .btn button:hover {
         transform: scale(0.9);
      }

      .freecourses {
         font-size: 35px;
         margin-left: 130px;
         font-family: Times New Roman, Times, serif;
         font-weight: bold;
         color: #09013b;
      }

      .free {
         background: white;
         font-family: 'Times New Roman', Times, serif;
         padding-top: 40px;
      }






      .marquee-outer {
         height: 650px;
         overflow: hidden;
         position: relative;
         color: black;
      }

      .marquee-inner h7 {
         position: absolute;
         width: 100%;
         height: 100%;
         margin: 0;
         line-height: 24px;
         text-align: center;

         /* Starting position */
         -moz-transform: translateX(100%);
         -webkit-transform: translateX(100%);
         transform: translateX(20%);
         /* Apply animation to this element */
         -moz-animation: scroll-left 15s linear infinite;
         -webkit-animation: scroll-left 15s linear infinite;
         animation: scroll-left 15s linear infinite;

      }

      .marquee-outer h7:hover {
         -moz-animation-play-state: paused;
         -webkit-animation-play-state: paused;
         animation-play-state: paused;
      }

      /* Move it (define the animation) */
      @-moz-keyframes scroll-left {
         0% {
            -moz-transform: translateX(100%);
         }

         100% {
            -moz-transform: translateX(-100%);
         }
      }

      @-webkit-keyframes scroll-left {
         0% {
            -webkit-transform: translateX(100%);
         }

         100% {
            -webkit-transform: translateX(-100%);
         }
      }


      @keyframes scroll-left {
         100% {
            -moz-transform: translateX(-100%);
            /* Browser bug fix */
            -webkit-transform: translateX(-100%);
            /* Browser bug fix */
            transform: translateX(-100%);

         }
      }
   </style>

</head>

<body>
   <section id="free_courses">
      <div class="free">
         <h1 class="freecourses">Start Learning with Free Courses</h1>
         <p style="margin-left: 135px; margin-bottom:auto;">Free online courses from the world's top institutions and e-platforms.</p>

         <div class="marquee-outer">
            <div class="marquee-inner">
               <h7>
                  <div class="b">

                     <div class="slider owl-carousel">
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/1.png" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 How to Use SMART Goals: Achieve More in Less Time
                              </div>

                              <p>
                                 Use a proven goal setting strategy to increase your productivity, leadership and management skills. Achieve more today.
                              </p>
                              <div class="btn">
                                 <button> <a href="https://www.udemy.com/course/goal-setting/" target="_blank" style="color: white;">Read more 🠚</a></button>
                              </div>
                           </div>
                           <img src="images/free_courses/Udemy.png" style="max-width: 90px; max-height:60px; margin-left:230px;">
                        </div>
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/2.png" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Bitcoin and Cryptocurrency Technologies
                              </div>
                              <p>
                                 To really understand what is special about Bitcoin, we need to understand how it works at a technical level.
                              </p>
                              <div class="btn">
                                 <button><a href="https://www.coursera.org/learn/cryptocurrency" target="_blank" style="color: white;">Read more 🠚</a></button>
                              </div>
                           </div>
                           <div>
                              <img src="images/free_courses/coursera.png" style="max-width: 80px; max-height:80px; margin-left:240px;">
                           </div>
                        </div>
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/3.jpg" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Learn to Make Animated Image Gallery using HTML5
                              </div>
                              <p>
                                 A Quick Guide to Learn Animation in HTML with out perfect algorithm and explore all the properties in HTML5.
                              </p>
                              <div class="btn">
                                 <button><a href="https://www.udemy.com/course/learn-to-make-an-animated-image-gallery-using-html5/" target="_blank" style="color: white;">Read more 🠚</a></button>
                              </div>
                           </div>
                           <div>
                              <img src="images/free_courses/Udemy.png" style="max-width: 90px; max-height:60px; margin-left:230px;">
                           </div>
                        </div>
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/4.jpg" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Learn Python 2
                              </div>
                              <p>
                                 Learn the basics of the world’s fastest growing and most popular programming language used by software engineers, analysts, and machine learning engineers alike.
                              </p>
                              <div class="btn">
                                 <button style="margin-top: 8px;"><a href="https://www.codecademy.com/learn/learn-python?utm_source=pepperjam&utm_medium=affiliate&utm_term=228895&clickId=3727233031&pj_creativeid=8-12462&pj_publisherid=228895" target="_blank" style="color: white;">Read more 🠚</a></button>
                              </div>
                           </div>
                           <div>
                              <img src="images/free_courses/codecademy.png" style="max-width: 90px; max-height:80px; margin-left:230px;">
                           </div>
                        </div>
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/5.jpg" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Introductory Photography Course
                              </div>
                              <p>
                                 The fastest way to get off 'Auto' mode and unlock the creative potential of your camera.
                              </p>
                              <div class="btn">
                                 <button style="margin-top: 20px;"><a href="https://www.udemy.com/course/free-photography-course-for-beginners/" target="_blank" style="color: white;"> Read more 🠚</a></button>
                              </div>
                           </div>
                           <div>
                              <img src="images/free_courses/Udemy.png" style="max-width: 90px; max-height:60px; margin-left:230px; margin-top:10px">
                           </div>
                        </div>
                        <div class="card">
                           <div class="img1">
                              <img src="images/free_courses/6.jpg" alt="">
                           </div>
                           <div class="content">
                              <div class="title">
                                 Advanced Cyber Security Training
                              </div>
                              <p>
                                 Build essential cyber security skills and learn about security threats and how to manage them.
                              </p>
                              <div class="btn">
                                 <button style="margin-top: 30px;"><a href="https://www.futurelearn.com/experttracks/advanced-cybersecurity-skills" target="_blank" style="color: white;"> Read more 🠚</a></button>
                              </div>
                           </div>
                           <div>
                              <img src="images/free_courses/futurelearn.png" style="max-width: 90px; max-height:60px; margin-left:230px; ">
                           </div>
                        </div>
                        <script>

                        </script>
                     </div>
                  </div>
               </h7>
            </div>
         </div>
   </section>
</body>

</html>