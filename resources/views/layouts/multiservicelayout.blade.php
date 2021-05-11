<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <title>Upahaar Solutions</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="keywords" content="Online,Nepal, Let It Grow - Nepal, eCommerce">
    <meta name="robots" content="all">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel/owl.carousel.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo1.min.css')}}">

    <style>
        body:not(.modal-open){
            padding-right: 0 !important;
        }
    </style>
       <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = "{{asset('js/webfont.js')}}";
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-195287497-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-195287497-1');
    </script>

</head>

<body>

    <div class="page-wrapper">
        @include('inc.navbar_multi')
        <div class="page-header" style="background-image: url('http://upahaarsolution.com/images/banner-shop.jpg'); background-color: #3C63A4;">
				<h1 class="page-title">Upahaar Shop</h1>
        </div>
        <div class="page-content mb-10 pb-3 pt-4">
            <div class="container">
                                <div class="row">
                                
                                    <div class="col-lg-12 mb-4">
                                        <div class="tab tab-vertical tab-simple">
                                            <ul class="nav nav-tabs product-categories mt-3" role="tablist">
                                                <li class="nav-item">
                                                    <h3>All Categories</h3>
                                                </li>

                                                                                        
                                                @foreach($products_list->unique('dept_id') as $product_list)
                                                    <li class="nav-item">
                                                    @if(!Auth::user())
                                                        <a href="/loginn" class="login-link nav-bar"
                                                        data-toggle="modal" data-toggle="#login-modal">
                                                        {{$product_list->department_name}}</a>
                                                    @else
                                                    <a class="nav-link"
                                                        href="/ecommercelist/{!! $product_list->dept_id !!}">
                                                        {{$product_list->department_name}}</a>   
                                                        @endif
                                                     </li>
                                                @endforeach

                                            </ul>
                                    

                                                                <div class="tab-content">

                                                                    <div class="tab-pane active">
                                                                    <div class="row cols-2 cols-sm-3 product-wrapper">

                                                            @foreach ($productsall as $fp)
                                                                <div class="product-wrap">
                                                                    <div class="product product-outer-layer">
                                                                        <figure class="product-media">
                                                                            <a href="/productDetails/{{$fp->id}}" class="product-list-shop">
                                                                                <img src="/storage/images/products/{{$fp->image}}" alt="product" width="280" height="315">
                                                                            </a>
                                                                            <div class="product-label-group">
                                                                                @if($fp->discount)
                                                                                <label class="product-label label-sale">Save {{$fp->discount}} %</label>
                                                                                @else
                                                                                <label class="product-label label-new">new</label>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-action-vertical">
                                                                            @if(!Auth::user())
                                                                            <a href="loginn" class="login-link btn-product-icon"
                                                                            data-toggle="modal" data-toggle="#login-modal" title="Add to cart"><i
                                                                                        class="d-icon-bag"></i></a>

                                                                            @else
                                                                                <a class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal"
                                                                                type="submit" name="submit" title="Add to cart" 
                                                                                onclick="addToCart({{$fp->id}}, '<?php echo csrf_token() ?>')" href="#">
                                                                                <i
                                                                                        class="d-icon-bag"></i>
                                                                                        </a>
                                                                            @endif
                                                                            </div>
                                                                            <div class="product-action">
                                                                                @if(!Auth::user())
                                                                                    <a href="loginn"
                                                                                        data-toggle="modal" data-toggle="#login-modal"
                                                                                    class="login-link btn-product" title="Buy Now">Buy Now</a>
                                                                                @else
                                                                                    @if ($fp->quantity>0)
                                                                                    <a href="{{ url('checkedoutBuy/' . $fp->id . '/' . 1) }}"
                                                                                        class="btn-product" title="Buy Now">Buy Now</a>
                                                                                    
                                                                                    @else
                                                                                    <a href="qtydown" data-toggle="modal" data-toggle="#login-modal"
                                                                                        class="notification-link btn-product" title="Buy Now">Buy Now</a>
                                                                                        @endif

                                                                                @endif
                                                                            </div>
                                                                        </figure>
                                                                        <div class="product-details product-details-bg">
                                                                        @if(!Auth::user())
                                                                        <h3 class="product-name">
                                                                                    <a href="loginn" data-toggle="modal"
                                                                                    data-toggle="#login-modal" class="login-link">{{ $fp->name }}</a>
                                                                            </h3>
                                                                            @else
                                                                            <h3 class="product-name">
                                                                                    <a href="/productDetails/{{$fp->id}}">{{ $fp->name }}</a>
                                                                            </h3>
                                                                            @endif
                                                                            <div class="product-price">
                                                                                <ins class="new-price">Rs.{{$fp->rate}}</ins>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
   

    @include('eazymart.partials.footer')

    <!-- Plugins JS File -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('vendor/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
    <!-- <script>
        if (sessionStorage.getItem('productIdToAdd')){
            addToCart(sessionStorage.getItem('productIdToAdd'), '<?php echo csrf_token() ?>');
            sessionStorage.removeItem("productIdToAdd");
        }
    </script> -->

</body>
</html>
