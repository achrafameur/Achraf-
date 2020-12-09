<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home page </title>
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
</head>


<body>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					<u>INSCRIPTION </u>
				</span>


            <label class="" >Avez vous déja un compte ? </label>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Se connecter
                </button>
            </div>

            <label class="label-input100" ><h2>Vous n'avez pas encore un compte</h2> </label>
            <?php  echo "si vous etes un ouvrier " ?>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Un ouvrier
                </button>
            </div>

            <?php echo "si vous etes un client " ?>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Un client
                </button>
            </div>
        </form>





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
