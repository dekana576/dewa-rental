@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Rental Mobil - Laravel</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- Navigation-->
  <!-- Header-->
  <header class="dark:bg-cyan-600 py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
        <p class="lead fw-normal text-white-50 mb-0">
          hanya dengan satu sentuhan
        </p>
      </div>
    </div>
  </header>
  <div class="outer-searchbar d-flex justify-content-center">
    <div class="searchbar mx-auto rounded-3">
      <div class="inner-searchbar mt-4 container">
        <div class="search-bar">
          <input type="text" class="search-input" placeholder="Lokasi Rental Anda">
          <button class="search-button">Search</button>
        </div>

        <div class="filter-options">
          <button class="filter-option">Tanggal Mulai</button>
          <button class="filter-option">Waktu Mulai</button>
          <button class="filter-option">Tanggal Selesai</button>
          <button class="filter-option">Waktu Selesai</button>
        </div>
      </div>

    </div>

  </div>
  </div>

  </div>
  </div>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <h3 class="text-center mb-5">Daftar Mobil</h3>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-warning text-white position-absolute" style="top: 0; right: 0">
              Tidak Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202101/The_new_Fortuner_0_1200x768.png?vrt1xOHQoWhGPJtI4pJEp_AZgT2moIJe&size=770:433"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Fortuner</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.gQKJWlU41ohUdXWjiDvUtQHaEK?rs=1&pid=ImgDetMain"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Pajero Sport</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-2">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Rubicon</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="https://th.bing.com/th/id/R.d3ffa4eb07af84d3eada334fcc12ffab?rik=Wd2J5lGV6b5Stw&riu=http%3a%2f%2fpngimg.com%2fuploads%2fMclaren%2fMclaren_PNG15.png&ehk=TA%2bN6BWdTd3m9Uh9RcEqxMLFZWb6wTl3nq0zpWifFKM%3d&risl=&pid=ImgRaw&r=0"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Mc laren</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.yXxQhD8UrlW9sWUJCZmbtwHaE8?rs=1&pid=ImgDetMain"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Lamborghini Aventador</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="https://th.bing.com/th/id/OIP.zJGY9h_BG9MlBBfPWfnEcQHaEh?w=295&h=180&c=7&r=0&o=5&pid=1.7"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Ferrari</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="https://th.bing.com/th/id/OIP.EfJAS-GkCSWhoiN-KFEeXgHaDy?w=323&h=178&c=7&r=0&o=5&pid=1.7"
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Mini Cooper</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top"
              src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAC0AScDASIAAhEBAxEB/8QAHAABAAEFAQEAAAAAAAAAAAAAAAMBBAUGBwII/8QAUBAAAQMDAgQCBgUIBAgPAAAAAQACAwQFERIhBhMxUSJBBxRhcZGhMkKBscEVI1JicoKi0RYzkrIXQ0WzwuHw8SQlNURTVWNzdYSGlKPS0//EABcBAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAcEQEBAQADAAMAAAAAAAAAAAAAARECEiEDIjH/2gAMAwEAAhEDEQA/AOtoiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAnZE7ICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICdkTsgIiIKqiIgIiICIiAiIgIiICIiCqoiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAnZE7ICIiAiIgIiICIiAiIgIiICIiAiKCqqqSigkqauZkMEY8T5CAMnoAOpJ6ADcoJ1b1VZSUTA+okDNRwxoBc957NY3JPwWnXTia5VOuOhLrdS9OfIxj7hKCOrI35jjB8tQc79VpWFjgqnF0pkmaX7unrZpqipk9v5x2R/CiWt3kvxw4w0byB0MrtJ/eAGB/aUH9IKsHxwW6Mf9tcaWM/N+fktDuXJgbE1skkkzyXHXpwGDbOAPPy3WJe8ZHiB33Ddj9yJrqZ4jZjeaxMd5l92Y4D7GRn71EeJG5/5R4baO3rkjz8dIXKnAvDsOc3HTUMg+zIwrKYys+l07jcIdnYf6SEnw3Phw+6c/jIFIy+VryNNVZHt7xygn/PY+a4i6Qn/AHBbLwnw7HdXm53CDXbKaYRwQFjf+MKsO0hgDtixp2OTgnrswoa6XFeK+raZYn00dFs1lS2MkzvPTkGR+nB8jpOfIEbmOqvENI4CrusVO8fVqqimgeffE4Nf/AufcQ8WVdRPNS2yflwR6on1dMSHSDoY6R4w5sXkXDDn9SQ3DRqbY5CSQx2Sck43J7k9UOztEfFNsc4Bl9tLjjOH1NO3zxjLtKy0N0lkZzBDHPHt+do5WSs+LSR818/PYde/mPPzxspad9VSyNmpZZqeUYIkppHwvH2xkIuvoaK4UMrgzmcuQ9I5gY3n3atvmrtcYt/HF5pwILtDFdKQ+F3ObGyqa3p4ZANB+1oP6y6PZb9bLtBrtdRzOU0c6jqMtqYGjAw4OJdjscuB8iitgRRxSNlYHgEZyCDjLSDgg4UiAiIgIiICdkTsgIiICIiAiIgIiICIiAiKhIaCSQANyScAD3lBVMqzfcrc3VicSFv0uQHSgewuYC0faVo/GMlfenUEVGXG30xdNPSmc0z6upJ0s5kjCRy2DfAIJJ8samht91vlDa448/8ACKufmCkpIHN5kxYcOc4nZrG/Xcdh7SQ12j1NZcLlUslqHiaqaCYmx5bS0jTseSDuPa8+I9Nh4RY0dDWQw6XRQx1EjI2zv5zCwhmQ2JjWN8MbPqtAx57kknMQ007GBkDaQZ3e6SpmL3u7uLacozdqCOCKnw9xEkw+uRhrT+o38eqjlnJJyeuckq6ltl+kBNPHbpHeQfU1jW+8ltIVaS8PcXTRyN5FqY57S3U2srNs7HAdS/ijPWtXq6ozTSy52J0x+xg2b/NW2stiGCcvOs+7oFsZ4F4qcASLe0EEjFRKc7djCCvL+B+K3EDNsa0AAHnyeXsLEXK1cSlrhucHYqkkulr3HyHxPZbL/QDiR3WttjfcZ3fc0KQejq9uxzLtQMBc1u0E793HA2LwiXjWr2a0VN8uNPboS5jCDLWTN609M0gOcP1ifCz2n2LeOK7hTW2iprHbg2FnqzoAGHDYKJoMT3Bx85N2A/oh5/xuTn+HuH6bhmjna6oZNPI91XX1QiLC9kIc5rGN1HDWNzjc7knzwONVt4ul7qat7aeSc1FRJMOTC98giyAyHDNtLQGjp5I3IuWyU4x+ei2/WH4K9iEcg1Rua4eZac7rGRWfiyQB0VgurmnofUJv9ILYbLwxxvI6V8lrfTw6MBlUIoXyPJ2OHu1YG/bqjN4sTJBmVg7ymP8AtAj+S8iI7jsf9a3L+hPFEpBENDGRJHIDLVdC14f0ja73KRno/wCJHSPL6y0x6gHaQaqTGSezWosnjSjCTkLzE+ro5oqqlmlgqYieVNE4tex3UYI8vIjocrocfo6ubhiW80TO/KoJXn4vqB9ymPo3a8ETXyXBILuRQwRnY52L3PRV1wZxXUXuOsjq4GsrKFkDq2SnafV5myFzGygfVf4Tqb5jcdMDdwQQMEHOCMeawtisFvsFA6jomvdzJDLNNUYdNUSEY1yFoA6bNAGAB7cmWsr6ayxslq5QKWSXls1OY0xuILzh0jmgjAJxnPYHoDUltyMqijgngqYYaiB7ZIZmMlikYctex41NcD2KkRBERATsidkBERAREQEREBERAUc09PTxvmqJYoYWAF8kz2xxtB28TnEBSLnXGNcJLlQ0lVEySnbKBSRmMTxPkkZjmPjeWscOocCdhqwQW5Qbq6slqads9vMT4JI2yR1LnAxvY4ZDoh5j2/eo221srRJWzPnmOCOaA6OPf6kR8HxBXPKDiGSalqae1W2popKOtloybPcORTOLDqMkdPWQzQtDu2kn2qSovPEtPBNPPX36nYyOR2s1NmnDXBjnNBa23sO+Mdfb5LOrjf3UNuOOdzptJ2Ekrgwe5keG/JUEVpi+hR0/7zQ7+9laL+WuImS11PzLgZ4K2uoqb1ur5QqhROiZLN4IAACZGhmGkE57KGWr44e9/Jrrq1hcSxjqygdpbnIGr1DJVtkMdCFRTs+hBA39ljR9wUnrcmAQAM/RDRufaAPJc1jquNopGOqa6sczOzZKppa7B31CCljOP3lHcLleKdrJqq6RMFRKGQQvqa8yyvJxhrH1IaGj6xIwPvnYx0t89aQSQ9jAMkkFoA7lztljJb9ZKdxFRe7RC8ZyJK+mMmR5aWvLvkudRRXSanNRdJKRuuUsNOQ15aGjLWl87JSXO2DcNA88nO1jzI21AjjuE9M2Sknkjgp2xOkY5s7GNIbTtZ4iNWkFwzoPTVvUdOHEdheCW3LnDoTTU1dKw/vxwlvzUB4o4ey8MmqZCxxY7lUFZJh36JJYBn7VqMNvluFdqgo7nLSS0kTn+syzOijq3Rt1thiqWlwbnUT4tugOAtnoOGpI207K5+aamD+VA2R7pHuedT3EZLGgnyBJwB0U5WyeR0+Pjxt+9yL+jvVJXv0Usdyc4DV46CaOPGcbyO8A9mXBZIR10jciLB1NcA+VgwQepDQfvUkMdNTxtZExkUTfotjbgZPkANyT8VZVPE1ko3uilqqVkjchzHzapB+0yIOx9pWmL++L6SF7R42uwcjYF23twraGh1vYSCRG7bqAMdD8FWl4gt9ewuo5qeUNOlz4ZWyNY7s8DcH3hJJ3FzyScnSfwRF+GQx7ulYMd3DKr6zRt6HV+y0/isZ+cfnoB3cQ0fNVaKZn9ZMXnzbCDgfvOwEF1UVetgbDG45eNX50wktwejmgnsqxS3F5ZqjiYPE1ulz5MDGfE97W7/Yrb1uNn9VCxv6z/G78B8lDLVyvMeqRxGsbdB9F3kNkGVMjGbzVBceuiLHzwopK0u2Y3SO53csbzFVrsoLsySOB8TviVj7lQ0dzpKqirGa4J2YJwC+N/wBWVhP1mncfDoVPNU09NDLPPLFFDE3Mss8jYoowemp7yB7lj6W/WC4S+r0V0oKic5xFFL+cdjc6GvAJ+zKLLZdjJcJQTUdhoKGYuMtC6ppHOd0cIpnhrmHA8JGC32EDqFnVjbS/MdUzP0Kgkexr2NP81kknhbeV2iIiIJ2ROyAiIgIqqiAiIgIiILWvnNPSzPafzjhyou+t+2R7tz9i0Xjt1PVcORz6paeSmraGKd9MxrniBzyw8sOI8yPrDt0We4ruduoPyVDW1cVO2ofUSRGVzhrfCGNOCARtq3yR1WIr6VtytlwoHO8NXTljHZzh/wBNjxjsQCPcg5jPxRP69W1Vva+2vqZ5JZvV56hjppHHeSURjTrP1sHGfLff1Jxbe6iN0FZXmqp3DxQ1kk0sTi0/WaWh3fzWCqaeWmqJ4aoGCpjkeJ4pRpLXg77bHB6jr1UQZHvpkadv1f8AR2+SmLrYW8UXCKVk9O6JlQxszY5jNWPnjEsnOfy3Sl2MnO2k9ftHp/GXFjhg3Wp+ypqQf4Q0rXg1ozhwxt5D8Dj5KpwM7twB/t02TDVzX3m7VxaaqpmlIyAXT1DuvfW5Z3hyxXa9gVks3q9GCYWVNRqkkm0HBZTscdRA8zqAztuRtYWGxS3qp1vDmWymePW527cw9RTwnoXu8z5Df2O6c13LbHHCGxRRMbFDHEMMijYMNYwdh/t13qKUXCVjZy+fLWVeloaGTyaYNjnIhYA33dVstHarZTgCmoYmAfoMA+5a6asw6edVthDhkCSdkRLe4D3A4UkV3srTma5wu7Yq6c/fKg28sLG4DWMHbwjZQOkYz6Tmj7c/csdDcbXIzVTya9jp3a4OI7OYS337q2mq42iWaV2IomSzSntHG0vd8gg1rjbil1GZLfSyvYWxMdWOicWyZmGY6aNw3BcPHKeoGB9Zcrlu1zc7LJ5IGg5aymc6Jrc/sEH4kq5c+qvtxrqqeQhss09fUOznQ2RwGlvtPhaPd7FIa9tITHSR08TBtzJYWTPkPQ45gIA+zKC3o77eaSphqoqp5qInZEkpLy9vnHI525YfMEn4rtlpu0N2t9FXxeETxeNmcmORh0vjJO+xz8u64ZVCOYOmbGyKVn9cyMaWOB6Pa3oPaAt79HdY51PdqIk6YpYqqMZ/6Zhjfj7WtQdCdMSV5MpXhsFTJ9BhP2KUUUgxzJI2e9wB+ZQeOaVQyHMX7RPwaVNyaFn06lpPZu/93KoZLcx0ZAe86iNmnzad98IKB6uIiSQB1OAB7VF61AM6YPiQPuBUFZcBSUVyrtDW+pUdTVDG/jjjLmfPCDmPGt/qbndp6Kly+jtszqWmYBlj6lnhmqC07FxOWsznAG25ytSkluML2GczseHB7C8va5rmnIewnoR5EFZi38qkt1XcJXD12dzmU734cYYwQJJQDtqcSGj3Eq05pquZTzknmv0sdK8udFKdmvDj5E7H3oO0cDX192oaSeU6qqUOo63GMGopmk83oN3NLSff7Fu6436KJsVFbTveGBtVG+JrjgvlNNMHMbnzw3J9y7IgIiICdkTsgIiICKqogIiICIiDSfSLbm1drtlWKaWpktlyhndDCHmSaleC2eNoj8W40kkdlgrRWUtj4atz75NUtlhpw8xxRtfJFBI/EMbg4jcAtH+puVs3HFXxDS0VuNlt0tVMal8kssUL5jTtjZgDTG5rvFnrny7nbkV6vN0rW1lDV0z2PdMwVLuQ+KQPidnGiQlw36glBuknHfBkzWio/KUg04Z65abfUFo7ZkeT81au4o9GsmddNESf0uHKHP8AA9c1dE9zQNMm2+Qw57KPllvUyfaxyDpf5b9GDt/V6Yf+nox/deqi9ejMbtZSNP8A4B/vXNMtA+Pk7oU1N67dWnoeo2QdVHFHBzhHG26FjGDTG38nzQQxg/otjbpHt2WSqGzyUU0tpnp5ap8JfRSP0up3POMO1A46Zx5ZxnZcY1MOAHN899/ms9ZOIqqyskax/OgzqZTuy0NeSMmN7stwfMafn1DHzQVMF2aL6Klj/WWSVxqPDUSRl30muedx7iVZ1/qRrKo0Qd6tzH8nVgnTnbJa0An7At7l9I0tQyOOotFJMxn0GziklDT3AliKpHx81uNFqpI+3Lhtjcf/AAINd4Wq7jQXGLlw1D6WpcyGoYyN7t3OwyRrRuS0+zoT3W/8S1T6fh+8OGWyTxRUQB2IdUSNY4fDUsa30iVRIZoljyMfmpaaIf2oIh96xt7us96pYaVrIoG+tNqZZJpXSGQta5oyQBsNRKDVad/JpqjQccx/ix1LYwcDb+StnMJweYyTmklujyII2x188dFPEHxsqG7Okg140kkFwmYw6S0589sFT0bIpoK8yOlbpYHwRU8TS2YxkF4Ia0kADfVnywgtYYi4U2p2TUOlhwfJpdy25Pv+5bL6Pi9tyrwDsaLB/abMz+ZWBhlZJIyRjdbYH0Zc5xDBEwTNADWjqSdz5D5q8sNZW0MtXLRSxRTSDknVQz1bywv1+BrGlo3wDlB1t80hG8jzgebjsoTK3yOfcCfuC0I3S9V0Ukk779WRxudGG22nNvpGvbu5sskYLi7v2+7ER0vEd8L3WujuM0UYGttJUVFSQCTgyufKTk4OPCOh2QdSNQxvUkDu7wj+LCgkuVBGQZKqlYG5J5lTTt6jA6vXJJbdc4RI+soLnG2MEyOqIKhugDrqL2YHxU1vtE91eYbXFHUVIhlnFO1zue5kQy7QJGhhI7asnyz0QdPPEFjadJuVvB7etRn5tOPmrTia7UDuGrm2Gso5JKs09K1kFTDI8sdK2R50scXdG77ea5xPabvTg+s2i7QhpAfzaKWJrSdgMuYrAiMDOjBJIwXb/bgIMjUnmQU0OWCNkTQc+eAPogZOdyei8ine0TB4IeYxGNTXMcwNIkLjrAI6D4qsbaSSJktTM9jIY5S1kbC5882luiLPQN/SJ8ugJ6e3VD6ud09dI97RFNzGySOHjaxzGubgdcgDHsHZBufo4tF6fxAy8ijc21Mirc1M7Cxkjp2FoFLn6RzkEgYAB3yQD2lYHg6nfT8LcMxPHi/J1PIQeo5o5o+9Z5AREQE7Iq9kFEREBF5JIJXkuKCRFCXleDKQguU2Vk6dw7qJ1U4d0GRyO65pxbwPin4hvtFV1E1Y6aW4mmLIuWIN3ysjAGouHVuT5YxutyfcQ3qfiVaSXyGPJMgGO+/yQfPJn2J5tTnBIOodcbHqoRU1GHZmmzjw4eevtytu4osNtFRPWWSQCOVxkfQcqVvJc45Pq7w3To7AkY6ZIWpuoq5p8VPIPeEFDUVAcQJnFvkev3rqXo+4RtV1tVTdL/S+sNqZ+Xb2ySSxhsMOWvlbynNzqcSN/wBD2781oaWl9YjdchVtpWkOeyljDpZBn6DS4hoz339xXRmekCgp4oaemoauKCGNkUMTWsayONg0tY0ZOwQbt/QT0e/9Us/93W//ALKCo9H/AAFLHIyKlkpnuB0ywVdQXMd3DZnuYftaVpj/AEiZ+jSz/vOA+5Wz/SBUn6NMR73uQT1fovvHMf6tdbRLEHEMNQ2ogkLfLUGNeM+4rC3DgDiqg5WmjgrxJrybVIZ+Xpx/WiRrCM522PQ/bdP48uRzpiYPLq4q2fxreHfRDAfd/NBjRwnxVqa0WG4hz3NYCYtLAXHA1OJ0gdyTgfYsdd7bW2W4VFuqiznQNgc4wv1xkSxNlBY4jcbrNv4tvj/8bjPbCwtzrKu5SMqJzrmZGItR6uYCSB9nkggpntzpeMsf4HjJGQSDjI38gryuqIZqh5psx00UzKWna3LPzDGucTgdzusUx4BwVkKeekBHrUbntadWqPSckjTuC9v3oLiKB0rYWwwcqetqYYWOmcIoHua7SHBzsNDcnLiTgYXVrXwv6OKKhpqerukNROIgKp0d5qIYZpnYL3Njp5mjGensAzuuVGOqrSHxxubCGCKnj1cwsiHQZ+7/AGJmjsdzk+hDIfcwoOvw2T0SwHwU9jd/303P/wA69yy9DPwRbRKLa+zUfN0831NtPDzNOcazGBnGTjPdcUj4XvL+kUjf2iG/iruPg+7uxl2n3uP4IO2/lmxH/KNIe/51u/zXoXeynAbXUuPZIzH3rjcfBNxI8VQR+zqV3HwNUbaqyoHu2Qdb/KdqPSsgJ7CRv818/wDHFpFq4gr3w6XUNxlkr6J8ZaWFsrtUkXh2yxxIx2wfNbjHwOfrV1d+7JpUzuAaKZgZUVNxljBDgx9QS3PfBag5fTPiex0Mv0HOY8fqvZkg7Z23IPv9izFntv5Yr6W2Rct8tXOH1EzcvNLSNJMsjng6QCCeozkNHn4t7j9HPD7SCWVZ/wDMPH90BZq28LW21iQUcUkZl0mRzpZXufp6anPJOB5INyifSRRxQxFjY4mNjY1p2axgDQB7lIJYj0cPisFHRyMAwTt7FcMimHmfigy2pncKuR3WOayXbcqQCTuUF7kd1VWo5i9DWguEUQ1IglwFTAVUQedDVTlMK9ogiMDCvBpIj1VwiCzNvpj1aPgo3Wmid1jafsCyCIMQ6wWt2dUEZz+q1Qu4Xsj/AKVLF/ZH4LOog1x3B/D7utJF8FE7gjhp2c0kf2ZW0Ig1M8BcMHrSt+JXg+j/AIVP/Nfg4rb0Qaf/AIPOE/Ok/jKp/g74R86PP77luKINPHo84NHW3sPve/8AmvY9H3BY/wAlQH3l/wD9ltqINWbwHwa3pZ6P95rj95UzODOEoyCyz24EdCaaIn+IFbGiDEssNpiwI6WBgHQMja3HwClFqox0jb8FkUQWIt1KOjG/BehQU4+o34K8RBaijhH1B8F69ViH1QrhEEHq0fYKvIj7BTIgi5LOwVeSzsFIiDxy29gnLavaIPOgJpC9IgppCYHZVTsgYHZERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBOyJ2QEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQE7IiAiIg/9k="
              alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Honda HRV</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>


  @endsection
  <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

</html>