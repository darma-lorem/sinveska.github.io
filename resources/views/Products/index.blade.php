@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left py-1">
                <h2>Barang Masuk</h2>
            </div>
            <div class="pull-right py-4">                
                <a class="btn btn-success " href="{{ route('products.create') }}"> Tambah Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $product->nama_barang }}</td>
            <td>{{ $product->kategori }}</td>
            <td>{{ $product->jumlah }}</td>
            <td>{{ $product->tanggal_masuk}}</td>
	        <td>
                <form action="{{ route('products.destroy',$product->id_barang) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id_barang) }}">Show</a>
                                       <a class="btn btn-primary" href="{{ route('products.edit',$product->id_barang) }}">Edit</a>
                  
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $products->links() !!}
@endsection