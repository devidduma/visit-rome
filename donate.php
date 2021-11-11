<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Header/Blog Title */
        #topheader {
            text-align: center;
        }
        h1,h2,h3,h4,h5,h6 {
            margin-top:0px;
            font-family: "Times New Roman", serif;
            font-weight: bold;
            letter-spacing:1px;
            color: lightyellow;
        }
        h1,h2 {
            text-transform:uppercase;
        }

        .headertop {
            border-left:17px solid #3B5998;
            font-weight:bold;
            font-size: 2.5em;
            color:#fff;
            text-align: left;
            line-height:1.3em;
        }
        .headertop span {
            background-color:rgba(0,0,0,.25);
            padding:4px 10px;
            white-space:pre-wrap;
        }

        body {
            font-family: "Times New Roman", serif;
            font-weight: bold;
            padding: 10px;
            background-color: #f1f1f1;
            background-image: url("pictures/Trevi-Fountain-Rome-guided-tour-Best-of-Rome-scaled-3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            text-shadow: 1px 1px 2px #3B5998;
        }

        /* Add a card effect for articles */
        .cardsimple {
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .card {
            padding: 20px;
            margin-top: 20px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: 2px 3px 5px black;
            border-radius: 5px;
            opacity: 1.0;
        }

        .card1 {
            background-image: url("pictures/Travel-to-Rome-Colosseum-ruins-dusk-clouds-lights-Italy_2560x1600.jpg");
        }

        .card2 {
            background-image: url("pictures/Stadio-Olimpico.jpg");
        }

        .card3 {
            background-image: url("pictures/La-Befana.jpg");
        }

        .bgimg {

            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Times New Roman", serif;
            font-size: 20px;
            text-shadow: 1px 1px 2px black;
            background-repeat: no-repeat;
        }

        /* Right column */
        .leftcolumn {
            float: left;
            width: 50%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            max-width: 50%;
            padding-left: 20px;
        }

        /* Add a card effect for articles */
        .cardsimple {
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }


        .container {
            position: relative;
            width: 20%;
            display: flex;
            float: left;
            white-space: pre-wrap;
        }

        .image {
            opacity: 1;
            display: inline;

            height: auto;
            width: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .bottommark {
            transition: .5s ease;
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            opacity: 1;
        }

        .container:hover .image {
            opacity: 0.3;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: transparent;
            color: white;
            font-size: 25px;
            padding: 16px 32px;
        }

        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 4px 2px;

        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }


        .brushfont {
            font-family: "Informal Roman", serif;
            font-size: xx-large;
        }

        .triangle {
            width:0;
            height:0;
            border-left:40px solid transparent;
            border-right:40px solid transparent;
            border-bottom:80px solid #3B5998;
            box-shadow: 2px 2px 5px #3B5998;
            border-radius:80px;
            background-color: whitesmoke;
        }
        .triangle:hover {
            box-shadow: 3px 3px 6px #3B5998;
        }
        .comment {
            color:white;
            padding-top: 40px;
            margin-left: -15px;
            background-color:rgba(0,0,0, 0.5);
            width:100%;
            font:x-large "Informal Roman",serif;
        }

        a {
            text-decoration-line: none;
            color: lightyellow;
        }

        table {
            /*border-spacing:10px;*/
            border-collapse:collapse;
        }

        table thead h3 {
            margin: 0px;
        }
        table td {
            font-size: x-large;
            white-space: nowrap;
        }

        input, textarea {
            padding: 7px 22px;
            margin: 10px 5px;
            box-sizing: border-box;
            border: none;
            box-shadow: 1px 2px 3px #3B5998;
            font-size: large;
            font-family: "Times New Roman", serif;
            color: #3B5998;
        }
        input[type=text], textarea {
            width: 80%;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="application/javascript"></script>


    <style type="text/css">
        #cube-container {
            margin:100px auto;
            width:360px;
            height:360px;
            position:relative;
            -webkit-perspective:700;
            text-align:center;
            font-size:6em;
        }
        #cube {
            width:100%;
            height:100%;
            display:block;
            position:absolute;
            -webkit-transform-style:preserve-3d;
        }
        #cube figure {
            margin:0;
            width:356px;
            height:356px;
            display:block;
            position:absolute;
            box-shadow: 5px 5px 7px white;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #cube .front {
            background-image: url("https://www.jbexperiences.net/public/images/1575641486196_shutterstock_98484677.jpg");
            -webkit-transform:rotateY(0deg) translateZ(180px);
        }
        #cube .back {
            background-image:url("http://www.dronestagr.am/wp-content/uploads/2016/06/Elia-Locardi-Travel-Photography-P3-Beyond-The-Vatican-Rome-2048-1200x800.jpg");
            -webkit-transform:rotateY(180deg) translateZ(180px);
        }
        #cube .right {
            background-image:url("https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Basilica_di_San_Pietro%2C_Rome_-_2674.jpg/1280px-Basilica_di_San_Pietro%2C_Rome_-_2674.jpg");
            -webkit-transform:rotateY(90deg) translateZ(180px);
        }
        #cube .left {
            background-image:url("https://www.vaticanstate.va/media/k2/items/cache/218fa54275e0e31c37b4e5091d9112ba_XL.jpg");
            -webkit-transform:rotateY(-90deg) translateZ(180px);
        }
        #cube .top {
            background-image:url("https://scoprendoroma.info/wp-content/uploads/2017/12/piazza-di-spagna.jpg");
            -webkit-transform:rotateX(90deg) translateZ(180px);
        }
        #cube .bottom {
            background-image:url("https://upload.wikimedia.org/wikipedia/commons/3/38/180MonumentoGaribaldi.JPG");
            -webkit-transform:rotateX(-90deg) translateZ(180px);
        }

        #cube:hover {
            cursor:pointer;
        }
    </style>


    <script type="text/javascript">
        $(document).ready(function(){
            X=Y=0;
            $('#cube-container').mousedown(function(e){
                oldX= e.clientX;
                oldY= e.clientY;
                $('html').on('mousemove',function(e) {
                    newX= e.clientX;
                    newY= e.clientY;
                    diffX=newX-oldX;
                    diffY=newY-oldY;
                    X+=diffX;
                    Y-=diffY;
                    //$('#coordinates').text(diffX+'  '+diffY);
                    $('#cube').css('-webkit-transform','rotateX('+Y+'deg) rotateY('+X+'deg)');
                    oldX= newX;
                    oldY=newY;
                }).mouseup(function(){
                    $('html').off('mousemove');
                });

            });
        });
    </script>


    <style type="text/css">
        .schraegH2 {
            width:220px;
            color:white;
            background-color:#3B5998;
            padding:10px;
            border-radius: 5px;
            box-shadow: 1px 2px 3px white;

            -webkit-transform:rotate(15deg) skew(20deg) translate(100px,50px) /*moves the element visibly, not physically*/ scale(2,1.3);
            -webkit-transform-origin:bottom left;	/*or use pixels*/
        }
    </style>

    <style type="text/css">

        .feedbackbox {
            width: 320px;
            height: 100%;
            max-height: 70px;
            background-color: lightcoral;
            color: white;
            box-sizing: border-box;
            transform: translate(-50%, -50%);
            padding: 5px;
            box-shadow: 1px 3px 7px whitesmoke;
            border-radius: 5px;
            text-align: center;
            font-family: "Informal Roman",serif;
            font-size: x-large;
        }

    </style>

    <script type="application/javascript">
        var value = 0;

        function _5e() {
            value = 5;
            document.getElementById("other").value = "";
        } function _10e() {
            value = 10;
            document.getElementById("other").value = "";
        }function _20e() {
            value = 20;
            document.getElementById("other").value = "";
        }function _30e() {
            value = 30;
            document.getElementById("other").value = "";
        }

        function calculate() {
            var other_value = document.getElementById("other").value;
            if(other_value > value) {
                value = other_value;
            }

            var statusCode;
            $.ajax('calculateDonations.php', {
                type: 'POST',
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    donate: value
                },
                async: false,
                success: function(data, textStatus, jqXHR) {
                    statusCode = 200;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    statusCode = jqXHR.status;
                }
            });

            document.getElementById("myform").style.display = 'none';
            document.getElementById("feedback").style.display = 'block';
            if(statusCode === 200) {
                document.getElementById("feedback").innerHTML = "Avete donato " + value + " Euro. Vi ringraziamo molto!";
            } else {
                document.getElementById("feedback").style.backgroundColor = "#3B5998";
                document.getElementById("feedback").innerHTML = "Non si poteva donare " + value + " Euro. Server ha ritornato status code " + statusCode + ".";
            }
        }
    </script>

    <script type="application/javascript">
        function logout() {
            $.ajax('logoutFunction.php', {
                type: 'POST',
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    logout: 1
                },
                async: true
            });

            window.location.replace('login.html');
        }
    </script>
</head>


<body>

<div id="topheader" >
    <h2 class="headertop" style="text-align: left;"><span>Grazie, <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } else {
                die('$'."_SESSION['username'] isn't set because you had never been at file one");
            }
            ?>!</span></h2>
</div>
<div class="row">
    <h2 class="headertop" style="text-align: left;">Quanto <img src="pictures/heart.svg" style="height: 50px" />olete donare?</h2>
    <h4 class="brushfont" style="text-align: left; "><a id="logout" style="padding: 10px; cursor: pointer;" onclick="logout()">Logout</a></h4>
</div>

<div class="cardsimple">

    <div id="myform" class="row">
        <input id="5e" type="button" value="5 Euro" name="5e" onclick="_5e()">
        <input id="10e" type="button" value="10 Euro" name="10e" onclick="_10e()">
        <input id="20e" type="button" value="20 Euro" name="20e" onclick="_20e()">
        <input id="30e" type="button" value="30 Euro" name="30e" onclick="_30e()">
        <span id="altrospan" style="color: #3B5998; font-size: large; font-weight: normal">Altro: </span>
        <input id="other" type="number" style="max-width: 200px; min-width: 100px;" name="other" >
        <input id="submit" type="submit" value="Invia" onclick="calculate()">
    </div>

    <div class="row">
        <div class="leftcolumn" style="width: 15%;">
            <br>
        </div>
        <div id="feedback" class="rightcolumn feedbackbox cardsimple" style="display: none;">
            <p id="button" style="display: inherit;"></p>
        </div>
    </div>
</div>


<h2 class="brushfont sticky" style="text-align: center; margin-top: 10%; text-shadow: 1px 1px 2px white;"><a class="card" href="form sender.php" style="padding: 10px; color:#3B5998; box-shadow: 0px 0px 0px white; ">Acquista online i biglietti</a></h2>
</body>