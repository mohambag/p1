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

    <style>
        ul{
            direction: rtl;

        }
        li{
            direction: rtl;
            display: block;
            text-decoration: none;
        }
        h4{
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<!--  Demos -->
<section id="demos">
    <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                <div class="item">
                        <ul>
                            <li>
                                <h4>
                                    دلار
                                </h4>
                                </li>
                            <li>
                                <a style="color: white">{{$total->usd_buy->value}} تومان </a>
                            </li>
                            <li>
                                <a style="color: white"> تغییرات  {{$total->usd_buy->change}} تومان </a>
                            </li>
                            <li>
                                <div style="color: white" class="form-row">آخرین بروزرسانی/
                                    <a  style="color: white;width: 100%">{!! mb_substr(($total->usd_buy->date),0,11,
                                    'UTF-8')
                                    !!}</a>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="item">
                        <ul>
                            <li><h4>یورو</h4></li>
                            <li>
                                <a style="color: white">{{$total->eur->value}} تومان </a>
                            </li>
                            <li>
                                <a style="color: white"> تغییرات  {{$total->eur->change}} تومان </a>
                            </li>
                            <li>
                                <div style="color: white" class="form-row">آخرین بروزرسانی/
                                    <a style="color: white">{!! mb_substr(($total->eur->date),0,11,'UTF-8') !!}</a>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="item">
                        <ul>
                            <li><h4>
                                    درهم امارات
                                </h4></li>
                            <li>
                                <a style="color: white">{{$total->aed_sell->value}} تومان </a>
                            </li>
                            <li>
                                <a style="color: white"> تغییرات  {{$total->aed_sell->change}} تومان </a>
                            </li>
                            <li>
                                <div style="color: white" class="form-row">آخرین بروزرسانی/
                                    <a style="color: white">{!! mb_substr(($total->aed_sell->date),0,11,'UTF-8') !!}</a>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="item">
                        <ul>
                            <li><h4>
                                   سکه امامی
                                </h4></li>
                            <li>
                                <a style="color: white">{{number_format($total->sekkeh->value)}}میلیون تومان </a>
                            </li>
                            <li>
                                <a style="color: white"> تغییرات  {{number_format($total->sekkeh->change)}}میلیون
                                    تومان </a>
                            </li>
                            <li>
                                <div style="color: white" class="form-row">آخرین بروزرسانی/
                                    <a style="color: white">{!! mb_substr(($total->sekkeh->date),0,11,'UTF-8') !!}</a>
                                </div>
                            </li>
                        </ul>
                </div>

            </div>
{{--            <a class="button secondary play">Play</a>--}}
{{--            <a class="button secondary stop">Stop</a>--}}

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
                    // $('.play').on('click', function() {
                    //     owl.trigger('play.owl.autoplay', [1000])
                    // })
                    // $('.stop').on('click', function() {
                    //     owl.trigger('stop.owl.autoplay')
                    // })
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
