
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home - Bellicious Bakery</title>
    <link rel="shortcut icon" href="assets/images/logo/favourite_icon.png">
    <script src="../assets/vendor/bootstrap/dist/css/bootstrap.min.css"></script>

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        .badge-wrapper {
            position: relative;
        }

        .badge {
            position: absolute;
            top: -10px;
            display: inline-block;
            width: auto;
            height: auto;
            border-radius: 40%;
            font-size: 10px;
            background-color: red;
        }
    </style>
</head>
<body>

    @yield("section")
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- fraimwork - jquery include -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- animation - jquery include -->
<script src="assets/js/wow.min.js"></script>

<!-- carousel - jquery include -->
<script src="assets/js/slick.min.js"></script>

<!-- popup - jquery include -->
<script src="assets/js/magnific-popup.min.js"></script>

<!-- isotope filter - jquery include -->
<script src="assets/js/isotope.pkgd.min.js"></script>

<!-- google map - jquery include -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
<script src="assets/js/gmaps.min.js"></script>

<!-- jquery-ui - jquery include -->
<script src="assets/js/jquery-ui.js"></script>

<!-- off canvas sidebar - jquery include -->
<script src="assets/js/mCustomScrollbar.js"></script>

<!-- custom - jquery include -->
<script src="assets/js/main.js"></script>

@include("layouts.script")
</body>
</html>
