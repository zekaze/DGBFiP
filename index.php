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
<div class="container">
    <div id="main-carousel" class="owl-carousel owl-theme carousel">
        <div class="slide"><span class="id">1</span></div>
        <div class="slide"><span class="id">2</span></div>
        <div class="slide"><span class="id">3</span></div>
        <div class="slide"><span class="id">4</span></div>
        <div class="slide"><span class="id">5</span></div>
    </div>
</div>


<div class="container">
    <div id="instructions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor eligendi iste laborum quae quo saepe voluptates? Autem beatae consectetur dicta eaque enim, illo iste, molestias omnis, perferendis sint tenetur!</div>

    <div id="formulaire">
        <form action="#">
            <label class="form-input">
                <span class="input-label">Nom</span>
                <input type="text" required>
            </label>

            <label class="form-input">
                <span class="input-label">Numero de ligne administrative</span>
                <input type="text" required>
            </label>

            <label class="form-input">
                <span class="input-label">Numero de téléphone personnel</span>
                <input type="text" required>
            </label>

            <label class="form-input">
                <span class="input-label">Nom de direction</span>
                <select name="direction" id="direction">
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                    <option value="">Option 4</option>
                </select>
            </label>

            <button class="submit-button">Soumettre</button>
        </form>
    </div>
</div>




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