@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nama:</strong>
		            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <select class="form-control" name="kategori">
                        <option value="ATK">ATK</option>
                        <option value="Sovenir">Sovenir</option>
                    </select>
                </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Jumlah Barang:</strong>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Barang">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Satuan:</strong>
                    <select class="form-control" name="satuan">
                        <option value="rimm">Rim</option>
                        <option value="Buah">Buah</option>
                        <option value="box">Box</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk:</strong>
                    <input type="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div>
           <!--  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Keluar:</strong>
                    <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div> -->
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input type="text" name="detail_peminjaman" class="form-control" placeholder="Detail">
                </div>
            </div> -->
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>

    </form>
@endsection