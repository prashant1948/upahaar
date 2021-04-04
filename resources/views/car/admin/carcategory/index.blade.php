@extends('layouts.adminLayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Car Categories</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('carcategory.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($carcategories)
            <table class="table table-bordered table-hover">
                @php
                    $c=0;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Car Category</th>
                    <th>Action</th>
                </tr>
                    @foreach ($carcategories as $b)
                        <tr  class="text-center">
                            @php
                                $c++;
                            @endphp
                            <td>{{$c}}</td>
                            <td>{{$b->car_category}}</td>
                            <td>
                            <a href="{{route('carcategory.edit',$b->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                             @method('DELETE')
                             <a onclick="return confirm('Do you want to delete')" href="{{route('car_category.destroy',$b->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
    </div>
@endsection

