@extends('products.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Product
                        <a href="{{ url('product') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$products->name}}"></br>
                        <label>Product Image</label></br>
                        <img src="{{ asset('uploads/product/'.$products->product_image) }}" width="70px" height="70px" alt="Image">
                        <input type="file" name="image" id="image" class="form-control"></br>
                        <label>Price</label></br>
                        <input type="text" name="price" id="price" class="form-control" value="{{$products->price}}"></br>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection