@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Edit Product</h3>
                @else
                <h3 class="m-0 text-dark pl-2">Editing product for {{Auth::user()->name}}</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/admin/itemlist" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        <form action="{{route('item.update',$items->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" name="name" value="{{old('name', $items->name)}}">
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" name="brand" value="{{old('brand', $items->brand)}}">
            </div>
            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="number" class="form-control" name="discount" value="{{old('discount', $items->discount)}}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="5">{{old('description', $items->description)}}</textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" name="quantity" value="{{old('quantity', $items->quantity)}}">
            </div>
            <div class="form-group">
                <label for="rate">Rate:</label>
                <input type="number" class="form-control" name="rate" value="{{old('rate', $items->rate)}}">
            </div>
            <div class="form-group">
                <label for="prev_price">Previous Price:</label>
                <input type="number" class="form-control" name="prev_price" value="{{old('prev_price', $items->prev_price)}}">
            </div>
            <div class="form-group">
                <label for="sku">SKU:</label>
                <input type="text" class="form-control" name="sku" value="{{old('sku', $items->sku)}}">
            </div>
            <div class="form-group">
                <label for="image">Image:</label><br>
                <input type="file" name="image">
                <div class="col-md-2 col-sm-2">
                    <img src="/storage/images/products/{{$items->image}}" style=" height: auto; max-width:12em;" alt = "Image">
                </div>
            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text" class="form-control" name="tags" value="{{old('tags', $items->tags)}}">
            </div>
             <div class="form-group">
                <label for="availability">Availability:</label>
                <select name="availability">
                    <option value="Available">Available</option>
                    <option value="Out Of Stock">Out of Stock</option>
                </select>
            </div>
            @if (Auth::user()->isAdmin())
                <div class="form-group">
                    <label for="dept_id">Vendor:</label>
                    <select class="form-control" name="vendor_id">
                        @foreach ($vendors as $vendor)
                            <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <label for="product_type">Product Type:</label>
            <div class="form-check">
                <div>
                    <input class="form-check-input" type="checkbox" name="featured">
                    <label class="form-check-label" for="defaultCheck1">
                        Featured
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="arrival">
                    <label class="form-check-label" for="defaultCheck1">
                        New Arrival
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="sales">
                    <label class="form-check-label" for="defaultCheck1">
                        Top Sales
                    </label>
                </div>
            </div> <br>

            <div class="form-group">
                <label for="dept_id">Department:</label>
                <select class="form-control" name="dept_id">
                    @foreach ($departments as $department)
                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                    @endforeach
                </select>
            </div>

            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
    </div>
@endsection
