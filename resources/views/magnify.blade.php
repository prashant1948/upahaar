<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="keywords" content="Online,Nepal, Let It Grow - Nepal, eCommerce">
    <meta name="robots" content="all">


    {{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">--}}
    <link href="{{asset('eazy/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('eazy/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('eazy/css/font-awesome.css')}}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{asset('eazy/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('eazy/css/magnify.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{asset('eazy/css/jquery-ui1.css')}}">

    <link rel="stylesheet" href="{{asset('css/multi.css')}}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <style>
        body{
            overflow-x: hidden;
        }
    </style>

</head>



<body>

<ul>
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
</ul>
<!-- Created by Rohan Hapani -->
    <div class="zoom-area">

        <!-- It's container of the magnify glass -->
        <div class="large"></div>

        <!-- It's for the small image -->
        <img class="small" src="https://i.ytimg.com/vi/6lt2JfJdGSY/maxresdefault.jpg" width="500" height="500" />

    </div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- jquery -->
<script src="{{asset('eazy/js/jquery-2.1.4.min.js')}}"></script>
{{--    <!-- ALL JS FILES -->--}}
<script src="{{asset('js/popper.min.js')}}"></script>

<!-- //jquery -->
<script src="{{asset('eazy/js/magnify.js')}}"></script>



</body>

</html>
