@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark">Image Edit</h3>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-10 offset-md-1">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="container">
            <div class="row justify-content-around pb-3 pt-0">
                <a href="/{{app()->getLocale()}}/admin/image/create" class="btn btn-outline-success btn-sm"> Add Image </a>
                <a href="/{{app()->getLocale()}}/admin/image" class="btn btn-outline-danger btn-sm"> Images List </a>
            </div>
        </div>

        @include('messages.message')

        @if($data)

        <div class="card card-info">
            <h4 class="card-header"> Image Edit Form </h4>
            <div class="card-body">
                <form action="{{route('featured_image.update',$productImg->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            <div class="form-group col-md-4">
                                <input type="file" name="image[]" class="form-control" multiple="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/product_gallery/{{$productImg->image}}" alt="" class="img-fluid" style="max-width: 6rem;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="p_id">Product:</label>
                        <select class="form-control" name="p_id">
                            @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    {{Form::hidden('_method','PUT')}}

                    <div class="row justify-content-center">
                        {{Form::submit('Update',['class'=>'btn btn-outline-info'])}}
                    </div>
                {!! Form::close()!!}
            </div>
        </div>
        @endif
    </div>
@endsection
