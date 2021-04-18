@extends('multiservice')
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
                    <a href="/indexMart">Home</a>
                    <i>|</i>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- about page -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{$about->heading}}
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="w3l-welcome-text">
            <p><p>{{$about->message}}</p>
        </div>
    </div>
</div>
<!-- //welcome -->

<!-- //about page -->

@endsection

