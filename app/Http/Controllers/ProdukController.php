<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Alert;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar resource.
     */
    public function index()
    {
        $produk = Produk::latest()->paginate(5);
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Menampilkan formulir untuk membuat resource baru.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Menyimpan resource yang baru dibuat ke dalam storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'dest' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id_kategori' => 'required|exists:kategoris,id'
        ]);

        $produk = new Produk;
        $produk->name = $request->name;
        $produk->slug = $request->slug;
        $produk->dest = $request->dest;
        $produk->price = $request->price;
        $produk->stock = $request->stock;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        Alert::success('Sukses', 'Data Berhasil Disimpan')->autoClose(3000);
        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Menampilkan resource yang spesifik.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Menampilkan formulir untuk mengedit resource yang spesifik.
     */
    public function edit(Produk $produk)
    {
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Memperbarui resource yang spesifik di storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'dest' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id_kategori' => 'required|exists:kategoris,id'
        ]);

        $produk->name = $request->name;
        $produk->slug = $request->slug;
        $produk->dest = $request->dest;
        $produk->price = $request->price;
        $produk->stock = $request->stock;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        return redirect()->route('produk.index');
    }

    /**
     * Menghapus resource yang spesifik dari storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        Alert::success('Sukses', 'Data Berhasil Dihapus')->autoClose(3000);
        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
    }
}
