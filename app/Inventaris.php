<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventari extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'nama_barang', 'kategori', 'jumlah', 'satuan', 'tanggal_pinjam','detail_peminjaman'
    ];
}