<!-- Navigation Start  -->
<nav class="navbar navbar-default navbar-sticky bootsnav">

    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/indexJob"><img src="{{asset('job/img/logo.png')}}" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="{{route('job.index')}}">Home</a></li>
{{--                <li><a href="{{route('job.companies')}}">Companies</a></li>--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>--}}
{{--                    <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">--}}
{{--                        <li class="active"><a href="{{route('job.browse-job')}}">Browse Jobs</a></li>--}}
{{--                        <li><a href="{{route('job.detail')}}">Job Detail</a></li>--}}
{{--                        <li><a href="{{route('job.resume')}}">Resume Detail</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                @guest
                <li><a href="{{route('job.login')}}">Login</a></li>
                @else
                    @if (Auth::user()->isStaff())
                        <li><a href="/admin/dashboard">Dashboard</a></li>
                    @endif
                    @if (Auth::user()->isJobCompany())
                        <li><a href="{{route('postJob.create')}}">Post a Job</a></li>
                    @endif
{{--                    <li><a href="/myJobs"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></li>--}}
                    <li>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Navigation End  -->
