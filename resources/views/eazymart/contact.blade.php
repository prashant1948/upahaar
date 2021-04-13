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
            <ul class="w3_short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- contact page -->
<div class="contact-w3l">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Contact Us
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <!-- contact -->
        <div class="contact agileits">
            <div class="contact-agileinfo">
                <div class="contact-form wthree">
                    <form action="{{route('contact.store')}}" id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post">
                        @csrf
                        <div class="">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="">
                            <input class="text" type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="">
                            <input class="email" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="">
                            <textarea placeholder="Message" name="message" required></textarea>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="contact-right wthree">
                    <div class="col-xs-7 contact-text w3-agileits">
                        <h4>GET IN TOUCH :</h4>
                        <p>
                            <i class="fa fa-map-marker"></i> Manamaiju, Balaju, Nepal.</p>
                        <p>
                            <i class="fa fa-phone"></i> Telephone : 52124213</p>
                        <p>
                            <i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>
                        <p>
                            <i class="fa fa-envelope-o"></i> Email :
                            <a href="mailto:example@mail.com">eazymart@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-xs-5 contact-agile">
                        <img src="{{asset('eazy/images/contact2.jpg')}}" alt="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </div>
</div>
<!-- map -->
<div class="map w3layouts">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.756232006667!2d85.30657631429172!3d27.755663829975514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1f5c8d457071%3A0x271a5d7d74652037!2sEazy%20Mart!5e0!3m2!1sen!2snp!4v1612346903267!5m2!1sen!2snp" frameborder="0" style="border:0;"  aria-hidden="false" tabindex="0" allowfullscreen></iframe>
</div>
<!-- //map -->

@endsection
