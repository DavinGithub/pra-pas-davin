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
        <th  scope="col">Stock-Date</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      <tr>  
        <td>{{$no++}}</td>
        <td>{{$stock->name}}</td>
        <td>{{$stock->stock}}</td>
        <td>{{$stock->price}}</td>
        <td>{{$stock->stock_date}}</td>
        <td>
            <a href="{{ route('stock.all') }}" class="btn btn-primary">Kembali</a>
          </td>
      </tr>
      
    </tbody>
  </table>


@endsection
