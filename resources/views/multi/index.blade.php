@extends('multiservice')
@section('content')


@if($banner)

<section class="intro-section bg-additional pb-7">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">
                    @if($banner->section == "ecommerce")

                        <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                            <figure>
                                <img src="{{ ('/storage/images/banner/' . $banner->banner1) }}" alt="intro-banner" width="1903"
                                    height="630" style="background-color: #34ace5;" />
                            </figure>
                           
                        </div>
                    @endif

                    </div>

                    <div class="container mt-6 appear-animate">
                        <div class="service-list">
                            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 5000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                                <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                    <i class="icon-box-icon d-icon-truck"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Free Shipping &amp;
                                            Return
                                        </h4>
                                        <p class="ls-s lh-1">Free shipping on orders over Rs 1 Lakh</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                    <i class="icon-box-icon d-icon-service"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                                        </h4>
                                        <p class="ls-s lh-1">Instant access to perfect support</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                    <i class="icon-box-icon d-icon-secure"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                                        </h4>
                                        <p class="ls-s lh-1">We ensure secure payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endif

<section class="pt-10 mt-7 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }" id="section2">
                    <div class="container">
                        <h2 class="title title-center mb-5">Our Categories</h2>
                        <div class="row">
                            <div class="col-xs-6 col-lg-4 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="/ecommerce">
                                        <figure class="category-media">
                                            <img src="{{asset('images/ecommercebanner.jpg')}}" alt="category" width="380" height="247"/>
                                        </figure>
                                    </a>
                                    <a class="category-content" href="/ecommerce">
                                        <h4 class="category-name font-weight-bold ls-l">
                                        E-Commerce</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-4 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="{{route('job.index')}}">
                                        <figure class="category-media">
                                            <img src="{{asset('images/job.png')}}" alt="category" width="280"
                                                height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name font-weight-bold ls-l"><a
                                                href="{{route('job.index')}}">Job Portal</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-4 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="{{route('car.index')}}">
                                        <figure class="category-media">
                                            <img src="{{asset('images/car.png')}}" alt="category" width="280"
                                                height="280" style="background-color: #ececef;" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name font-weight-bold ls-l"><a href="{{route('car.index')}}">
                                            Rental Service</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

@if($top_sales)
<section class="bg-additional">
    <div class="product-wrapper container appear-animate mt-6 mt-md-10 pt-4 pb-8"
                 data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title title-center mb-5 pt-10">Top Sales</h2>
                    <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                        @foreach ($top_sales as $f)
                            <div class="product text-center">
                                <figure class="product-media">

                                    <a href="/singleMart/{{$f->id}}" class="top-sales">
                                        <img src="/storage/images/products/{{$f->image}}" alt="{{ Str::limit($f->name, 20) }}"
                                            width="280" height="315" style="background-color: #f2f3f5;" />
                                    </a>
                                
                                    <div class="product-label-group">

                                        @if($f->discount)
                                        <span class="product-label label-sale">{{$f->discount}} % off</span>
                                        @else
                                        <label class="product-label label-new">new</label>
                                        @endif

                                    </div>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Add to Cart</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                    <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">Rs.{{$f->rate}}</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 12 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
    </div>
</section>
@endif

@if($jobs)

<section class="product-wrapper container mt-10 pt-4 pb-8">
                    <div class="container">
                        <h2 class="title title-center">Latest Jobs</h2>
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-md-2 cols-1" data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'loop': false,
                            'nav': false,   
                            'dots': true,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                        @foreach($jobs as $job)

                        <div class="post post-mask gradient">
                                <figure class="post-media overlay-zoom">
                                    <a href="/singleJobCompany/{{$job->company_id}}">
                                        <img src="/storage/images/jobCompanyLogo/{{$job->logo}}" width="380" height="280" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                         <a href="#" class="post-date">{{$job->job_type}}</a>
                                        | <a href="#" class="post-comment">{{$job->name}}</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">{{$job->company_name}}</a>
                                    </h4>
                                    @if(!Auth::user())

                                    <a href="/singleJob/{{$job->id}}" class="btn btn-link btn-underline btn-white">Apply<i
                                            class="d-icon-arrow-right"></i></a>

                                            @else

                                            <a href="/singleJob/{{$job->id}}" class="btn btn-link btn-underline btn-white">Apply<i
                                            class="d-icon-arrow-right"></i></a>
                                    @endif
                                </div>
                            </div>
                        
                        @endforeach

                        </div>
                    </div>
</section>
@endif

@if($cars)
<section class="pt-10 pb-10 grey-section">
                    <div class="container mt-4">
                        <h2 class="title title-center">Latest Rental Service</h2>
                        <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">

                        @foreach($cars as $car)

                            <div class="blog-post">
                                <article class="post post-frame">
                                    <figure class="post-media recent-service">
                                            <img src="/storage/images/carDetails/{{$car->image}}" alt="Blog post" width="340"
                                                height="206" />
                                        <div class="post-calendar">
                                            <span class="post-day">{{$car->category->car_category}}</span>
                                        </div>
                                    </figure>
                                    <div class="post-details post-icon">
                                        <h4 class="post-title"><i class="fa fa-chair"></i>{{$car->seats}} Seater</h4>
                                        <p class="post-content"><i class="fa fa-archive"></i>{{$car->description}}</p>
                                        @if(!Auth::user())

                                        <a href="/indexCar" class="btn btn-primary btn-link btn-underline">Apply<i class="d-icon-arrow-right"></i></a>
                                  
                                        @else

                                        <a href="/indexCar" class="btn btn-primary btn-link btn-underline">Apply<i class="d-icon-arrow-right"></i></a>

                                        @endif
                                    </div>
                                </article>
                            </div>

                        @endforeach
                        </div>
                    </div>
</section>
@endif

@endsection
