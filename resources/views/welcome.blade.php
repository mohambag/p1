<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }


        .min-h-screen {
            min-height: 100vh
        }


        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }


        .relative {
            position: relative
        }


        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }


        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:pt-0 {
                padding-top: 0
            }


        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }


    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .col-md-4 > ul > li {
            font-size: 14pt;
        }

        .col-md-6 > ul > li {
            font-size: 16pt;
        }

        .border {
            border: 1px solid gray;
            border-radius: 7px;
            padding: 10px 10px;
        }
    </style>
</head>
<body class="antialiased" style="direction: rtl;text-align: center">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
<div class="container">




    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2 border">
                <div class="form-row">آخرین بروزرسانی/
                    <a>{!! mb_substr(($total->usd_buy->date),0,11,'UTF-8') !!}</a>
                </div>

                <div class="form-row">دلار
                    <a>{{$total->usd_buy->value}}/({{$total->usd_buy->change}} )</a>
                    @if($total->usd_buy->change > 0)

                        <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>
                    @elseif($total->usd_buy->change < 0)
                        <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>
                    @endif
                </div>
                <div class="form-row">یورو
                    <a>{{$total->eur->value}}/({{$total->eur->change}} )</a>
                    @if($total->eur->change > 0)
                        <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>
                    @elseif($total->eur->change < 0)
                        <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>
                    @endif
                </div>
                <div class="form-row">درهم امارات
                    <a>{{$total->aed_sell->value}}/({{$total->aed_sell->change}} )</a>
                    @if($total->aed_sell->change > 0)
                        <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>
                    @elseif($total->aed_sell->change < 0)
                        <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>
                    @endif
                </div>
                   </div>
    </div>

    <div class="col-md-5 border">
        <div class="form-row">
{{--            <div class="col-md-6">دلار--}}
{{--                <a>{{$dol['p']}}/({{$dol['dp']}}%)</a>--}}
{{--                @if($dol['dt']=="high")--}}
{{--                    <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--                @elseif($dol['dt']=="low")--}}
{{--                    <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="col-md-6">یورو--}}
{{--                <a>{{$eur['p']}} / ({{$eur['dp']}}%) </a>--}}
{{--                @if($eur['dt']=="high")--}}
{{--                    <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--                @elseif($eur['dt']=="low")--}}
{{--                    <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>
        <div class="form-row">
            <div class="col-md-6">
                درهم
{{--                <a>{{$der['p']}} / ({{$der['dp']}}%)</a>--}}
{{--                @if($der['dt']=="high")--}}
{{--                    <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--                @elseif($der['dt']=="low")--}}
{{--                    <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--                @endif--}}
            </div>
        </div>
    </div>

{{--    <div class="d-flex flex-row-reverse" style="position: fixed;bottom: 0">--}}

{{--        <div class="p-2 border">آخرین بروز رسانی--}}
{{--            <a>{!! mb_substr(($dol['t']),0,5,'UTF-8') !!}</a>--}}
{{--        </div>--}}

{{--        <div class="p-2 border">--}}
{{--            دلار--}}
{{--            <a>{{$dol['p']}}/({{$dol['dp']}}%)</a>--}}
{{--            @if($dol['dt']=="high")--}}
{{--                <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--            @elseif($dol['dt']=="low")--}}
{{--                <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="p-2 border">--}}
{{--            یورو--}}
{{--            <a>{{$eur['p']}} / ({{$eur['dp']}}%) </a>--}}
{{--            @if($eur['dt']=="high")--}}
{{--                <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--            @elseif($eur['dt']=="low")--}}
{{--                <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="p-2 border">     درهم--}}
{{--            <a>{{$der['p']}} / ({{$der['dp']}}%)</a>--}}
{{--            @if($der['dt']=="high")--}}
{{--                <i class='fas fa-angle-up' style='font-size:24px;color: green'></i>--}}
{{--            @elseif($der['dt']=="low")--}}
{{--                <i class='fas fa-angle-down' style='font-size:24px;color:red'></i>--}}
{{--            @endif</div>--}}
{{--    </div>--}}
</div>
</div>


</body>
<script>
    window.setTimeout(function () {
        window.location.reload();
    }, 3600000);
</script>

</html>
