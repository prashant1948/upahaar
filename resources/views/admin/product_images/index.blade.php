@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark">Image List</h3>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row justify-content-center pb-3 pt-0">
            <a href="{{route('featured_image.create')}}" class="btn btn-outline-success btn-sm"> Add Image </a>
        </div>
    </div>

    <div style="overflow: hidden;">
    <div class="row justify-content-center">
        <div class="col-md-11">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

{{--@include('messages.message')--}}

            @if($products)
                <div class="card card-info table-responsive py-5 px-2">
                    <table class="table table-bordered table-stripped table-list">
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th colspan="3">Actions</th>
                        </tr>

                        @foreach ($products as $prod)
                            <tr>
                                <td style="width: 1.5rem;">
                                    {{$prod->id}}
                                </td>

                                <td style="width: 6.5rem;">
                                    <img src="/storage/Images/product_gallery/{{$prod->image}}" alt="" class="img-fluid" style="max-width: 6rem;"/>
                                </td>
                                <td>
                                    {{$prod->products->name}}
                                </td>
                                <td style="width: 3.5rem;">
                                    <a href="{{route('featured_image.edit',$prod->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                                    @method('DELETE')
                                    <a onclick="return confirm('Do you want to delete')" href="{{route('fi.destroy',$prod->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
{{--{{$datas->links()}}--}}
            @endif

        </div>
    </div>
    </div>

    <script>
        function whenClick(e)
        {
            if(confirm("Are you sure you want to delete?")){
                return true;
            }else{
                e.preventDefault();
            }
        }
    </script>
@endsection
