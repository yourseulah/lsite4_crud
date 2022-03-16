@extends('layout')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

      {{-- <th scope="col">Description</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach ( $products as $product )
    <tr>
      <th scope="row">{{ $product ->id }}</th>
      <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
      <td>{{ $product->price }}</td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>  
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('products.show', $product->id) }}">View</a></li>
            <li><a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('delete')
              <button type="submit" class="dropdown-item">Delete</button>
              </form>
            </li>
          </ul>
        </div>
      </td>
      {{-- <td>{{ $product->description }}</td> --}}
    </tr>
    @endforeach
  </tbody>
</table>

@stop

