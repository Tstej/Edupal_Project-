<head>
    <meta charset="UTF-8">
    <title>Edupal- Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import 'https://fonts.googleapis.com/css?family=Dosis|Roboto:300,400';

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("images/books.png");
        }

        .container {
            position: absolute;
            width: auto;
            height: auto;
            top: calc(50% - 240px);
            left: calc(50% - 160px);
        }

        form {
            position: absolute;
            text-align: center;
            background: #fff;
            width: 310px;
            height: 470px;
            border-radius: 5px;
            padding: 30px 20px 0 20px;
            box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
            box-sizing: border-box;
        }

        p {
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            text-transform: uppercase;
            font-size: 12px;
            color: #b31051;
            margin-bottom: 40px;
        }

        p>span {
            padding-top: 3px;
            display: block;
            font-weight: 400;
            font-size: 9px;
        }

        h3 {
            font-family: 'Dosis';
            font-size: 35px;
            text-transform: uppercase;
            color: #b31051;
            margin-bottom: 30px;
        }

        input,
        button {
            outline: none !important;
        }

        button.fb {
            border: none;
            background: #3b5998;
            width: 160px;
            height: 25px;
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            border-radius: 4px;
            border: 1px solid #29487d;
            cursor: pointer;
            margin-bottom: 20px;
            transition: all 0.3s linear;
        }

        button.fb:hover {
            background: #fff;
            color: #3b5998;
        }

        button.form-btn {
            position: absolute;
            width: 50%;
            height: 60px;
            bottom: 0;
            border: 0;
            font-family: 'Dosis';
            font-size: 24px;
            text-transform: uppercase;
            cursor: pointer;
        }

        button.form-btn.sx {
            left: 0;
            border-radius: 0 0 0 5px;
            background-color: #fabbd4;
            color: #fff;
            transition: all 0.3s linear;
        }

        button.form-btn.sx:hover {
            background-color: bd7994;
            color: #fff;
        }

        button.form-btn.sx.back {
            background-color: #fabbd4;
            transition: all 0.3s linear;
        }

        button.form-btn.sx.back:hover {
            background-color: bd7994;
        }

        button.form-btn.dx {
            right: 0;
            border-radius: 0 0 5px 0;
            background-color: #b31051;
            color: #fff;
        }

        input {
            border: none;
            border-bottom: 1px solid #b31051;
            width: 85%;
            font-family: 'Roboto';
            color: #b31051;
            text-align: center;
            font-size: 21px;
            font-weight: 100;
            margin-bottom: 25px;
        }

        ::-webkit-input-placeholder {
            color: bd7994;
            font-family: 'Roboto';
            font-weight: 100;
        }

        :-moz-placeholder {
            color: bd7994;
            font-family: 'Roboto';
            font-weight: 100;
        }

        ::-moz-placeholder {
            color: bd7994;
            font-family: 'Roboto';
            font-weight: 100;
        }

        :-ms-input-placeholder {
            color: bd7994;
            font-family: 'Roboto';
            font-weight: 100;
        }

        .signIn input,
        .signUp .w100 {
            width: 100%;
        }

        .signIn {
            z-index: 1;
            transform: perspective(100px) translate3d(100px, 0px, -30px);
            opacity: 0.5;
        }

        .signUp {
            z-index: 2;
        }

        .active-dx {
            animation-name: foregrounding-dx;
            animation-duration: 0.9s;
            animation-fill-mode: forwards;
        }

        .active-sx {
            animation-name: foregrounding-sx;
            animation-duration: 0.9s;
            animation-fill-mode: forwards;
        }

        .inactive-dx {
            animation-name: overshadowing-dx;
            animation-duration: 0.9s;
            animation-fill-mode: forwards;
        }

        .inactive-sx {
            animation-name: overshadowing-sx;
            animation-duration: 0.9s;
            animation-fill-mode: forwards;
        }

        @keyframes overshadowing-dx {
            0% {
                z-index: 2;
                transform: perspective(100px) translate3d(0px, 0px, 0px);
                opacity: 1;
                box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
            }

            100% {
                z-index: 1;
                transform: perspective(100px) translate3d(100px, 0px, -30px);
                opacity: 0.5;
                box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25);
            }
        }

        @keyframes overshadowing-sx {
            0% {
                z-index: 2;
                transform: perspective(100px) translate3d(0px, 0px, 0px);
                opacity: 1;
                box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
            }

            100% {
                z-index: 1;
                transform: perspective(100px) translate3d(-100px, 0px, -30px);
                opacity: 0.5;
                box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25);
            }
        }

        @keyframes foregrounding-dx {
            0% {
                z-index: 1;
                transform: perspective(100px) translate3d(100px, 0px, -30px);
                opacity: 0.5;
            }

            50% {
                z-index: 2;
                transform: perspective(100px) translate3d(400px, 0px, -30px);
            }

            100% {
                z-index: 2;
                transform: perspective(100px) translate3d(0px, 0px, 0px);
                opacity: 1;
            }
        }

        @keyframes foregrounding-sx {
            0% {
                z-index: 1;
                transform: perspective(100px) translate3d(-100px, 0px, -30px);
                opacity: 0.5;
            }

            50% {
                z-index: 2;
                transform: perspective(100px) translate3d(-400px, 0px, -30px);
            }

            100% {
                z-index: 2;
                transform: perspective(100px) translate3d(0px, 0px, 0px);
                opacity: 1;
            }
        }
    </style>

</head>

<body>

    <?php include "navbar.php" ?>
    <!-- partial:index.partial.html -->
    <div class="container">
        <form class="signUp" action="signup.php" method="post">
            <h3>Create Your Account</h3>

            <input type="text" placeholder="Enter Your Name" name="name" required />
            <input class="w100" type="email" placeholder="Enter Email Address" name="email" required />
            <input type="text" placeholder="Create Username" name="username2" required />
            <input type="password" placeholder="Create Password" name="password" required />

            <button class="form-btn sx log-in" type="button">Log In</button>
            <button class="form-btn dx" type="submit" name="signup">Sign Up</button>
        </form>
        <form class="signIn" action="login.php" method="post">
            <h3>Welcome</br>Back !</h3>
            </br>
            <p>Just enter your Username</br>
                and password to join.
            </p></br>

            <input type="text" placeholder="Enter Username" name="username2" autocomplete='off' required />
            <input type="password" placeholder="Enter Password" name="password" required />
            <button class="form-btn sx back" type="button">Back</button>
            <button class="form-btn dx" type="submit" name="login">Log In</button>
        </form>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script>
        $(".log-in").click(function() {
            $(".signIn").addClass("active-dx");
            $(".signUp").addClass("inactive-sx");
            $(".signUp").removeClass("active-sx");
            $(".signIn").removeClass("inactive-dx");
        });

        $(".back").click(function() {
            $(".signUp").addClass("active-sx");
            $(".signIn").addClass("inactive-dx");
            $(".signIn").removeClass("active-dx");
            $(".signUp").removeClass("inactive-sx");
        });
    </script>

</body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$name = "";
$username1 = "";
$email = "";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username1 = $_POST['username2'];
    $password = $_POST['password'];
}

if($name != null && $email != null 
    && $username1 != null && $password != null) {

    $query = "INSERT into signup(name,username,password,email) values ('$name','$username1','$password','$email')";
    if (mysqli_query($conn, $query)) {
        echo '<script language="javascript">';
        echo 'alert("Your account is created succesfully")';
        echo '</script>';
    }    
}

?>