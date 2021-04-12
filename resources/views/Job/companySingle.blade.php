@extends('Job.layout.master')
@section('content')

    <div class="page-head_agile_info_w3l" style="overflow: hidden;">
        <div class="row" style="height:15vh;">
            <div class="col-lg-2 col-md-2 col-12">
                <img src="/storage/images/jobCompanyLogo/{{$company->logo}}"/>
            </div>
            <div class="col-lg-4 col-12">
                <h3>{{$company->name}}</h3>
                <h5><i class="fa fa-location-arrow"></i>{{$company->address}}</h5>
                <h5><i class="fa fa-envelope-square"></i> {{$company->email}}</h5>
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
                <p>{{$company->description}}</p>
                <div class="companies">
                    @foreach($jobs as $job)
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <a href="/singleJobCompany/{{$job->company_id}}"><img src="/storage/images/jobCompanyLogo/{{$job->logo}}" class="img-responsive" alt=""/></a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="company-content">
                                        <a href="/singleJob/{{$job->id}}"><h3>{{$job->name}}<span class="full-time">{{$job->job_type}}</span></h3></a>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$job->company_name}}</span><span class="package"><i class="fa fa-money"></i>{{$job->salary}}</span></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 pt-2">
                                    @if(!Auth::user())
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                            <input type="submit" name="submit" value="Apply" class="button"/>
                                        </div>
                                    @else
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                            <input type="submit" name="submit" value="Apply" class="button"/>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Single Page -->
@endsection



