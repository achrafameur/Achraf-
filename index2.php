<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <?php
session_start();
if (isset($_SESSION['Prenom'])){
    header("location:index.html");
}


if (isset($_POST['Num']) AND isset($_POST['connexion']) AND isset($_POST['password'])) {
    include "config.php";
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $list = $bdd->query("SELECT `Nom`,`Prenom`,`Cin` FROM `user`");
    while ($val = $list->fetch()) {

    if ($_POST['Num'] == $val['Num'] AND $pwd == $val['Password']){

    $_SESSION['Prenom'] = $val['Prenom'];
    $_SESSION['Num'] = $val['Num'];
    }
    }
    header("location:index.html");

    }
    ?>


</head>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">

            <label class="label-input100" for="first-name">donner votre prénom *</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                <input id="first-name" class="input100" type="text" name="first-name" placeholder="votre prénom">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                <input class="input100" type="text" name="last-name" placeholder="votre nom">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="phone">Entrer votre numéro</label>
            <div class="wrap-input100">
                <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +216 90 000 000">
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn",onclick="inscri();">
                    S'inscrire
                </button>
            </div>
        </form>


        <div id="affichertout"></div>
        <script>
            function inscri(){
                $.ajax({
                    type: "POST",
                    url: "conx.php",
                    cache: false,
                    beforeSend: function() {        $('#affichertout').html('<center><h1>loading please wait...</h1></center>');            },
                    success:  function(retour)    {    $("#affichertout").html(retour);},
                });
            }
        </script>


        <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
            <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Adresse
						</span>

                    <span class="txt2">
							 Akouda , Sousse
						</span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							contacter nous
						</span>

                    <span class="txt3">
							+216 ** *** ***
						</span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Email
						</span>

                    <span class="txt3">
							ex.example@email.com
						</span>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
