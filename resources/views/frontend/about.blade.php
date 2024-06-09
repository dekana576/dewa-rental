@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Dewa Rental Bali</title>
</head>

<body>

    <!-- header -->
    <header class="dark:bg-cyan-600 py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">About</h1>
                <p class="lead fw-normal text-white-50 mb-0">
                    About Dewa Rental Bali
                </p>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- About Section -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1668071997-10-11-2022-d49vYB1OACFo783tWm2VqrQDbZLKNikw.png"
                        class="img-fluid rounded shadow" alt="Dewa Rental Bali">
                </div>
                <div class="col-md-6">
                    <h2 class="text-4xl font-bold mb-4">About Dewa Rental Bali</h2>
                    <p class="text-gray-700 mb-4">Selamat datang di Dewa Rental Bali, jasa rental mobil terpercaya Anda
                        di Bali. Kami menawarkan berbagai macam kendaraan yang sesuai dengan kebutuhan Anda, apakah Anda
                        menjelajahi tempat-tempat indah di pulau itu atau menuju ke pertemuan bisnis. Misi kami adalah
                        untuk memberikan layanan berkualitas tinggi dan memastikan kenyamanan dan kemudahan Anda.</p>
                    <p class="text-gray-700 mb-4">Didirikan pada tahun 2010, Dewa Rental Bali telah berkembang menjadi
                        salah satu perusahaan penyewaan mobil terkemuka di pulau ini. Armada kami mencakup model-model
                        terbaru, dan semua kendaraan kami dirawat dengan baik dan diservis secara teratur. Staf kami
                        yang ramah dan profesional selalu siap membantu Anda dengan kebutuhan sewa Anda.</p>
                    <p class="text-gray-700 mb-4">Kami percaya dalam membuat pengalaman Anda bebas repot dan
                        menyenangkan. Pilih Dewa Rental Bali untuk layanan penyewaan mobil yang andal, terjangkau, dan
                        sangat baik di Bali.</p>
                </div>
            </div>
        </div>

    </section>


    
    @endsection
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>