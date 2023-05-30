<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    // CREATE DATA
    public function store(Request $request)
    {
        $buku = $request->buku;
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $penulis = $request->penulis;

        Products::create([
            'buku' => $buku,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'penulis' => $penulis
        ]);

        return "Product added successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }

    // READ DATA
    public function index()
    {
        $products = Products::all();

        return view('products.index', ['products' => $products]);
    }

    // UPDATE DATA
    public function edit($id)
    {
        $product = Products::find($id);

        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $buku = $request->input('buku');
        $harga = $request->input('harga');
        $jumlah = $request->input('jumlah');
        $penulis = $request->input('penulis');

        $product = Products::find($id);
        $product->buku = $buku;
        $product->harga = $harga;
        $product->jumlah = $jumlah;
        $product->penulis = $penulis;
        $product->save();

        return "Product updated successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }

    // DELETE DATA
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return "Product deleted successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }
}
