@extends('layout')
@section('content')
<form action="{{ route('products.update', $product->id) }}" method="POST">
  @csrf
  @method('put')
  <input type="text" name="name" class="form-control mb-3" placeholder="Product name" value="{{ $product->name }}"/>

  <input type="text" name="price" class="form-control mb-3" placeholder="Product price" value="{{ $product->price }}"/>

  <textarea name="description" class="form-control mb-3" placeholder="description.." >{{ $product->description }}</textarea>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection