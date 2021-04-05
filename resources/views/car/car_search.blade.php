@extends('car.layout.master')
@section('content')
    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
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
                    <li>Searched Car Page</li>
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
            @if($cars)
                <div class="product-sec1">
                    {{--                <h3 class="heading-tittle">Nuts</h3>--}}
                    @foreach ($cars as $car)
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="/storage/images/carDetails/{{$car->image}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="company-content">
                                        <h3>{{$car->model}}<span class="full-time">{{$car->category->car_category}}</span></h3>
                                        <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-car"></i> {{$car->description}}</span></p>
                                        {{--                            <span class="package"><i class="fa fa-money"></i>{{$car->model}}</span>--}}
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 pt-2">
                                    @if(!Auth::user())
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                            <input type="submit" name="submit" value="Rent" class="button" />
                                        </div>
                                    @else
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                            <a href="{{ url('/car/add/' . $car->id) }}"><input type="submit" name="submit" value="Rent" class="button" /></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>





            @endif
        </div>
        <!-- //Single Page -->
@endsection
