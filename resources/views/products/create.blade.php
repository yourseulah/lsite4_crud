@extends('layout')
@section('content')
<h1>Products Creation</h1>
<hr>
<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <label>Product Name : </label>
  <input type="text" name="name" class="form-control mb-3" placeholder="input product name" />
  <label>Product Price : </label>
  <input type="text" name="price" class="form-control mb-3" placeholder="input product price"/>
  <label>Product Description : </label>
  <textarea name="description" rows="5" class="form-control mb-3" placeholder="input product description"/>
  </textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection