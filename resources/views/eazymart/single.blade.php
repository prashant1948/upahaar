@extends('layouts.eazyCommon')
@section('content')
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
{{--            <ul class="w3_short">--}}
{{--                <li>--}}
{{--                    <a href="index.html">Home</a>--}}
{{--                    <i>|</i>--}}
{{--                </li>--}}
{{--                <li>Single Product Page</li>--}}
{{--            </ul>--}}
        </div>
    </div>
</div>
{{--<div class="page-ecommerce_agile_info_w3l">--}}

{{--</div>--}}
<!-- //page -->
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Products
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <ul class="slides">
                        <div class="zoom-area">
                                <div class="large"></div>
                            <img src="/storage/images/products/{{$product->image}}" id="currentImage" class="active small" width="200px" height="200px"/>
                        </div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="/storage/images/products/{{$product->image}}" alt="" class="img-fluid"/>
                </div>
                @foreach($productImg as $product)
                    <div class="product-section-thumbnail selected">
                        <img src="/storage/images/product_gallery/{{$product->image}}" alt="" class="img-fluid"/>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>{{$product->name}}</h3>
            <p>{{$product->brand}}<p>

            <div class="availability"><label>Availability:</label>
                @if ($product->quantity>0)
                    <span class="available">  in stock</span>
                @else
                    <span class="not-available">  Out of Stock</span>
                @endif
            </div>
            <p>
                <span class="item_price">Rs.{{$product->rate}}</span>
                <del>Rs.{{$product->prev_price}}</del>
            </p>

            <div class="product-single-w3l">
                <p>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                    <label>Description</label>
                <ul>
                    <li>
                        {{$product->description}}
                    </li>

                </ul>
                <p>
                    <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                    <label>non-returnable.</label>
                </p>
            </div>
            <div class="occasion-cart">
                @if(!Auth::user())
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                        <input type="submit" name="submit" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                    </div>
                @else
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                        <input type="submit" name="submit" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                    </div>
                @endif
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //Single Page -->
@endsection
{{--javascript for showing image and change image to zoom on click--}}
@section('javascript')
    <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click',thumbnailClick));

            function thumbnailClick(e){
                currentImage.src = this.querySelector('img').src;

                currentImage.classList.remove('active');


                currentImage.addEventListener('transitioned',() => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');

                })

                $(".large").css("background","url('" + currentImage.src + "') no-repeat");

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>
@endsection
