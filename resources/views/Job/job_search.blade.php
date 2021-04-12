@extends('Job.layout.master')
@section('content')
    <!-- banner-2 -->
{{--    <div class="page-head_agile_info_w3l">--}}

{{--    </div>--}}
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
                    <li>Searched Job Page</li>
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
            @if($jobs)
                <div class="product-sec1">
                    {{--                <h3 class="heading-tittle">Nuts</h3>--}}
                    @foreach ($jobs as $job)
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="/storage/images/jobCompanyLogo/{{$job->logo}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="company-content">
                                        <h3>{{$job->name}}<span class="full-time">{{$job->job_type}}</span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$job->company_name}}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{$job->company_address}}</span><span class="package"><i class="fa fa-money"></i>{{$job->salary}}</span></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 pt-2">
                                    @if(!Auth::user())
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                            <input type="submit" name="submit" value="Apply" class="button"/>
                                        </div>
                                    @else
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                            <a href="{{ url('/job/add/' . $job->id) }}"><input type="submit" name="submit" value="Apply" class="button"/></a>
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
