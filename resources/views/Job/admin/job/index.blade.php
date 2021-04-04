@extends('layouts.adminLayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Jobs</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('jobs.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($jobs)
            <table class="table table-bordered table-hover">
                @php
                    $c=0;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Vacancy</th>
                    <th>Salary</th>
                    <th>Job Type</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
                    @foreach ($jobs as $b)
                        <tr  class="text-center">
                            @php
                                $c++;
                            @endphp
                            <td>{{$c}}</td>
                            <td>{{$b->name}}</td>
                            <td>{{$b->description}}</td>
                            <td>{{$b->vacancy}}</td>
                            <td>{{$b->salary}}</td>
                            <td>{{$b->job_type}}</td>
                            <td>{{$b->category->job_category}}</td>
                            <td>{{$b->company->name}}</td>
                            <td>
{{--                            <a href="{{route('jobs.edit',$b->id)}}"><i class="fa fa-lg fa-edit"></i></a>--}}
                             @method('DELETE')
                             <a onclick="return confirm('Do you want to delete')" href="{{route('jobb.destroy',$b->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
    </div>
@endsection
