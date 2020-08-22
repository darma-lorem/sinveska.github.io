<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()

    {
         
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)

    {

        request()->validate([

            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'satuan'=>'required',
            'tanggal_masuk'=> 'required',
      ]);
        Product::create([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
           'jumlah' => $request->jumlah,
           'satuan' => $request->satuan,
           'tanggal_masuk' => $request->tanggal_masuk,
        ]);
        return redirect()->route('products.index')->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         request()->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'satuan'=>'required',
            'tanggal_masuk'=> 'required',
        ]);
        $product->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
           'jumlah' => $request->jumlah,
           'satuan' => $request->satuan,
           'tanggal_masuk' => $request->tanggal_masuk,
        ]);
        return redirect()->route('product.index')->with('success','Product updated successfully');
    }
    /**
     * 
     */

     /* Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }

    // public function downloadPDF($product)
    // {
    //     $pdf = PDF::loadview('pdf', compact('show'));

    //     return $pdf->download('laporan barnag.pdf');
    // }
}
