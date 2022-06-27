<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Homepage</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="{{url('css/navbar.css')}}" />

    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{url('css/tooplate-style.css')}}" />
    <!--
-->
</head>

<body>

<?php
require_once ('../resources/views/navbar.blade.php');
?>

<!-- Video Banner -->
<section class="tm-banner-section" id="tmVideoSection">
    <div class="container tm-banner-text-container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2 class="tm-banner-title">   Het houden van bijen!</h2>
                    <p>
                        De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Kaag en Braassem. De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
                    </p>
                </header>
            </div>
        </div>
    </div>

    <!-- Video -->
    <video id="hero-vid" autoplay="" loop="" muted>
        <source src="{{url('videos/bee.mp4')}}" type="video/mp4" />
    </video>

</section>
<!-- Features -->
<div class="container tm-features-section" id="features">
    <div class="row tm-features-row">
        <section class="col-md-6 col-sm-12 tm-feature-block">
            <header class="tm-feature-header">
                <h3 class="tm-feature-h">Onze activiteiten</h3>
            </header>
            <p>
            <li>het geven van cursussen over het houden van bijen (zie de pagina ‘basiscursus‘)</li>
            <br>
            <li>het organiseren van lezingen op informatieavonden voor de beginnende imkers</li>
            <br>
            </p>
        </section>
        <section class="col-md-6 col-sm-12 tm-feature-block">
            <header class="tm-feature-header">
            </header>
            <p>
            <li>wij stellen beginnende imkers in de gelegenheid om informatie te krijgen van ervaren imkers tijdens informatieavonden en ochtenden, zoals ‘de imkerhoek’</li>
            <br>
            <li>wij versturen  interessante artikelen over het houden van bijen (zie de pagina artikelen)</li>
            </p>
        </section>
    </div>
</div>
<script src="{{('js/jquery-1.9.1.min.js')}}"></script>
<!-- Single Page Nav plugin works with this version of jQuery -->
<script src="{{('js/jquery.singlePageNav.min.js')}}"></script>
<script src="{{('js/bootstrap.min.js')}}"></script>
<script src="{{('js/videos.js')}}"></script>


<?php
require_once ('../resources/views/footer.blade.php');
?>


</body>
</html>
