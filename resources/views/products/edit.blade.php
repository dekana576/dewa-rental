@extends('layouts.app')
 
@section('title', 'Edit Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Edit Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="">
        <form action="{{ route('admin/products/update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-2">
                            <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="form-control" value="{{ $product->nama_kendaraan }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                        <div class="mt-2">
                            <input type="text" name="foto_kendaraan" id="foto_kendaraan" class="form-control" value="{{ $product->foto_kendaraan }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Merek</label>
                        <div class="mt-2">
                            <input type="text" name="merek_kendaraan" id="merek_kendaraan" class="form-control" value="{{ $product->merek_kendaraan }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Jenis</label>
                        <div class="mt-2">
                            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" value="{{ $product->jenis_kendaraan }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Kapasitas Mesin</label>
                        <div class="mt-2">
                            <input type="text" name="kapasitas_mesin" id="kapasitas_mesin" class="form-control" value="{{ $product->kapasitas_mesin }}">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Tahun Produksi</label>
                        <div class="mt-2">
                            <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control" value="{{ $product->tahun_produksi }}">
                        </div>
                    </div>
         
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">No Polisi</label>
                        <div class="mt-2">
                            <input id="no_polisi" name="no_polisi" type="text" class="form-control" value="{{ $product->no_polisi }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">No Mesin</label>
                        <div class="mt-2">
                            <input id="no_mesin" name="no_mesin" type="text" class="form-control" value="{{ $product->no_mesin }}">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="deskripsi_kendaraan" placeholder="Descriptoin" rows="3" class="form-control">{{ $product->deskripsi_kendaraan }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                </div>
            </div>
            
            
        </form>
    </div>
</div>
@endsection