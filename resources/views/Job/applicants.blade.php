@extends('Job.layout.master')

@section('content')
    <style>
        body
        {
            padding-right:0px !important;
            margin-right:0px !important;
        }
        .modal-body {
            display: flex !important;
            justify-content: center !important;
        }
    </style>
    <div class="wrapper">

        <!-- ========================================= MAIN ========================================= -->
        <main id="profile">
            <div class="container inner-bottom-sm">
                <div class="section">
                    <h1 class="border">{{Auth::user()->name}}</h1><br>

                    <h3 class="outer-top-xs">Job Applicants:</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($jobapplicants as $job)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{$job->user->name}}</td>
                                <td>{{$job->job->name}}</td>
                                <td>{{$job->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
{{--                    <div class="col-sm-6 ml-3 mb-2">--}}
{{--                        --}}{{--                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}
{{--                        <a class="btn btn-info btn-md" data-toggle="modal" data-target="#paymentModal"><i class="fa fa-money" aria-hidden="true"></i> {{_('Make Payment')}}</a>--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade in" id="paymentModal" role="dialog" >--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <!-- Modal content-->--}}
{{--                                <div class="modal-content" style="border: 1px solid green">--}}
{{--                                    <div class="modal-header" style="background: black;color:white">--}}
{{--                                        <h4>{{$barcode->title}}</h4>--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/barcode/{{$barcode->image}}"/>--}}
{{--                                        --}}{{--                                    <span class="badge badge-danger" style="background-color: red;font-size: 30px;display: inline-block">{{$popup->discount1}}</span>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--                <div class="modal-footer">--}}
{{--                                    --}}{{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                                    --}}{{--                </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div>
            </div>
        </main><!-- /#aboutUs-us -->
        <!-- ========================================= MAIN : END ========================================= -->
    </div><!-- /.wrapper -->
@endsection
