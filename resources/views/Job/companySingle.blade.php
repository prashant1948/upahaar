@extends('Job.layout.master')
@section('content')

    <div class="page-head_agile_info_w3l" style="overflow: hidden;">
        <div class="row" style="height:20vh;">
            <div class="col-lg-2 col-md-2 col-12">
                <img src="/storage/images/jobCompanyLogo/{{$company->logo}}"/>
            </div>
            <div class="col-lg-4 col-12">
                <h3>{{$company->name}}</h3>
            </div>
        </div>
    </div>
    <!-- page -->

    <!-- //page -->
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Company Information
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->

            <div class="col-md-12 single-right-left simpleCart_shelfItem">
                <h3>{{$company->name}}</h3>
                <p><i class="fa fa-location-arrow"></i>{{$company->address}}<p>

                {{--                <div class="availability"><label>Availability:</label>--}}
                {{--                    @if ($product->quantity>0)--}}
                {{--                        <span class="available">  in stock</span>--}}
                {{--                    @else--}}
                {{--                        <span class="not-available">  Out of Stock</span>--}}
                {{--                    @endif--}}
                {{--                </div>--}}
{{--                <p>--}}
{{--                    <span class="color:green">Posted At: {{$job->posted_date}}</span>--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <span class="color:red">Apply Before: {{$job->apply_before}}</span>--}}
{{--                </p>--}}

                <div class="product-single-w3l">
                    <p>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <label>Description</label>
                    <ul>
                        <li>
                            {{$company->description}}
                        </li>
                        <li>
                            <i class="fa fa-envelope-square"></i> {{$company->email}}
                        </li>
                    </ul>

                </div>
{{--                                <div class="occasion-cart">--}}
{{--                --}}{{----}}{{--                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                --}}{{--                        <input type="submit" name="submit" value="Add to Cart" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" class="button"/>--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                </div>--}}
{{--            </div>--}}
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


