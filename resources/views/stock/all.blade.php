@extends('layouts.main')

@section('container')
  <h3>Data Stock</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($stocks as $stock)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$stock->name}}</td>
        <td>{{$stock->stock}}</td>
        <td>{{$stock->price}}</td>
        <td>
            <a href="/stock/detail/{{$stock->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
