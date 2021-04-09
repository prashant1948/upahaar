@extends('layouts.adminLayout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Rental Services</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('cars.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="row">
        <div class="pull-left">
            <form action="/carSort" method="get" style="margin-left: 250px;">
                <div class="input-group">
                    <select class="form-control" id="sort" name="sort" >
                        <option value="id" selected="selected">Sort By Category</option>
                        @foreach ($catList as $name => $id)
                            <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Sort</button>
                  </span>
                </div>
            </form>
        </div>

        <div class="pull-right">
            <form action="/carSearch" method="get" style="margin-left: 30px;width: 280px">
                <div class="input-group" >
                    <input type="search" class="form-control" id="searchCar" name="search" placeholder="----Search Item----">
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </span>
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($cars)
            <table class="table table-bordered table-hover">
                @php
                    $c=0;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Rental Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Allotment</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                    @foreach ($cars as $b)
                        <tr  class="text-center">
                            @php
                                $c++;
                            @endphp
                            <td>{{$c}}</td>
                            <td>{{$b->model}}</td>
                            <td>{{$b->image}}</td>
                            <td>{{$b->description}}</td>
                            <td>{{$b->seats}}</td>
                            <td>{{$b->category->car_category}}</td>
                            <td>
                            <a href="{{route('cars.edit',$b->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                             @method('DELETE')
                             <a onclick="return confirm('Do you want to delete')" href="{{route('car.destroy',$b->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
    </div>
@endsection

