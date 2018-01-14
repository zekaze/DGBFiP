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
    <div id="main-carousel" class="owl-carousel owl-theme carousel">
        <div class="slide"><span class="id">1</span></div>
        <div class="slide"><span class="id">2</span></div>
        <div class="slide"><span class="id">3</span></div>
        <div class="slide"><span class="id">4</span></div>
        <div class="slide"><span class="id">5</span></div>
    </div>

    <h2 class="h2">Titre de section</h2>
    <div id="instructions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor eligendi iste laborum quae quo saepe voluptates? Autem beatae consectetur dicta eaque enim, illo iste, molestias omnis, perferendis sint tenetur!</div>

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

            <button class="submit-button">Envoyer</button>
        </form>
    </div>
</div>

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
<!--Script-->
<script src="js/script.js"></script>
</body>
</html>