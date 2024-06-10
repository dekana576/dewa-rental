<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_kendaraan'  => 'required',
            'foto_kendaraan'  => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'merek_kendaraan'   => 'required',
            'jenis_kendaraan'         => 'required',
            'kapasitas_mesin'         => 'required',
            'tahun_produksi'         => 'required',
            'no_polisi'         => 'required',
            'no_mesin'         => 'required',
            'jumlah_kursi'         => 'required',
            'harga_sewa'         => 'required',
            'deskripsi_kendaraan'         => 'required',
        ]);

        //upload image
        $image = $request->file('foto_kendaraan');
        $image->storeAs('public/products', $image->hashName());

        //create product
        Product::create([
            'nama_kendaraan'         => $request->nama_kendaraan,
            'foto_kendaraan'         => $image->hashName(),
            'merek_kendaraan'         => $request->merek_kendaraan,
            'jenis_kendaraan'   => $request->jenis_kendaraan,
            'kapasitas_mesin'         => $request->kapasitas_mesin,
            'tahun_produksi'         => $request->tahun_produksi,
            'no_polisi'         => $request->no_polisi,
            'no_mesin'         => $request->no_mesin,
            'jumlah_kursi'         => $request->jumlah_kursi,
            'harga_sewa'         => $request->harga_sewa,
            'deskripsi_kendaraan'         => $request->deskripsi_kendaraan,
        ]);

        return redirect()->route('admin/products')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // dd($request->all());

        $request->validate([
            'nama_kendaraan'  => 'required',
            'foto_kendaraan'  => 'image|mimes:jpeg,jpg,png|max:2048',
            'merek_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
            'kapasitas_mesin' => 'required',
            'tahun_produksi'  => 'required',
            'no_polisi'       => 'required',
            'no_mesin'        => 'required',
            'jumlah_kursi'        => 'required',
            'harga_sewa'        => 'required',
            'status'        => 'required',
            'deskripsi_kendaraan' => 'required',
        ]);
        
        $product = Product::findOrFail($id);
        
        if ($request->hasFile('foto_kendaraan')) {
        
            //upload new image
            $image = $request->file('foto_kendaraan');
            $image->storeAs('public/products', $image->hashName());
        
            //delete old image
            Storage::delete('public/products/' . $product->foto_kendaraan);
        
            //update product with new image
            $product->update([
                'nama_kendaraan'     => $request->nama_kendaraan,
                'foto_kendaraan'     => $image->hashName(),
                'merek_kendaraan'    => $request->merek_kendaraan,
                'jenis_kendaraan'    => $request->jenis_kendaraan,
                'kapasitas_mesin'    => $request->kapasitas_mesin,
                'tahun_produksi'     => $request->tahun_produksi,
                'no_polisi'          => $request->no_polisi,
                'no_mesin'           => $request->no_mesin,
                'jumlah_kursi'           => $request->jumlah_kursi,
                'harga_sewa'           => $request->harga_sewa,
                'status'           => $request->status,
                'deskripsi_kendaraan'=> $request->deskripsi_kendaraan,
            ]);
        
        } else {
        
            //update product without image
            $product->update([
                'nama_kendaraan'     => $request->nama_kendaraan,
                'merek_kendaraan'    => $request->merek_kendaraan,
                'jenis_kendaraan'    => $request->jenis_kendaraan,
                'kapasitas_mesin'    => $request->kapasitas_mesin,
                'tahun_produksi'     => $request->tahun_produksi,
                'no_polisi'          => $request->no_polisi,
                'no_mesin'           => $request->no_mesin,
                'jumlah_kursi'           => $request->jumlah_kursi,
                'harga_sewa'           => $request->harga_sewa,
                'status'           => $request->status,
                'deskripsi_kendaraan'=> $request->deskripsi_kendaraan,
            ]);
        }

       
        
        return redirect()->route('admin/products')->with('success', 'Product Update Successful');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::FindOrFail($id);

        Storage::delete('public/products/'.$product->foto_kendaraan);
        $product->delete();

        return redirect()->route('admin/products')->with('success', 'Product Deleted Successfull');
    }
}
