<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    .tracking-in-contract-bck {
        -webkit-animation: tracking-in-contract-bck 1.2s cubic-bezier(0.550, 0.055, 0.675, 0.190) both;
        animation: tracking-in-contract-bck 1.2s cubic-bezier(0.550, 0.055, 0.675, 0.190) both;
    }

    @-webkit-keyframes tracking-in-contract-bck {
        0% {
            letter-spacing: 1em;
            -webkit-transform: translateZ(400px);
            transform: translateZ(400px);
            opacity: 0;
        }

        40% {
            opacity: 0.6;
        }

        100% {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            opacity: 1;
        }
    }

    @keyframes tracking-in-contract-bck {
        0% {
            letter-spacing: 1em;
            -webkit-transform: translateZ(400px);
            transform: translateZ(400px);
            opacity: 0;
        }

        40% {
            opacity: 0.6;
        }

        100% {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            opacity: 1;
        }
    }

    .mySlides123 {
        display: none;
        height: 625px;
    }

    .container123 {
        position: relative;
        text-align: center;
        color: white;
        width: 100%;
    }

    .bottom-left {
        position: absolute;
        bottom: 8px;
        left: 16px;
    }

    .top-left {
        position: absolute;
        top: 170px;
        left: 130px;
        font-size: 75px;
        font-family: 'Merriweather', serif;
        font-weight: 600;
    }

    .top-right {
        position: absolute;
        top: 8px;
        left: 160px;

    }


    .centered1 {
        position: absolute;
        top: 75%;
        left: 10%;

    }

    td {
        text-align: left;

    }

    .pp {
        margin-top: 100px;
        font-size: 24px;
        background-color: #ffd230;
        color: black;
        font-family: 'Space Mono', monospace;
    }

    .hh {
        font-family: 'Roboto Slab';
        font-weight: 400;
        font-size: 22px;
        color: white;
    }

    .w3-btn,
    .w3-button {
        border: none;
        display: inline-block;
        padding: 8px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        background-color: inherit;
        text-align: center;
        cursor: pointer;
        white-space: nowrap
    }

    .w3-display-left {
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(-0%, -50%)
    }

    .w3-display-right {
        position: absolute;
        top: 50%;
        right: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(0%, -50%)
    }

    .w3-button:hover {
        color: #000 !important;
        background-color: #ccc !important
    }

    .w3-black,
    .w3-hover-black:hover {
        color: #fff !important;
        background-color: #000 !important
    }
</style>

<body>

    <section>

        <div class="w3-display-container container123">
            <img class="mySlides123" src="images/revslider/hero_slide_3.jpg" style="width:100%">
            <img class="mySlides123" src="images/revslider/top-slider.jpg" style="width:100%">
            <img class="mySlides123" src="images/revslider/slide_5.jpg" style="width:100%">

            <img src="images/logo1.png" class="top-right" style="height: 220px;">
            <div class="top-left">EDUPAL</div>
            <p class="tracking-in-contract-bck top-left pp"> The Educational Partner</p>

            <div class="centered1">
                <table style="background: rgba(0,0,0,0.5);">
                    <tr>
                        <td> <img src="images/book_logo.png" style="padding: 6px;"></td>
                        <td>
                            <h3 class="hh">LEARN COURSES <br>FREE</h3><a href="/project/final_project/main.php#free_courses" style="color: #ffd230; text-decoration:underline">Read more</a>
                        </td>
                        <td style="padding-right: 40px;"></td>
                        <td><img src="images/co.png" style="padding: 6px;"></td>
                        <td></td>
                        <td>
                            <h3 class="hh">COMPARE E-PLATFORMS <br>EASILY</h3><a href="/project/final_project/main.php#compare11" style="color: #ffd230; text-decoration:underline">Read more</a>
                        </td>
                    </tr>
                </table>

            </div>

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides123");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
                setTimeout(showDivs, 2000);
            }
        </script>
    </section>
</body>

</html>