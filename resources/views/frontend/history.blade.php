@extends('layouts.frontend')

@section('content')

<header class="dark:bg-cyan-600 py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">History</h1>
                <p class="lead fw-normal text-white-50 mb-0">
                    History Dewa Rental Bali
                </p>
            </div>
        </div>
    </header>
<!-- history -->
<section id="history" class="py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-8">Sejarah Dewa Rental Bali</h2>
    <div class="space-y-8">
      <div class="timeline-item">
        <span class="date text-lg font-semibold text-blue-500">2010</span>
        <h3 class="text-xl font-semibold">Didirikan</h3>
        <p>Didirikan pada tahun 2010, Dewa Rental Bali dimulai dengan misi untuk memberikan layanan penyewaan mobil berkualitas tinggi di pulau Bali.</p>
      </div>
      <div class="timeline-item">
        <span class="date text-lg font-semibold text-blue-500">2012</span>
        <h3 class="text-xl font-semibold">Perluasan Armada</h3>
        <p>Pada tahun 2012, kami memperluas armada kami untuk mencakup berbagai jenis kendaraan, dari mobil ekonomis hingga mobil mewah.</p>
      </div>
      <div class="timeline-item">
        <span class="date text-lg font-semibold text-blue-500">2015</span>
        <h3 class="text-xl font-semibold">Pengenalan Sistem Pemesanan Online</h3>
        <p>Pada tahun 2015, kami memperkenalkan sistem pemesanan online untuk memberikan kemudahan kepada pelanggan dalam memesan kendaraan.</p>
      </div>
      <div class="timeline-item">
        <span class="date text-lg font-semibold text-blue-500">2018</span>
        <h3 class="text-xl font-semibold">Pembukaan Kantor Baru</h3>
        <p>Pada tahun 2018, kami membuka kantor cabang kedua kami di Kuta untuk melayani pelanggan dengan lebih baik.</p>
      </div>
      <div class="timeline-item">
        <span class="date text-lg font-semibold text-blue-500">2021</span>
        <h3 class="text-xl font-semibold">Peluncuran Aplikasi Seluler</h3>
        <p>Pada tahun 2021, kami meluncurkan aplikasi seluler kami untuk memberikan kemudahan dalam memesan kendaraan kapan pun dan di mana pun.</p>
      </div>
    </div>
  </div>
</section>
<!-- endhistory -->
@endsection