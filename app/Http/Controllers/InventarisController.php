<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use PDF;
use DB;

class InventarisController extends Controller
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
        return view('inventaris.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventaris.create');
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
            'tanggal_pinjam'=> 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('inventaris.index')->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id_barang', $id)->firstOrFail();
        return view('inventaris.show',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id_barang', $id)->firstOrFail();
        return view('inventaris.edit',compact('product'));
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
            'jumlah' => 'required',
            'tanggal_pinjam'=> 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('inventaris.index')->with('success','Product updated successfully');
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
        return redirect()->route('inventaris.index')->with('success','Product deleted successfully');
    }

    public function product_pdf(Product $product)
    {
        $product = Product::all();
        $pdf = PDF::loadview('inventaris.product_pdf', ['product' => $product]);
        return $pdf->download('laporan-barang-pdf.pdf');
    }
    
}
