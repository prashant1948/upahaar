@extends('layouts.adminLayout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h3 class="m-0 text-dark">Images</h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-10 offset-md-1">

        @if ($errors->any())
            {{-- {{ $director ?? 'hii' }} --}}
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center pt-0 pb-3">
                <a href="{{route('featured_image.index')}}" class="btn btn-outline-success btn-sm"> Images List </a>
            </div>
        </div>

{{--        @include('messages.message')--}}

        <div class="card card-info mt-1">
            <h4 class="card-header"> {{__('Add Image')}} </h4>
            <div class="card-body">
                <form method="POST" action="{{ route('featured_image.store')}}" enctype="multipart/form-data">
                    @csrf

                <div class="row mt-2">
                    <div class="form-group col-md-8 col-sm-8">
                        <div class="form-group col-md-4">
                            <input type="file" name="image[]" class="form-control" multiple="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="p_id">Product:</label>
                    <select class="form-control" name="p_id">
                        @foreach ($products as $pro)
                            <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endforeach
                    </select>
                </div>
                    <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
