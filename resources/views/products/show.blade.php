@extends('layouts.app')
 
@section('title', 'Show Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="">
        <div class="row">
            <div class="sm:col-span-4">
                <div class="mt-2">
                    <img src="{{ asset('/storage/products/'.$product->foto_kendaraan) }}" class="rounded" style="width: 300px">
                </div>
            </div>
            <div class="col-6">
                <div class="sm:col-span-4">
                    <label class=""><strong>Nama</strong></label>
                    <div class="mb-2">
                        {{ $product->nama_kendaraan }}
                    </div>
                </div>
         
                <div class="sm:col-span-4">
                    <label class=""><strong>Merek</strong></label>
                    <div class="mb-2">
                        {{ $product->merek_kendaraan }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>Jenis</strong></label>
                    <div class="mb-2">
                        {{ $product->jenis_kendaraan }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>Kapasitas Mesin</strong></label>
                    <div class="mb-2">
                        {{ $product->kapasitas_mesin}}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>Tahun Produksi</strong></label>
                    <div class="mb-2">
                        {{ $product->tahun_produksi }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="sm:col-span-4">
                    <label class=""><strong>No Polisi</strong></label>
                    <div class="mb-2">
                        {{ $product->no_polisi }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>No Mesin</strong></label>
                    <div class="mb-2">
                        {{ $product->no_mesin }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>Harga Sewa</strong></label>
                    <div class="mb-2">
                        {{ "Rp " . number_format($product->harga_sewa,2,',','.') }}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class=""><strong>Deskripsi</strong></label>
                    <div class="mb-2">
                        {{ $product->deskripsi_kendaraan }}
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection