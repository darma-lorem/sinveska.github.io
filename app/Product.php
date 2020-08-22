<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'nama_barang', 'kategori', 'jumlah', 'satuan','tanggal_masuk',
    ];
}