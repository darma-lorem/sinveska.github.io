<html>
<head>
    <title>LAPORAN BARANG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>LAPORAN BARANG</h4>
    </center>
 
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Pinjam</th>
                <th>Satuan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
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
         </tr>
        </body>
</html>