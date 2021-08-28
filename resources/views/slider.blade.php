<!DOCTYPE html>
<html lang="en">
<head>

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Autoplay usage demo">
    <meta name="author" content="David Deutsch">
    <title>
        Autoplay
    </title>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href={{url("assets/css/docs.theme.min.css")}}>

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href={{url("assets/owlcarousel/assets/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{url("assets/owlcarousel/assets/owl.theme.default.min.css")}}>

    <!-- javascript -->
    <script src={{url("assets/vendors/jquery.min.js")}}></script>
    <script src={{url("assets/owlcarousel/owl.carousel.js")}}></script>

</head>
<body>

<!--  Demos -->
<section id="demos">
    <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h4>1</h4>
                </div>
                <div class="item">
                    <h4>2</h4>
                </div>
                <div class="item">
                    <h4>3</h4>
                </div>
                <div class="item">
                    <h4>4</h4>
                </div>
                <div class="item">
                    <h4>5</h4>
                </div>
                <div class="item">
                    <h4>6</h4>
                </div>
                <div class="item">
                    <h4>7</h4>
                </div>
                <div class="item">
                    <h4>8</h4>
                </div>
                <div class="item">
                    <h4>9</h4>
                </div>
                <div class="item">
                    <h4>10</h4>
                </div>
                <div class="item">
                    <h4>11</h4>
                </div>
                <div class="item">
                    <h4>12</h4>
                </div>
            </div>
            <a class="button secondary play">Play</a>
            <a class="button secondary stop">Stop</a>

            <script>
                $(document).ready(function() {
                    var owl = $('.owl-carousel');
                    navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
                        owl.owlCarousel({
                        items: 4,
                        loop: true,
                        margin: 15,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,
                            nav:true,
                            dots: true
                    });
                    $('.play').on('click', function() {
                        owl.trigger('play.owl.autoplay', [1000])
                    })
                    $('.stop').on('click', function() {
                        owl.trigger('stop.owl.autoplay')
                    })
                })
            </script>
        </div>
    </div>
</section>



<!-- vendors -->
<script src={{url('assets/vendors/highlight.js')}}></script>
<script src={{url('assets/js/app.js')}}></script>
</body>
</html>
