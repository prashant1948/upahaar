<!Doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Multi Service Application</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Plugin Css -->
    <link rel="stylesheet" href="job/css/plugins.css">

    <!-- Style & Common Css -->
    <link rel="stylesheet" href="job/css/common.css">
    <link rel="stylesheet" href="job/css/main.css">

</head>

<body>
@include('Job.partials.navbar')

@yield('content')

@include('Job.partials.footer')



<script type="text/javascript" src="job/js/jquery.min.js"></script>
<script src="job/js/bootstrap.min.js"></script>
<script type="text/javascript" src="job/js/owl.carousel.min.js"></script>
<script src="job/js/bootsnav.js"></script>
<script src="job/js/main.js"></script>
</body>
</html>
