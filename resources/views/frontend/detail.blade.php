@extends('layouts.frontend')

@section('content')
<header class="dark:bg-cyan-600 py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Detail Mobil</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img
              class="card-img-top" style="width: 600px"
              src="{{ asset('/storage/products/'.$product->foto_kendaraan) }}"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div>
                <!-- Product name-->
                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                <p>
                  {{$product->deskripsi_kendaraan}}
                </p>
                <div class="mobil-info-list border-top pt-4">
                  <ul class="list-unstyled">
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>P3K</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>CHARGER</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>AUDIO</span>
                    </li>
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>AC</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <div
                  class="d-flex justify-content-between align-items-center"
                >
                  <h5 class="fw-bolder">Harga</h5>
                  <div class="rent-price mb-3">
                    <span style="font-size: 1rem" class="text-primary"
                      >{{ "Rp " . number_format($product->harga_sewa,2,',','.') }}/</span
                    >day
                  </div>
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between">
                    <span>Nama</span>
                    <span style="font-weight: 600">{{$product->nama_kendaraan}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between">
                    <span>Merek</span>
                    <span style="font-weight: 600">{{$product->merek_kendaraan}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between">
                    <span>Tahun Produksi</span>
                    <span style="font-weight: 600">{{$product->tahun_produksi}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between">
                    <span>Kapasitas Mesin</span>
                    <span style="font-weight: 600">{{$product->kapasitas_mesin}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">{{$product->jumlah_kursi}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Transmisi</span>
                    <span style="font-weight: 600">{{$product->jenis_kendaraan}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Status</span>
                    <span style="font-weight: 600; background-color: orange; color:white">{{$product->status}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a
                  class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                  href="#"
                  style="column-gap: 0.4rem"
                  >Sewa Mobil <i class="ri-whatsapp-line"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection