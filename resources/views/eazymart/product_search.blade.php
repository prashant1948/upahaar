@extends('layouts.eazyCommon')
@section('content')
<!-- banner-2 -->
{{--<div class="page-head_agile_info_w3l">--}}

{{--</div>--}}
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="/">Home</a>
                    <i>|</i>
                </li>
                <li>Searched Product Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Search Result
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        @if($products)
            <div class="product-sec1">
{{--                <h3 class="heading-tittle">Nuts</h3>--}}
                @foreach ($products as $f)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                @if($f->prev_price)
                                    <span class="product-new-top-discount">Rs. {{$f->prev_price - $f->rate}} Off</span>
                                @else
                                    <span class="product-new-top">New</span>
                                @endif
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}" >{{ Str::limit($f->name, 10) }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        @endif


    </div>
</div>
<!-- //Single Page -->
@endsection
