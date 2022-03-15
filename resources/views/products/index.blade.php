@extends('layout')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $products as $product )
    <tr>
      <th scope="row">{{ $product ->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->description }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop

