@extends('layouts.adminLayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if (Auth::user()->isAdmin())
                        <h3 class="m-0 text-dark pl-2">Jobs Applicants</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

{{--    <div class="col-sm-6 ml-3 mb-2">--}}
{{--        <a href="{{route('jobs.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>--}}
{{--    </div>--}}

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($application)
            <table class="table table-bordered table-hover">
                @php
                    $c=0;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Job</th>
{{--                    <th>Action</th>--}}
                </tr>
                @foreach ($application as $b)
                    <tr  class="text-center">
                        @php
                            $c++;
                        @endphp
                        <td>{{$c}}</td>
                        <td>{{$b->user->name}}</td>
                        <td>{{$b->user->email}}</td>
                        <td>{{$b->job->name}}</td>
{{--                        <td>--}}
                            {{--                            <a href="{{route('jobs.edit',$b->id)}}"><i class="fa fa-lg fa-edit"></i></a>--}}
{{--                            @method('DELETE')--}}
{{--                            <a onclick="return confirm('Do you want to delete')" href="{{route('app.destroy',$b->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection


