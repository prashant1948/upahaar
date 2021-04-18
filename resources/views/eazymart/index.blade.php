@extends('layouts.eazyCommon')
@section('content')
    <div class="page-ecommerce_agile_info_w3l">

    </div>

<!-- banner -->
{{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}

{{--    <ol class="carousel-indicators">--}}
{{--    @foreach( $frontEnd as $front )--}}
{{--    <!-- Indicators-->--}}
{{--        <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>--}}
{{--    @endforeach--}}
{{--    </ol>--}}
{{--    <div class="carousel-inner" role="listbox">--}}
{{--        @foreach( $frontEnd as $front )--}}
{{--        <div class="item {{ $loop->first ? ' active' : '' }}" style="background-image: url('{{ ('/storage/images/slider/' . $front->image) }}')">--}}
{{--            <div class="container">--}}
{{--                <div class="carousel-caption">--}}
{{--                    <h3><span>{{$front->heading}}</span></h3>--}}
{{--                    <p><span>{{$front->message}}</span></p>--}}
{{--                    <a class="button2" href="product.html">Shop Now </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">--}}
{{--        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">--}}
{{--        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}

{{--</div>--}}
<!-- //banner -->


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    {{--                    <span class="fa fa-envelope-o" aria-hidden="true"></span>--}}
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Added to Cart </h3>
                    <div class="row justify-content-center">
                        <h3 class="agileinfo_sign"><button class="btn btn-success"><a href="/checkoutMart" style="text-decoration: none;color:white">View Cart Details</a></button></h3>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal4 -->
<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Our Top Products
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <!-- product left -->

        <!-- //product left -->
        <!-- product right -->

        <div class="agileinfo-ads-display col-md-12">
            <div class="wrapper">
                <!-- first section (nuts) -->
                @if($nuts)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Nuts</h3>
                    @foreach ($nuts as $f)
                    <div class="col-md-2 col-2 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <a href="/singleMart/{{$f->id}}"><img alt="" src="/storage/images/products/{{$f->image}}"/></a>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        @if(!Auth::user())
                                            <a class="link-product-add-cart" data-toggle="modal" data-target="#myModal1">Buy Now</a>
                                        @else
                                            <a href="{{ url('buyNow/' . $f->id) }}" class="link-product-add-cart">Buy Now</a>
                                        @endif
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>

                            <div class="item-info-product">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}" >{{ Str::limit($f->name, 10) }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                @if(!Auth::user())
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                        <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                    </div>
                                @else
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                        <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //first section (nuts) -->
                <!-- second section (nuts special) -->
                <div class="product-sec1 product-sec2">
                    <div class="col-xs-7 effect-bg">
                        <h3 class="">Pure Energy</h3>
                        <h6>Enjoy our all healthy Products</h6>
                        <p>Get Extra 10% Off</p>
                    </div>

                    <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>

                    <div class="col-xs-5 bg-right-nut">
                        <img src="{{asset('eazy/images/nut1.png')}}" alt="">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //second section (nuts special) -->
                <!-- third section (oils) -->
                @if($oil)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Oils</h3>
                    @foreach ($oil as $f)
                    <div class="col-md-2 col-2 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            @if(!Auth::user())
                                                <a class="link-product-add-cart" data-toggle="modal" data-target="#myModal1">Buy Now</a>
                                            @else
                                                <a href="{{ url('buyNow/' . $f->id) }}" class="link-product-add-cart">Buy Now</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                </h4>

                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                @if(!Auth::user())
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                                @else
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //third section (oils) -->
                <!-- fourth section (noodles) -->
                @if($bakery)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Bakery</h3>
                    @foreach ($bakery as $f)

                            <div class="col-md-2 col-2 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    @if(!Auth::user())
                                                        <a class="link-product-add-cart" data-toggle="modal" data-id="{{$f->id}}" data-target="#myModal1">Buy Now</a>
                                                    @else
                                                        <a href="{{ url('buyNow/' . $f->id) }}" class="link-product-add-cart">Buy Now</a>
                                                    @endif
                                                </div>
                                            </div>m
                                        </div>
                                    </div>
                                    <div class="item-info-product ">
                                        <h4>
                                            <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">Rs.{{$f->rate}}</span>
                                            <del>Rs.{{$f->prev_price}}</del>
                                        </div>
                                        @if(!Auth::user())
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                                <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                            </div>
                                        @else
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                                <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>

                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //fourth section (noodles) -->
            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->
<!-- special offers -->
@if($top_sales)
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Top Sales
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                @foreach ($top_sales as $f)
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="/singleMart/{{$f->id}}">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>Rs.{{$f->rate}}</h6>
                                <p>Save {{$f->discount}} %</p>
                            </div>
                            @if(!Auth::user())
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                            @else
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<!-- //special offers -->

@endsection
