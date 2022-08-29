@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
      <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <label>Name</label>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Product Image</label></br>
        <input type="file" name="image" id="image" class="form-control" required></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success">
        <a href="{{ url('product') }}" class="btn btn-danger float-end">BACK</a>
      </br>
    </form>
  
  </div>
</div>
@stop