<html>

<head>
    <style>
        div.gallery {
            margin: 5px;
            float: left;
            width: 220px;
            margin-left: 80px;
            align-items: center;
            margin-top: 50px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            margin-top: 15px;
            text-align: center;
            height: 160px;
        }
    </style>


</head>

<body>
    <section style="background-color: #ffe3f7">
        <div>
            <div style="margin-left: 50px;">
                <p style=" margin-top:20px;font-size:x-large"> Explore with us</p>
                <h1 style="margin-bottom: 40px;"> Get to Know about your desired Learning platform</h1>
            </div>


            <div style="overflow: hidden;">
                <div class="gallery">
                    <a target="_blank" href="img_5terre.jpg">
                        <img src="images/gallery/byju.png" alt="Byju's" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">BYJU'S is India's largest education company and the creator of India's largest K12 learning app</p>




                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Byju";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " target="_blank" role="button">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="images/gallery/think.jpg" alt="Thinkific" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">Thinkific is a platform that allows people to create online courses and deliver those courses to students </p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Thinkific";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " target="_blank" role="button">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_lights.jpg">
                        <img src="images/gallery/pluralsight.jpg" alt="Coursera" width="600" height="400">
                    </a>
                    <div class="desc">

                        <p class="courses">Pluralsight offers courses in subjects like software development, data science, and more.</p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Pluralsight";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " target="_blank" role="button">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="images/gallery/coursera.png" alt="Unacademy" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">Coursera actually offers real academic courses from real professors</p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Coursera";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " target="_blank" role="button" style="margin-top: 23px;">Learn more</a>
                    </div>
                </div>

                <div class=" gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="images/gallery/skillshare.png" alt="Skillshare" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">Skillshare is less formal and aimed more at improving creative skills.</p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Skillshare";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " role="button" style="margin-top: 23px;">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="images/gallery/future_learn.png" alt="Pluralsight" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">If you want to learn <br>something, it’s probably on Future Learn.</p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Future learn";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " role="button" style="margin-top: 23px;">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="images/gallery/moodle.png" alt="Future Learn" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">Moodle has a high-end pedigree -An overall accesible system </p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Moodle";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " role="button" style="margin-top: 23px;">Learn more</a>
                    </div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="images/gallery/codecademy.jpg" alt="Moodle" width="600" height="400">
                    </a>
                    <div class="desc">
                        <p class="courses">Codecademy is an online learning website focused on coding, with over 45 million users</p>
                        <a class="btn btn-primary btn-lg" href="
                        <?php
                        $name = "Codecademy";
                        $plat_name = "platform_webpage/main.php?send_name=" . $name;
                        echo $plat_name; ?>
                        " role="button">Learn more</a>
                    </div>
                </div>


    </section>

</body>

</html>