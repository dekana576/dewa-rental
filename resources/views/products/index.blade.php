@extends('layouts.app')
 
@section('title', 'Home Product List')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Product List</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin/products/create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
 
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="pe-3 py-3"> #</th>
                <th scope="col" class="pe-3 py-3"> Nama</th>
                <th scope="col" class="pe-3 py-3"> Foto</th>
                <th scope="col" class="pe-3 py-3"> Merek</th>
                <th scope="col" class="pe-3 py-3"> Jenis</th>
                <th scope="col" class="pe-3 py-3"> Kapasitas Mesin</th>
                <th scope="col" class="pe-3 py-3"> Tahun Produksi</th>
                <th scope="col" class="pe-3 py-3"> No Polisi</th>
                <th scope="col" class="pe-3 py-3"> Harga</th>
                <th scope="col" class="pe-3 py-3"> Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
            @foreach($product as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->nama_kendaraan }}
                </td>
                <td class="text-center">
                    <img src="{{ asset('/storage/products/'.$rs->foto_kendaraan) }}" class="rounded" style="width: 150px">
                </td>
                <td>
                    {{ $rs->merek_kendaraan }}
                </td>
                <td>
                    {{ $rs->jenis_kendaraan }}
                </td>
                <td>
                    {{ $rs->kapasitas_mesin }}
                </td>
                <td>
                    {{ $rs->tahun_produksi }}
                </td>
                <td>
                    {{ $rs->no_polisi }}
                </td>
                <td>
                    {{ "Rp " . number_format($rs->harga_sewa,2,',','.') }}
                </td>
                <td class="w-36">
                    <div class="py-3">
                        <a href="{{ route('admin/products/show', $rs->id) }}" class="text-blue-800">Detail</a> |
                        <a href="{{ route('admin/products/edit', $rs->id) }}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('admin/products/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection