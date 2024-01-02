<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0px;
            overflow: hidden;
            background: #32383F;

        }

        ul.topnav li {
            float: left;
        }

        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 15px 15px;
            text-decoration: none;
        }

        .search {
            margin: 5px;
            margin-top: 13px;
            size: 5px;
            height: 30px;
        }

        ul.topnav li a:hover:not(.active) {
            background-color: #111;
        }

        ul.topnav li a.active {
            background-color: #4c565e;
        }

        ul.topnav li.right {
            float: right;
        }

        @media screen and (max-width: 600px) {

            ul.topnav li.right,
            ul.topnav li {
                float: none;
            }
        }

        /* Login Style*/

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .open-button {
            background-color: transparent;
            border: 0%;
            color: white;
            cursor: pointer;
            font-size: large;
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            border: 3px solid #f1f1f1;
            right: 100px;
            top: 70px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #85bd04;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: #32383F;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }



        /*dropdown design*/

        .down {
            float: none;
            position: absolute;
            background-color: black;

        }

        .topnav li ul {
            display: none;
        }

        .topnav li:hover ul {
            display: block;
        }




        .search-container {
            margin-top: 12px;
            background: #fff;
            height: 30px;
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.8s;
            /*box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);*/
            box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .3),
                -4px -4px 6px 0 rgba(116, 125, 136, .2),
                inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
                inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
        }

        .search-container:hover>.search-input {
            width: 150px;
        }

        .search-container .search-input {
            background: transparent;
            border: none;
            outline: none;
            width: 0px;
            font-weight: 500;
            font-size: 16px;
            transition: 0.8s;

        }

        .search-container .search-btn .fas {
            color: #5cbdbb;
        }

        @keyframes hoverShake {
            0% {
                transform: skew(0deg, 0deg);
            }

            25% {
                transform: skew(5deg, 5deg);
            }

            75% {
                transform: skew(-5deg, -5deg);
            }

            100% {
                transform: skew(0deg, 0deg);
            }
        }

        .search-container:hover {
            animation: hoverShake 0.15s linear 3;
        }
    </style>

</head>



<body>

    <ul class="topnav">
        <li>
            <div>
                <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
                <section class="banner" >



                    <label for="menu-control" class="hamburger">
                        <i class="hamburger__icon"></i>
                        <i class="hamburger__icon"></i>
                        <i class="hamburger__icon"></i>
                    </label>

                    <input type="checkbox" id="menu-control" class="menu-control">

                    <aside class="sidebar" style="z-index: 100; ">

                        <nav class="sidebar__menu" >
                            <a href="/project/final_project/main.php">Home</a>
                            <a href="/project/final_project/about.php ">About us</a>
                            <a href="/project/final_project/about.php#services">Services</a>
                            <a href="/project/final_project/main.php#free_courses">Free Courses</a>
                            <a href="/project/final_project/faqs.php">FAQs</a>
                            <a href="/project/final_project/about.php#contact">Contact</a>
                        </nav>

                        <label for="menu-control" class="sidebar__close"></label>

                        <ul class="sidebar__social">
                            <li>
                                <a href="">
                                    <svg viewBox="0 0 14 14" fill="none">
                                        <path d="M13.16 3.88c-.031-.702-.145-1.184-.307-1.601a3.219 3.219 0 00-.763-1.17 3.247 3.247 0 00-1.168-.761c-.42-.162-.9-.276-1.6-.307C8.614.008 8.39 0 6.598 0 4.808 0 4.583.008 3.88.039c-.7.03-1.183.144-1.6.306a3.22 3.22 0 00-1.17.763c-.336.33-.596.73-.761 1.168-.162.42-.276.9-.307 1.601C.008 4.583 0 4.807 0 6.599c0 1.792.008 2.016.039 2.72.03.7.144 1.183.306 1.6.168.444.428.841.763 1.17.33.336.73.596 1.168.761.42.163.9.276 1.601.307.704.031.928.039 2.72.039 1.791 0 2.016-.008 2.72-.039.7-.03 1.182-.144 1.6-.307a3.375 3.375 0 001.93-1.93c.163-.42.277-.9.308-1.601.03-.704.038-.928.038-2.72 0-1.791-.002-2.016-.033-2.72zM11.97 9.267c-.028.645-.136.993-.226 1.225a2.19 2.19 0 01-1.253 1.253c-.232.09-.583.198-1.225.226-.696.031-.905.039-2.665.039s-1.972-.008-2.666-.039c-.644-.028-.992-.136-1.224-.226a2.032 2.032 0 01-.758-.493 2.052 2.052 0 01-.492-.758c-.09-.232-.199-.582-.227-1.224-.031-.696-.039-.905-.039-2.666 0-1.76.008-1.972.039-2.665.028-.645.136-.993.227-1.225.105-.286.273-.546.495-.757.214-.22.471-.387.757-.493.232-.09.583-.198 1.225-.227.696-.03.905-.038 2.665-.038 1.764 0 1.972.007 2.666.038.644.029.992.137 1.224.227.286.106.547.273.758.493.22.214.387.471.493.757.09.232.198.583.226 1.225.031.696.04.905.04 2.665 0 1.761-.009 1.967-.04 2.663z" fill="#898989" />
                                        <path d="M6.6 3.21a3.39 3.39 0 100 6.78 3.39 3.39 0 000-6.78zm0 5.588a2.2 2.2 0 110-4.398 2.2 2.2 0 010 4.398zM10.915 3.075a.791.791 0 11-1.583 0 .791.791 0 011.582 0z" fill="#898989" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg viewBox="0 0 14 14" fill="none">
                                        <path d="M11.6472 0H1.54609C.693574 0 0 .693574 0 1.54609V11.6472c0 .8525.693574 1.5461 1.54609 1.5461H11.6472c.8525 0 1.5461-.6936 1.5461-1.5461V1.54609C13.1933.693574 12.4997 0 11.6472 0zm.5153 11.6472c0 .2842-.2311.5153-.5153.5153H8.70962V7.96235h1.59218l.2631-1.59763H8.70962V5.25669c0-.43741.33563-.77304.77304-.77304h1.05654V2.88603H9.48266c-1.31219 0-2.3701 1.06293-2.3701 2.37515v1.10354H5.56591v1.59763h1.54665v4.20015H1.54609c-.28417 0-.51537-.2311-.51537-.5153V1.54609c0-.28417.2312-.51537.51537-.51537H11.6472c.2842 0 .5153.2312.5153.51537V11.6472z" fill="#888" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg viewBox="0 0 14 14" fill="none">
                                        <path d="M6.59664 0C2.97108 0 0 2.99685 0 6.6224c0 3.6045 2.94401 6.5709 6.59664 6.5709 3.64806 0 6.59666-2.962 6.59666-6.5709C13.1933 2.99685 10.2222 0 6.59664 0zM7.7562 12.3043c-.37102.0773-.76529.1159-1.15956.1159-.39428 0-.78855-.0386-1.15957-.1159v-1.8089c0-.433.11596-.58756.27057-.79632.07871-.08999.12622-.17072.47922-.70339l-.59518-.09281C4.06099 8.67872 3.45806 7.88242 3.2184 7.26399c-.30922-.8271-.14686-1.86305.40977-2.52004.08505-.10056.15461-.27067.09281-.44843-.11606-.35562-.10056-.9199-.02326-1.13641.40988.05858.83133.3522 1.18282.56438.16196.09452.24691.06956.32462.07731.28244-.05879.72301-.20102 1.39923-.20102.41742 0 .85809.06181 1.29102.18551.0774-.00181.20182.06402.41742-.0618.3674-.22386.77456-.50741 1.18272-.56438.0773.21651.0928.78079-.02315 1.13641-.06191.17776.00765.34787.0928.44843.5565.65709.7189 1.69294.40968 2.52004-.23967.61843-.8426 1.41473-2.37329 1.63889l-.59518.09281c.36488.55059.40333.61662.47933.70339.1545.20876.27046.36332.27046.79632v1.8089zm.77304-.2242v-1.5847c0-.4407-.0928-.73442-.21651-.95093C9.4878 9.2276 10.3227 8.53176 10.6938 7.53455c.3942-1.05125.2165-2.30362-.4407-3.16947.116-.51788.116-1.34508-.1623-1.7316-.12368-.17001-.29379-.26281-.5102-.26281h-.00775c-.59941.03241-1.07119.33428-1.57699.64158-.46382-.12371-.9354-.18551-1.40697-.18551-.47923 0-.95856.06956-1.38363.18551-.53248-.32109-.99972-.60998-1.61574-.64158-.19326 0-.36337.0928-.48708.26281-.27822.38652-.27822 1.21372-.16226 1.7316-.65719.86585-.83495 2.12587-.44067 3.16947.37102.99721 1.20596 1.69305 2.38103 2.00992-.09593.16779-.17182.3843-.20172.67733-.23734.0818-.44319.1085-.63464.0522-.20191-.0597-.35924-.1944-.49593-.42434-.307-.51577-.82992-.93681-1.4253-.88206l.06794.77003c.2757-.02527.55009.26647.69262.50687.23514.396.5519.6557.94175.7709.28938.0852.55391.0832.83877.0224v1.0423C2.41445 11.2916.773043 9.14255.773043 6.6224c0-3.20038 2.623217-5.849357 5.823597-5.849357 3.20037 0 5.82356 2.648977 5.82356 5.849357 0 2.52015-1.6414 4.6692-3.89096 5.4577z" fill="#888" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </aside>




                    <style>
                        .banner {
                            min-height: 20px;
                            width: 20px;
                            display: flex;
                            padding: 30px;
                            align-items: center;
                            /* color: #f1f1f1;*/

                        }

                        .hamburger {

                            position: absolute;
                            left: 30px;
                            top: 18px;
                            display: flex;
                            height: 18px;
                            width: 24px;
                            flex-direction: column;
                            justify-content: space-between;
                            cursor: pointer;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            z-index: 1;
                        }

                        .hamburger__icon {
                            display: inline-block;
                            height: 2px;
                            width: 24px;
                            background: #ffffff;
                            border-radius: 2px;
                        }

                        .sidebar {
                            height: 640px;
                            width: 320px;
                            background: rgb(14, 13, 13);
                            position: absolute;
                            top: 0;
                            left: 0;
                            padding: 20px;
                            display: flex;
                            flex-direction: column;
                            transform: translatex(-100%);
                            transition: transform 0.4s ease-in-out;
                        }

                        .sidebar__close {
                            position: absolute;
                            top: 50%;
                            right: -30px;
                            background: rgb(14, 13, 13);
                            height: 60px;
                            width: 60px;
                            border-radius: 50%;
                            box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.03);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            transform: translatex(-100%);
                            cursor: pointer;
                            transition: transform 0.4s ease-in-out 0.2s;
                        }

                        .sidebar__close::before,
                        .sidebar__close::after {
                            content: "";
                            height: 2px;
                            background: #898989;
                            width: 24px;
                            display: block;
                            position: absolute;
                        }

                        .sidebar__close::after {
                            transform: rotate(90deg);
                        }

                        .sidebar__menu {
                            display: flex;
                            flex-direction: column;
                            flex: 1;
                            justify-content: space-around;
                            font-size: 20px;

                            margin-bottom: 20px;
                            color: #898989;
                        }

                        .sidebar__menu a {
                            color: currentcolor;
                            text-decoration: none;
                            transform: translatex(-80%);
                            transition: transform 0.4s ease-in-out;
                        }

                        .sidebar__menu a::before {
                            content: "";
                            height: 2px;
                            background: #898989;
                            width: 120px;
                            position: absolute;
                            bottom: -2px;
                            left: 0;
                            transform: translatex(-50%);
                            opacity: 0;
                            transition: transform 0.4s ease-in-out, opacity 0.4s linear;
                        }

                        .sidebar__menu a:hover::before {
                            transform: translatex(0);
                            opacity: 1;
                        }

                        .sidebar__menu a:nth-child(1) {
                            transition-delay: 0.05s;
                        }

                        .sidebar__menu a:nth-child(2) {
                            transition-delay: 0.1s;
                        }

                        .sidebar__menu a:nth-child(3) {
                            transition-delay: 0.15s;
                        }

                        .sidebar__menu a:nth-child(4) {
                            transition-delay: 0.2s;
                        }

                        .sidebar__menu a:nth-child(5) {
                            transition-delay: 0.25s;
                        }

                        .sidebar__social {
                            display: flex;
                            list-style: none;
                            padding: 0;
                        }

                        .sidebar__social li {
                            margin: 4px;
                        }

                        .sidebar__social a,
                        .sidebar__social svg {
                            display: inline-block;
                            height: 18px;
                            width: 18px;
                        }

                        .menu-control {
                            display: none;
                        }

                        .menu-control:checked+.sidebar {
                            transform: translatex(0);
                        }

                        .menu-control:checked+.sidebar .sidebar__close {
                            transform: translatex(0) rotate(45deg);
                        }

                        .menu-control:checked+.sidebar .sidebar__menu a {
                            transform: translatex(0);
                        }
                    </style>
                </section>
            </div>
        </li>
        <li><a class="active" href="main.php">Home</a></li>


        <li><a href="about.php">About Us</a></li>
        <li> <a href="/project/final_project/main.php#compare11">Compare</a></li>
        <li><a class="drop" href="#">List Institutions</a>
            <ul class="down" style="z-index: 100;">
                <li><a href="online.php">Online</a></li>
                <!--<li><a href="offline.php">Offline</a></li> -->
            </ul>


        <li class="right"> <a href="signup.php"> Sign In</a></li>
        <li class="right">
            <div class="search-container">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <a href="#" class="search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </li>
    </ul>



</body>

</html>