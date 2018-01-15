<!DOCTYPE html>
<html>
<head>
    <title>Formulaire Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--GoogleFonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--slick-->
    <link href="plugins/OwlCarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!--FontAwesome-->
    <script src="https://use.fontawesome.com/548d529be3.js"></script>
    <link href="plugins/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h1 id="enseigne"><small>MINISTÈRE DU BUDGET ET DES COMPTES PUBLICS</small>
            DIRECTION GÉNÉRALE DU BUDGET ET DES FINANCES PUBLIQUES
            <img height="74" class="hidden-xs" src="img/Sceau-du-Gabon_1.png" alt="sceau du gabon">
        </h1>
    </div>
</header>
<div class="container section">
    <div id="main-carousel" class="owl-carousel owl-theme carousel" style="background-image: url('img/dgbfip.jpg'); background-size: cover; background-position: center center">
        <div class="slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
        <div class="slide">Amet consectetur cum debitis dignissimos </div>
        <div class="slide">Dolore est hic mollitia numquam omnis possimus praesentium </div>
        <div class="slide">Quae quis ratione rem sed sint suscipit vel voluptate!</div>
    </div>

    <h2 class="h2">Titre de section</h2>
    <div class="instructions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor eligendi iste laborum quae quo saepe voluptates? Autem beatae consectetur dicta eaque enim, illo iste, molestias omnis, perferendis sint tenetur!</div>

    <div class="row">
        <div class="col-sm-6">
            <div id="formulaire">
                <form action="#">
                    <label class="form-input">
                        <span class="input-label">Nom de l'agent</span>
                        <input type="text" required>
                    </label>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="form-input">
                                <span class="input-label">Matricule</span>
                                <input type="text" required>
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-input">
                                <span class="input-label">Contact</span>
                                <input type="text" required>
                            </label>
                        </div>
                    </div>

                    <label class="form-input">
                        <span class="input-label">Nom de direction</span>
                        <select name="direction" id="direction">
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                            <option value="">Option 4</option>
                        </select>
                    </label>
                    <div class="row">
                        <div class="col-sm-6">
                            <!--<div class="g-recaptcha" data-sitekey="6LfbbyYTAAAAAAAKzkEp7SIBdZHfbTBdneM12k9O"></div>-->
                        </div>
                        <div class="col-sm-6">
                            <button class="submit-button">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="h2">Vous pouvez aussi</div>
            <div class="row text-center">
                <div class="col-md-6">
                    <i class="circle-icon fa fa-phone fa-3x"></i>
                    <div>Nous contacter au <br>01 02 03 04</div>
                </div>
                <div class="col-md-6">
                    <i class="circle-icon fa fa-building fa-2x"></i>
                    <div>Vous présenter au Ministère du Budget et des Finances Publiques, bureau XXX</div></div>
            </div>
        </div>
    </div>

</div>t

<footer>
    <div class="container">
        <ul class="footer_menu">
            <li>&copy; <?php echo date("Y");?> DGBFiP</li>
        </ul>
    </div>
</footer>




<script src="js/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<!--Bootstrap-->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--Slick-->
<script src="plugins/OwlCarousel/owl.carousel.min.js"></script>
<!--ReCaptcha-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--Script-->
<script src="js/script.js"></script>
</body>
</html>