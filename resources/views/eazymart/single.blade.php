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
<!-- //page -->
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Single Page
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
                    <ul class="slides img-hover-zoom--slowmo">
                        <img src="/storage/images/products/{{$product->image}}" id="currentImage" class="active" width="120px" height="120px"/>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="/storage/Images/products/{{$product->image}}" alt="" class="img-fluid"/>
                </div>
                @foreach($productImg as $product)
                    <div class="product-section-thumbnail selected">
                        <img src="/storage/Images/product_gallery/{{$product->image}}" alt="" class="img-fluid"/>
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
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <input type="submit" name="submit" value="Add to Cart" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" class="button"/>
                </div>
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

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>
@endsection
