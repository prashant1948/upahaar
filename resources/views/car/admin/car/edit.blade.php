@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Edit Rental Service</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('cars.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        <form action="{{route('cars.update',$cars->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Rental Name:</label>
                <input type="text" class="form-control" name="model" required value="{{old('model', $cars->model)}}">
            </div>

            <div class="form-group">
                <label for="banner2">Image:</label><br>
                <input type="file" name="image">
            </div>

            <div class="form-group">
                <label for="brand">Description:</label>
                <textarea class="form-control" name="description" rows="5">{{old('description', $cars->description)}}</textarea>
            </div>

            <div class="form-group">
                <label for="vacancy">Allotment:</label>
                <input type="number" class="form-control" name="seats" required value="{{old('seats', $cars->seats)}}">
            </div>


            <div class="form-group">
                <label for="dept_id">Category:</label>
                <select class="form-control" name="category_id">
                    @foreach ($car_category as $department)
                        <option value="{{$department->id}}">{{$department->car_category}}</option>
                    @endforeach
                </select>
            </div>


            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
    </div>
@endsection

