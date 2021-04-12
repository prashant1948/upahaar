@extends('car.layout.master')
@section('content')


<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Rental Service
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
            </span>
        </h3>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab-home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            @foreach($catList as $menu_item)
                <li role="presentation"><a href="#tab-{{ $menu_item->id }}" aria-controls="home" role="tab" data-toggle="tab">{{ $menu_item->car_category }}</a></li>
            @endforeach
        </ul>

        <div class="tab-content">
            <div id="tab-home" class="tab-pane fade in home">
                <h4 class="pt-3">Explore Variety of Rental Service</h4>
            </div>
            @foreach($cars as $category_id => $item)
            <div id="tab-{{ $category_id }}" class="tab-pane fade in">
{{--                <h3>{{$car->category->car_category}}</h3>--}}
                @foreach($item as $car)
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
                                <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-cog"></i> {{$car->description}}</span></p>
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
                                    <input type="submit" name="submit" value="Rent" class="button" />
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @endforeach


        </div>


        </div>

    </div>



@endsection

<!-- footer start -->

