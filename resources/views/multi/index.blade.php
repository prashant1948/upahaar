@extends('multiservice')
@section('content')
@if($banner)
    @if($banner->section == "ecommerce")
        <a href="/ecommerce"><section class="hero" id="section1" style="background-image: url('{{ ('/storage/images/banner/' . $banner->banner1) }}')">
                <p><span class="badge badge-danger notify-badge">{{$banner->discount1}}</span></p>
                {{--            <div class="sign">--}}
                {{--                <span class="fast-flicker">M</span>ulti<span class="flicker">service</span>Application--}}
                {{--            </div>--}}
                {{--            <h1>Multi Service Application</h1>--}}

            </section>
        </a>
    @elseif($banner->section == "job")
        <a href="/indexJob"><section class="hero" id="section1" style="background-image: url('{{ ('/storage/images/banner/' . $banner->banner1) }}')">
                <p><span class="badge badge-danger notify-badge">{{$banner->discount1}}</span></p>
                {{--            <div class="sign">--}}
                {{--                <span class="fast-flicker">M</span>ulti<span class="flicker">service</span>Application--}}
                {{--            </div>--}}
                {{--            <h1>Multi Service Application</h1>--}}

            </section>
        </a>

    @else
        <a href="/indexCar"><section class="hero" id="section1" style="background-image: url('{{ ('/storage/images/banner/' . $banner->banner1) }}')">
                <p><span class="badge badge-danger notify-badge">{{$banner->discount1}}</span></p>
                {{--            <div class="sign">--}}
                {{--                <span class="fast-flicker">M</span>ulti<span class="flicker">service</span>Application--}}
                {{--            </div>--}}
                {{--            <h1>Multi Service Application</h1>--}}

            </section>
        </a>
    @endif
@endif


<section class="header-product content1 pt-5" id="section2">
    <div class="container headings text-center pt-5">
        <h1 class="font-weight-bold text-center">Our Services</h1>
        <div class="row">
            {{--                    @foreach ($products as $product)--}}
            <div class="product-cards col-lg-4 col-md-4 col-12">
                <a href="/ecommerce">
                    <div class="card">
                        <div class="overlay">
                            <img src="{{asset('images/ecommerce.png')}}"/>
                            <h2>Ecommerce</h2>
                            <p>We provide you with the best product. We assure you the quality.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                 data-wow-delay="1.5s">
                <a href="{{route('job.index')}}">
                    <div class="card">
                        <div class="overlay">
                            <img src="{{asset('images/job.png')}}"/>
                            <h2>Job Portal</h2>
                            <p>We provide you with the best product. We assure you the quality.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                 data-wow-delay="1.5s">
                <a href="{{route('car.index')}}">
                    <div class="card">
                        <div class="overlay">
                            <img src="{{asset('images/car.png')}}"/>
                            <h2>Rental Service</h2>
                            <p>We provide you with the best product. We assure you the quality.</p>
                        </div>
                    </div>
                </a>
            </div>
            {{--                    @endforeach--}}
        </div>
    </div>
</section>
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
                                    <div class="men-thumb-item">
                                        <a href="/singleMart/{{$f->id}}">
                                            <img alt="" src="/storage/images/products/{{$f->image}}" style="width:80px;height:80px"/>
                                        </a>

                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                @if(!Auth::user())
                                                    <a class="link-product-add-cart" data-toggle="modal" data-target="#myModal1">Buy Now</a>
                                                @else
                                                    <a href="{{ url('buyNow/' . $f->id) }}" class="link-product-add-cart">Buy Now</a>
                                                @endif
                                                {{--                                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-name-w3l">
                                    <h4>
                                        <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                    </h4>
                                    <div class="w3l-pricehkj">
                                        <h6>Rs.{{$f->rate}}</h6>
                                        @if($f->discount)
                                        <span class="badge badge-danger">Save {{$f->discount}} %</span>
                                        @else
                                            <span class="badge badge-success">New</span>
                                        @endif
                                    </div>
                                    @if(!Auth::user())
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                            <a href="/ecommerce"><input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" /></a>
                                        </div>
                                    @else
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                            <a href="/ecommerce"><input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" /></a>
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
<div class="ads-grid">
    <div class="container">
        <h3 class="tittle-w3l">Latest Jobs
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="companies">
            @foreach($jobs as $job)
                <div class="company-list">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-12">
                            <div class="company-logo p-3">
                                <img src="/storage/images/jobCompanyLogo/{{$job->logo}}" class="img-responsive" alt=""/>
                            </div>

                        </div>
                        <div class="col-md-8 col-sm-8 col-12">
                            <div class="company-content">
                                <span class="label label-success">{{$job->job_type}}</span>
                                <h3>{{$job->name}}</h3>
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$job->company_name}}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{$job->company_address}}</span><span class="package"><i class="fa fa-money"></i>{{$job->salary}}</span></p>

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-12">
                            @if(!Auth::user())
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal" data-target="#myModal1">
                                    <a href="/indexJob"><input type="submit" name="submit" value="Apply" class="button"/></a>
                                </div>

                            @else
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal" data-target="#myModal4">
                                    <a href="/indexJob"><input type="submit" name="submit" value="Apply" class="button"/></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
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
            <div class="companies">
                @foreach($cars as $car)
                    <div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo p-3">
                                    <img src="/storage/images/carDetails/{{$car->image}}" class="img-responsive" alt=""  />
                                </div>

                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="company-content">
                                    <span class="label label-success">{{$car->category->car_category}}</span>
                                    <h3>{{$car->model}}</h3>
                                    <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-cog"></i> {{$car->description}}</span></p>
                                    {{--                            <span class="package"><i class="fa fa-money"></i>{{$car->model}}</span>--}}
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 pt-2">
                                @if(!Auth::user())
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal">
                                        <a href="/indexCar"><input type="submit" name="submit" value="Rent" class="button" /></a>
                                    </div>

                                @else
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal">
                                        <a href="/indexCar"><input type="submit" name="submit" value="Rent" class="button" /></a>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<section class="header-product content2" id="section3">
    <div class="container headings text-center">
        <h1 class="font-weight-bold text-center">Contact Us</h1>
        <div class="col-lg-12 col-md-12 col-12 pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Email: info@letitgrownepal.com</h6>
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Address: Pulchowk, Lalitpur</h6>
                    <i class="fa fa-home"></i>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Phone Number: 01-5901614</h6>
                    <i class="fa fa-phone"></i>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
