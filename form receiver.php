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
        <h1 class="headertop"><span>Visita Roma</span></h1>
        <h2 class="headertop"><span>I miei biglietti</span></h2>
        <h2 class="headertop" style="text-align: left"><span>SESSION: <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } else {
                die('$'."_SESSION['username'] isn't set because you had never been at file one");
            }
                ?></span></h2>
    </div>
    <h4 class="brushfont sticky" style="text-align: end"><a class="card" href="form sender.php" style="background-color: paleturquoise; padding: 10px; box-shadow: 1px 1px 3px black;">Acquista online i biglietti</a></h4>
    <h4 class="brushfont" style="text-align: left; "><a id="logout" style="padding: 10px; cursor: pointer;" onclick="logout()">Logout</a></h4>

  <div class="bgimg card card1">

    <div class="row">

      <div class="leftcolumn">
        <h2 style=color:white>Colosseo</h2>
      </div>

        <!--- Read form0 $username.txt -->
        <?php

        $username = $_SESSION['username'];
        $filename = "database/form0 $username.txt";
        $file = fopen($filename, "r");

        $fillname = fgets($file);
        $filllname = fgets($file);
        $fillemail = fgets($file);
        $fillnationality = fgets($file);
        $fillgender = fgets($file);
        $filltype = fgets($file);
        $fillmessage = fgets($file);

        ?>

        <div class="rightcolumn cardsimple" style="background-color: #3B5998; width: 50%">
            <table>
                <tbody>
                    <tr>
                        <td>Nome:</td>
                        <td><?php echo $fillname; ?></td>
                    </tr>
                    <tr>
                        <td>Cognome:</td>
                        <td><?php echo $filllname; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $fillemail; ?></td>
                    </tr>
                    <tr>
                        <td>Nazionalità:</td>
                        <td><?php echo $fillnationality; ?></td>
                    </tr>
                    <tr>
                        <td>Genere:</td>
                        <td><?php echo $fillgender; ?></td>
                    </tr>
                    <tr>
                        <td>Tipo del biglietto:</td>
                        <td><?php echo $filltype; ?></td>
                    </tr>
                    <tr>
                        <td>Nota:</td>
                        <td><?php echo $fillmessage; ?></td>
                    </tr>
                </tbody>
            </table>

            <!----
            Nome: <?php echo $fillname; ?>
            <br>
            Cognome: <?php echo $filllname; ?>
            <br>
            Email: <?php echo $fillemail; ?>
            <br>
            Nazionalità: <?php echo $fillnationality; ?>
            <br>
            Genere: <?php echo $fillgender; ?>
            <br>
            Tipo del biglietto: <?php echo $filltype; ?>
            <br>
            <?php echo $fillmessage; ?>
            <br>
            --->
        </div>

    </div>

    </div>


  <!--- Second Card --->
  <div class="card card2 bgimg">
    <div class="row">

      <div class="leftcolumn">
        <h2 style=color:white>Stadio Olimpico</h2>
      </div>


        <!--- Read form1 $username.txt -->
        <?php
        $username = $_SESSION['username'];
        $filename = "database/form1 $username.txt";

        $file = fopen($filename, "r");

        $fillname2 = fgets($file);
        $filllname2 = fgets($file);
        $fillemail2 = fgets($file);
        $fillnationality2 = fgets($file);
        $fillgender2 = fgets($file);
        $filltype2 = fgets($file);
        $fillmessage2 = fgets($file);

        ?>

        <div class="rightcolumn cardsimple" style="background-color: #3B5998; width: 50%" >

            <table>
                <tbody>
                <tr>
                    <td>Nome:</td>
                    <td><?php echo $fillname2; ?></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><?php echo $filllname2; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $fillemail2; ?></td>
                </tr>
                <tr>
                    <td>Nazionalità:</td>
                    <td><?php echo $fillnationality2; ?></td>
                </tr>
                <tr>
                    <td>Genere:</td>
                    <td><?php echo $fillgender2; ?></td>
                </tr>
                <tr>
                    <td>Tipo del biglietto:</td>
                    <td><?php echo $filltype2; ?></td>
                </tr>
                <tr>
                    <td>Nota:</td>
                    <td><?php echo $fillmessage2; ?></td>
                </tr>
                </tbody>
            </table>
            <!---
            Nome: <?php echo $fillname2; ?>
            <br>
            Cognome: <?php echo $filllname2; ?>
            <br>
            Email: <?php echo $fillemail2; ?>
            <br>
            Nazionalità: <?php echo $fillnationality2; ?>
            <br>
            Genere: <?php echo $fillgender2; ?>
            <br>
            Tipo del biglietto: <?php echo $filltype2; ?>
            <br>
            <?php echo $fillmessage2; ?>
            <br>
            ---->
        </div>

    </div>
  </div>


    <div class="row">
        <div class="leftcolumn">
            <h2 class="schraegH2" style="margin-top: 15%;">Altre piazze famose in Roma</h2>
        </div>

        <div id="cube-container" class="rightcolumn">
            <div id="cube" style="-webkit-transform:rotateX(0deg) rotateY(0deg);">
                <figure class="front">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Foro_romano">Foro Romano</a></div>
                    </div>
                </figure>
                <figure class="back">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Piazza_San_Pietro">Piazza San Pietro - Vaticano</a></div>
                    </div>
                </figure>
                <figure class="right">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Basilica_di_San_Pietro_in_Vaticano">Basilica di San Pietro in Vaticano</a></div>
                    </div>
                </figure>
                <figure class="left">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Cappella_Sistina">Capella Sistina</a></div>
                    </div>
                </figure>
                <figure class="top">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Piazza_di_Spagna">Piazza di Spagna</a></div>
                    </div>
                </figure>
                <figure class="bottom">
                    <div class="bottommark">
                        <div class="text"><a href="https://it.wikipedia.org/wiki/Monumento_a_Giuseppe_Garibaldi_(Roma)">Monumento a Garibaldi</a></div>
                    </div>
                </figure>
            </div>
        </div>
    </div>


    <div class="row">

            <div class="leftcolumn cardsimple" style="margin-top: 5%;">
                <h2>I nostri partner</h2>
                <div class="container cardsimple"style="width: 33%;">
                    <img src="pictures/Universiteti_Epoka.svg" alt="Workplace" class="image" width="100%">
                    <div class="middle">
                        <div class="text">Epoka University</div>
                    </div>
                </div>
                <div class="container cardsimple" style="width: 33%;">
                    <img src="pictures/roma_logo_welcome3.png" alt="Workplace" class="image" width="100%">
                    <div class="middle">
                        <div class="text">Città di Roma</div>
                    </div>
                </div>
                <div class="container cardsimple"style="width: 33%;">
                    <img src="pictures/Vodafone_2017_logo.svg" alt="Workplace" class="image" width="100%">
                    <div class="middle">
                        <div class="text">Vodafone Italia</div>
                    </div>
                </div>
            </div>

            <div class="rightcolumn card card3" style="width: 50%">
          <h2>La Befana</h2>
          <iframe width="100%" height="200px" src="https://www.youtube.com/embed/8VoZDct2OwI?start=420" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
        </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myDiv");
      x.style.display("s")
    }
  </script>


  <style>
    .footer {
      color: white;
      margin-top: 30px;
      display: block;
      flex-direction: row;
      column-gap: 40px;
      padding: 20px;
      background-repeat: no-repeat;
    }
    .copyrightfooter p {
        padding: 4px 30px;
        text-align: center;
        font-family: "Informal Roman", serif;
        color: black;
    }
    .bubble-content {
        margin: 0 10%;
        border-radius:20px;
        background-color: #dddddd;
        box-shadow:1px 1px 5px rgba(0,0,0,.5);
        font-size: 1.4em;
    }

    ul li {
      display: list-item;
      column-gap: 40px;
    }

    #top, .comment {
        opacity: 1.0;
    }

    .donate {
        color:#333;
        text-shadow:1px 1px 1px #fff;
        text-decoration:none;
        border-radius:3px;
    }

  </style>

  <footer class="footer">

    <div id="Social">
      <table>
          <h2 style="padding: 0px; margin: 0px; font-family: 'Informal Roman', serif; font-weight: bold;">Seguici</h2>
          <tbody>
            <tr>
                <td><a href="#" class="fa fa-facebook"></a></td>
                <td><a href="#" class="fa fa-twitter"></a></td>
                <td><a href="#" class="fa fa-google"></a></td>
                <td><a href="#" class="fa fa-linkedin"></a></td>
                <td style="width: 90%;"><div class="copyrightfooter bubble-content">
                        <p><marquee>Designed by <b>Devid Duma</b></marquee></p>
                    </div></td>
                <td>
                    <figure style="margin:0px; margin-right: 50px;">
                        <span><a href="donate.php" class="donate">Donate
                        <img src="pictures/heart.svg" style="height: 20px" />
                            </a></span>
                    </figure>
                </td>
                <td><div id="top" class="triangle" href="#" style="cursor:pointer">
                        <div class="comment">Top</div>
                    </div></td>
            </tr>
          </tbody>
      </table>
        <!---
        <h3><strong>Seguici</strong></h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      --->
    </div>
  </footer>

    <script type="application/javascript">
        $(document).ready(function(){
            $('#top').click(function(){
                $('html, body').animate({scrollTop:0},1000);
            });
        });
    </script>

</body>

</html>