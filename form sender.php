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
    .topheader {
        padding: 10px;
    }
    h1,h2,h3,h4,h5,h6 {
        margin-top:0px;
        font-family: "Times New Roman", serif;
        font-weight: bold;
        letter-spacing:1px;
        color: white;
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
      background-color: steelblue;
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

    p {
        white-space: pre-line;
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
    input[type=submit]:hover {
        background-color: lightpink;
    }

    .bubble-list .bubble {
        margin-bottom:15px;
    }

    .bubble-list .bubble img {
        float:left;
        width:60px;
        height: 60px;
        border:3px solid #fff;
        border-radius: 30px;
    }
    .bubble-list .bubble p {
        padding: 8px 3px;
        margin: 0px;
    }

    .bubble-list .bubble .bubble-content-reviews {
        float:left;
        width:70%;
        margin-left:20px;
        padding:0 20px;
        border-radius:10px;
        box-shadow:1px 1px 5px rgba(0,0,0,.2);
        background-color: whitesmoke;
        color: #3B5998;
        text-shadow: none;
        font-weight: normal;
    }

    .clearfix:after {
        content:"clearfix";
        visibility:hidden;
        height:0;
        clear:both;
        display:block;
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

    <script type="text/javascript">
        $('#cookies').hide();
        $(document).ready(function(){
            $('#cookies').slideDown(450,false);
            $('#nothanks').click(function(){
                $('#cookies').slideUp(450,false);
            });
            $('#yesthanks').click(function(){
                $('#cookies').slideUp(450,false);

                $.ajax('setCookies.php', {
                    type: 'POST',
                    contentType: 'application/x-www-form-urlencoded',
                    data: {
                        cookies: 1,
                    },
                    async: true
                });
            });
            //same thing for slideToggle
        });

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

    <style>
        #cookies {
            background-image: url("pictures/cookies-512.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
            width:500px;
            padding:20px;
            font-size:20px;
            color:whitesmoke;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
            border-radius: 5px;
        }

        #yesthanks:hover, #nothanks:hover {
            cursor: pointer;
        }
    </style>

</head>

<body>
<?php
    if(!isset($_COOKIE["cookie1"])) {
        echo "
            <div id='cookies' >Accettate i cookies ? <a id='yesthanks'>Si.</a><br/><a id='nothanks' >No,grazie.</a></div>
        ";
    }
?>

    <div class="topheader" style="text-align: center;" >
        <h1 class="headertop"><span>Visita Roma</span></h1>
        <h2 class="headertop" style="color: whitesmoke;"><span>Acquista online i biglietti</span></h2>
        <h2 class="headertop" style="text-align: left"><span>SESSION: <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } else {
                die('$'."_SESSION['username'] isn't set because you had never been at file one");
            }
                ?></span></h2>
    </div>
    <h4 class="brushfont sticky" style="text-align: end;"><a class="card" style="background-color: lightsteelblue; padding: 10px; box-shadow: 1px 1px 3px black;" href="form receiver.php">I miei biglietti</a></h4>
    <h4 class="brushfont" style="text-align: left; "><a id="logout" style="padding: 10px; cursor: pointer;" onclick="logout()">Logout</a></h4>

<div class="bgimg card card1">

    <div class="row">
      <div class="leftcolumn">

        <h2 style=color:white>Colosseo</h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <table>
                <thead></thead>
                <tbody>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Nazionalità:</td>
                    <td><input type="text" name="nationality"></td>
                </tr>
                <tr>
                    <td>Genere: </td>
                    <td><input type="text" name="gender"> </td>
                </tr>
                <tr>
                    <td>Tipo del biglietto:</td>
                    <td><input type="text" name="type"> </td>
                </tr>
                <tr>
                    <td>Nota:</td>
                    <td><textarea id="message" name="message" rows="6" cols="50"> </textarea></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td style="color: deepskyblue;">Prezzo:</td>
                    <td><p style="padding-left: 25%; color: deepskyblue;">50 EUR</p></td>
                </tr>
                </tfoot>
            </table>

            <input type="hidden" name="form" value="0" />
            <input type="submit" value="Invia la richiesta" style="margin-left: 17%;">
        </form>


      </div>
            <!---
          Nome: <input type="text" name="fname"> <br>
          Cognome: <input type="text" name="lname"> <br>
          Email: <input type="text" name="email"> <br>
          Nazionalità: <input type="text" name="nationality"> <br>
          Genere: <input type="text" name="gender"> <br>
          Tipo del biglietto: <input type="text" name="type"> <br>
          <textarea id="message" name="message" rows="6" cols="50"> </textarea> <br>

          <input type="hidden" name="form" value="0" />
          <input type="submit" value="Invia la richiesta">
            --->

        <div class="rightcolumn">
            <h3 style="margin-top: 40px;">Recensioni</h3>
            <div class="bubble-list">
                <div class="bubble clearfix">
                    <div><img src="https://i0.wp.com/gentlehair.com/wp-content/uploads/2015/08/mens-haircut-square-face2.png?fit=498%2C800&ssl=1" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>Un "must" per ognuno che visita Roma. Incredibilmente bello anche di notte! Prenditi un po 'di tempo, goditi il panorama e pensa quante storie e quante persone ha già visto questo edificio storico! Vale sempre la pena acquistare i biglietti per una visita al chiuso.</p></div>
                    </div>
                </div>
                <div class="bubble clearfix">
                    <div><img src="https://styleeasily.com/wp-content/uploads/2018/04/94200418-cool-hairstyle-for-women-.jpg" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>Ovviamente si deve vedere anche il punto di riferimento più famoso di Roma. Fatti interessanti dall'audioguida e generalmente divertenti. Tuttavia, l'ingresso potrebbe essere un po' più ordinato. Avere alcuni segnali sarebbe buono.</p></div>
                    </div>
                </div>
                <div class="bubble clearfix">
                    <div><img src="https://cdn.improb.com/wp-content/uploads/2019/02/cutsbyerick-short-hairstyles-for-men-2017-e1489099111746.jpg" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>È il Colosseo! Cosa c'è da dire, tranne che ti colpisce ogni volta che lo vedi.  Se vuoi vederlo dall'interno, ti serve un biglietto. È meglio ordinare online in anticipo, altrimenti devi aspettare molto tempo al sole.</p></div>
                    </div>
                </div>
            </div>
        </div>


      <!--- Write form.txt -->
      <?php

      global $fillname;
      global $filllname;
      global $fillemail;
      global $fillnationality;
      global $fillgender;
      global $filltype;
      global $fillmessage;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $nationality = $_POST['nationality'];
        $gender = $_POST['gender'];
        $type = $_POST['type'];
        $message = $_POST['message'];
        $form = $_POST['form'];

        if ($form == "0") {
            $username = $_SESSION['username'];
            $filename = "database/form$form $username.txt";

          $myfile = fopen($filename, "w");

          if (empty($fname)) {
            //echo "Il nome è vuoto." . "<br>";
          } else {
            $txt = $fname;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($lname)) {
            //echo "Il cognome è vuoto." . "<br>";
          } else {

            $txt = $lname;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($email)) {
            //echo "L'Email è vuoto." . "<br>";
          } else {

            $txt = $email;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($nationality)) {
            //echo "La nazionalità è vuota." . "<br>";
          } else {

            $txt = $nationality;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($gender)) {
            //echo "Il genere è vuoto." . "<br>";
          } else {

            $txt = $gender;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }
          if (empty($type)) {
            //echo "Il tipo del biglietto è vuoto." . "<br>";
          } else {

            $txt = $type;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }
          if (empty($message)) {
            //echo "Il testo è vuoto." . "<br>";
          } else {

            $txt = $message;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          fclose($myfile);
        }
      }
      ?>

    </div>

  </div>


  <!--- Second Card --->
  <div class="card card2 bgimg">
    <div class="row">

      <div class="leftcolumn">

        <h2 style=color:white>Stadio Olimpico</h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <thead></thead>
                <tbody>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="fname2"></td>
                    </tr>
                    <tr>
                        <td>Cognome:</td>
                        <td><input type="text" name="lname2"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email2"></td>
                    </tr>
                    <tr>
                        <td>Nazionalità:</td>
                        <td><input type="text" name="nationality2"></td>
                    </tr>
                    <tr>
                        <td>Genere: </td>
                        <td><input type="text" name="gender2"> </td>
                    </tr>
                    <tr>
                        <td>Tipo del biglietto:</td>
                        <td><input type="text" name="type2"> </td>
                    </tr>
                    <tr>
                        <td>Nota:</td>
                        <td><textarea id="message" name="message2" rows="6" cols="50"> </textarea></td>
                    </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td style="color: deepskyblue;">Prezzo:</td>
                    <td><p style="padding-left: 25%; color: deepskyblue;">100 EUR</p></td>
                </tr>
                </tfoot>
            </table>

            <input type="hidden" name="form" value="1" />
            <input type="submit" value="Invia la richiesta" style="margin-left: 17%;">

            <!---
            Nome: <input type="text" name="fname2"> <br>
          Cognome: <input type="text" name="lname2"> <br>
          Email: <input type="text" name="email2"> <br>
          Nazionalità: <input type="text" name="nationality2"> <br>
          Genere: <input type="text" name="gender2"> <br>
          Tipo del biglietto: <input type="text" name="type2"> <br>
          <textarea id="message" name="message2" rows="6" cols="50"> </textarea> <br>

          <input type="hidden" name="form" value="1" />
          <input type="submit" value="Invia la richiesta">
          --->

        </form>
      </div>


      <!--- Write form2.txt -->
      <?php

      global $fillname2;
      global $filllname2;
      global $fillemail2;
      global $fillnationality2;
      global $fillgender2;
      global $filltype2;
      global $fillmessage2;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $fname2 = $_POST['fname2'];
        $lname2 = $_POST['lname2'];
        $email2 = $_POST['email2'];
        $nationality2 = $_POST['nationality2'];
        $gender2 = $_POST['gender2'];
        $type2 = $_POST['type2'];
        $message2 = $_POST['message2'];
        $form = $_POST['form'];

        if ($form == "1") {

            $username = $_SESSION['username'];
            $filename = "database/form$form $username.txt";

            $myfile = fopen($filename, "w");

          if (empty($fname2)) {
            //echo "Il nome è vuoto." . "<br>";
          } else {
            $txt = $fname2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($lname2)) {
            //echo "Il cognome è vuoto." . "<br>";
          } else {

            $txt = $lname2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($email2)) {
            //echo "L'Email è vuoto." . "<br>";
          } else {

            $txt = $email2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($nationality2)) {
            //echo "La nazionalità è vuota." . "<br>";
          } else {

            $txt = $nationality2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          if (empty($gender2)) {
            //echo "Il genere è vuoto." . "<br>";
          } else {

            $txt = $gender2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }
          if (empty($type2)) {
            //echo "Il tipo del biglietto è vuoto." . "<br>";
          } else {

            $txt = $type2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }
          if (empty($message2)) {
            //echo "Il testo è vuoto." . "<br>";
          } else {

            $txt = $message2;
            fwrite($myfile, $txt);
            $txt = "\r\n";
            fwrite($myfile, $txt);
          }

          fclose($myfile);
        }
      }
      ?>

        <div class="rightcolumn">
            <h3 style="margin-top: 40px;">Recensioni</h3>
            <div class="bubble-list">
                <div class="bubble clearfix">
                    <div><img src="https://bgfashions.files.wordpress.com/2013/06/2013-men_s-short-hairstyles.jpg" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>Stadio sensazionale e ultramoderno per circa 72.000 visitatori. Può essere raggiunto col'autobus pubblico (fermata allo stadio) o con il tram linea 2 (circa 10 minuti a piedi). I bagni e le stazioni di snack sono abbondanti. Grande atmosfera quando gioca l'AS Roma.</p></div>
                    </div>
                </div>
                <div class="bubble clearfix">
                    <div><img src="http://feedinspiration.com/wp-content/uploads/2016/08/short-shaggy-haircuts-for-older-women.jpg" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>Stavamo guardando Roma-Juventus Torino. Grande atmosfera. Siamo stati fortunati ad avere un documento d'identità con noi quando siamo entrati, altrimenti non saremmo stati in grado di entrare nello stadio dopo aver aspettato in fila per un'ora. Mi è piaciuto molto lo stadio e quante persone ci possono stare è fantastico!</p></div>
                    </div>
                </div>
                <div class="bubble clearfix">
                    <div><img src="http://inkcloth.com/wp-content/uploads/2013/04/Long-Braided-hairstyles-for-Girls.jpg" /></div>
                    <div class="bubble-content-reviews">
                        <div class=""><p>Una visita allo stadio può essere facilmente combinata con un breve viaggio a Roma.</p></div>
                    </div>
                </div>
            </div>
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

    <div class="row card" style="background-color: #007bb5; color: white; font-size: large; font-weight: normal;">
        <div class="leftcolumn cardsimple" style="width: 75%; margin: 0px; font-size: 0.8em">
            <div>
                <h2><a href="https://it.wikipedia.org/wiki/Colosseo">Colosseo</a></h2>
                <p>Il Colosseo, originariamente conosciuto come Amphitheatrum Flavium (in italiano: Anfiteatro Flavio) o semplicemente come Amphitheatrum, situato nel centro della città di Roma, è il più grande anfiteatro del mondo. In grado di contenere un numero di spettatori stimato tra 50 000 e 87 000 unità, è il più importante anfiteatro romano, nonché il più imponente monumento dell'antica Roma che sia giunto fino a noi.[1] Inserito nel 1980 nella lista dei Patrimoni dell'umanità dall'UNESCO, assieme a tutto il Centro storico di Roma, le Zone extraterritoriali della Santa Sede in Italia e la Basilica di San Paolo fuori le mura, nel 2007 il complesso, unico monumento europeo, è stato anche inserito fra le Nuove sette meraviglie del mondo, a seguito di un concorso organizzato da New Open World Corporation (NOWC).

                    L'anfiteatro è stato edificato in epoca Flavia su un'area al limite orientale del Foro Romano. La sua costruzione fu iniziata da Vespasiano nel 70 d.C. e inaugurato da Tito nell'80, con ulteriori modifiche apportate durante l'impero di Domiziano nel 90. L'edificio forma un'ellisse di 527 m di perimetro, con assi che misurano 187,5 e 156,5 m. L'arena all'interno misura 86 × 54 m, con una superficie di 3 357 m². L'altezza attuale raggiunge 48,5 m, ma originariamente arrivava a 52 m. La struttura esprime con chiarezza le concezioni architettoniche e costruttive romane della prima Età imperiale, basate rispettivamente sulla linea curva e avvolgente offerta dalla pianta ellittica e sulla complessità dei sistemi costruttivi. Archi e volte sono concatenati tra loro in un serrato rapporto strutturale.

                    <a href="https://it.wikipedia.org/wiki/Colosseo" >Per di più, leggi Wikipedia</a>
                </p>
            </div>
        </div>
        <div class="rightcolumn cardsimple" style="width: 25%; margin: 0px;">
            <img src="pictures/1280px-Colosseo_2020.jpg" width="100%"/>
            <br /><br />
            <img src="pictures/Colosseo-above.jpg" width="100%"/>
        </div>
    </div>

    <div class="row card" style="background-color: #3B5998; color: white; font-size: large; font-weight: normal;">
        <div class="leftcolumn cardsimple" style="width: 75%; margin: 0px; font-size: 0.8em;">
            <div>
                <h2><a href="https://it.wikipedia.org/wiki/Stadio_Olimpico_(Roma)">Stadio Olimpico</a></h2>
                <p>Lo stadio Olimpico è un impianto sportivo polifunzionale italiano di Roma, che sorge presso il complesso del Foro Italico, alle pendici di Monte Mario, nel settore nord-occidentale della città.

                    Nonostante sia uno stadio olimpico, dunque esclusivamente dedicato allo sport, furono anche realizzati concerti musicali, in particolar modo il concerto di Claudio Baglioni del 6 giugno 1998, che detiene tutt’ora il record spettatori all’Olimpico con un totale di oltre 90 000 spettatori, grazie al fatto che il palco si trovava al centro dello stadio e il pubblico lo circondava riempiendo tutti i posti a sedere.

                    Ideato nel 1927 e originariamente noto come stadio dei Cipressi, nacque su progetto di Enrico Del Debbio per poi essere ripreso nel 1937 da Luigi Moretti e usato come quinta scenica dei giochi del periodo fascista; abbandonato durante la guerra e usato come autoparco dalle truppe alleate, nel 1949 ne fu deciso dal CONI, suo proprietario, il completamento a cura di Annibale Vitellozzi, che lo ultimò nel 1953; all'epoca noto come stadio dei Centomila per via della capienza che si aggirava intorno ai 100 000 posti, fu ribattezzato stadio Olimpico dopo l'assegnazione a Roma dei Giochi della XVII Olimpiade del 1960.

                    <a href="https://it.wikipedia.org/wiki/Stadio_Olimpico_(Roma)">Per di più, leggi Wikipedia</a>
                </p>
            </div>
        </div>
        <div class="rightcolumn cardsimple" style="width: 25%; margin: 0px;">
            <img src="pictures/Stadio-Olimpico.jpg" width="100%"/>
            <br /><br />
            <img src="pictures/Stadio-Olimpico 2.jpg" width="100%"/>
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