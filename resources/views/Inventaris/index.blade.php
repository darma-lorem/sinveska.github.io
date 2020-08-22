@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pengambilan Barang</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success py-2">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="row py-5">
    <div class="col-lg-12 margin-tb">
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Peminjaman</th>
            <th>Detail Peminjaman</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nama_barang }}</td>
            <td>{{ $product->kategori }}</td>
            <td>{{ $product->jumlah }}</td>
            <td>{{ $product->satuan }}</td>
            <td>{{ $product->tanggal_masuk }}</td>
            <td>{{ $product->tanggal_pinjam}}</td>
            <td>{{ $product->detail_peminjaman }}</td>
            <td>
                <form action="{{ route('inventaris.destroy',$product->id_barang) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('inventaris.edit',$product->id_barang) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection