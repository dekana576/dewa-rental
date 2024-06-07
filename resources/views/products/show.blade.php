@extends('layouts.app')
 
@section('title', 'Show Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="">
        <div class="row">
            <div class="col-6">
                <div class="sm:col-span-4">
                    <label class="">Nama</label>
                    <div class="mt-2">
                        {{ $product->nama_kendaraan }}
                    </div>
                </div>
         
                <div class="sm:col-span-4">
                    <label class="">Foto</label>
                    <div class="mt-2">
                        {{ $product->foto_kendaraan }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">Merek</label>
                    <div class="mt-2">
                        {{ $product->merek_kendaraan }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">Jenis</label>
                    <div class="mt-2">
                        {{ $product->jenis_kendaraan }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">Kapasitas Mesin</label>
                    <div class="mt-2">
                        {{ $product->kapasitas_mesin}}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">Tahun Produksi</label>
                    <div class="mt-2">
                        {{ $product->tahun_produksi }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="sm:col-span-4">
                    <label class="">No Polisi</label>
                    <div class="mt-2">
                        {{ $product->no_polisi }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">No Mesin</label>
                    <div class="mt-2">
                        {{ $product->no_mesin }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="">Deskripsi</label>
                    <div class="mt-2">
                        {{ $product->deskripsi_kendaraan }}
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection