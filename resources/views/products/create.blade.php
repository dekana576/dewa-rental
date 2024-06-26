@extends('layouts.app')
 
@section('title', 'Create Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Add Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="">
        <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-2">
                            <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="form-control">
                        </div>
                    </div>
                    @error('nama_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
                        <div class="mt-2">
                            <input type="file" name="foto_kendaraan" id="foto_kendaraan" class="form-control">
                        </div>
                    </div>
                    @error('foto_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Merek</label>
                        <div class="mt-2">
                            <input type="text" name="merek_kendaraan" id="merek_kendaraan" class="form-control">
                        </div>
                    </div>
                    @error('merek_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Jenis</label>
                        <div class="mt-2">
                            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control">
                        </div>
                    </div>
                    @error('jenis_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Kapasitas Mesin</label>
                        <div class="mt-2">
                            <input type="text" name="kapasitas_mesin" id="kapasitas_mesin" class="form-control">
                        </div>
                    </div>
                    @error('kapasitas_mesin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Tahun Produksi</label>
                        <div class="mt-2">
                            <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control">
                        </div>
                    </div>
                    @error('tahun_produksi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
         
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">No Polisi</label>
                        <div class="mt-2">
                            <input id="no_polisi" name="no_polisi" type="text" class="form-control">
                        </div>
                    </div>
                    @error('no_polisi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">No Mesin</label>
                        <div class="mt-2">
                            <input id="no_mesin" name="no_mesin" type="text" class="form-control">
                        </div>
                    </div>
                    @error('no_mesin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Jumlah Kursi</label>
                        <div class="mt-2">
                            <input id="jumlah_kursi" name="jumlah_kursi" type="number" class="form-control">
                        </div>
                    </div>
                    @error('jumlah_kursi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                        <div class="mt-2">
                            <input id="harga_sewa" name="harga_sewa" type="number" class="form-control">
                        </div>
                    </div>
                    @error('harga_sewa')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="deskripsi_kendaraan" placeholder="Descriptoin" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    @error('deskripsi_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-4">Submit</button>
            </div>
            
            
        </form>
    </div>
</div>
@endsection