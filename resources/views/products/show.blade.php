@extends('layout')
@section('content')
<div>
  <h5>Product Name</h5>
  <p>{{ $product->name }}</p>
  
  <h5>Product Price</h5>
  <p>{{ $product->price }}</p>
  
  <h5>Product Description</h5>
  <p>{{ $product->description }}</p>
</div>
@endsection