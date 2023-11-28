<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acompany</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    @vite('resources/css/css/customer.css') -->
</head>

<body style="font-family: 'Maven Pro';">
    <!-- SideBar -->
    @extends('component/sideBar')
      <h1 class="heading-title">Semua Produk</h1>

      <div class="flex flex-col ml-64 p-4">
        <div class="grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Pertamax Turbo</p>
                </div>
                <div class="card-img-container mt-4 mb-5">
                  <img src="{{ asset('images/pertamaxTurbo.png') }}" alt="Product 1" class="card-img" style="width: 300px;">
                  <p class="card-description mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima, minus voluptas dolor nisi ullam veritatis similique praesentium incidunt ex odit animi voluptatibus voluptatem possimus consectetur neque ducimus maiores id?
                  </p>
                </div>
                <div class="px-10 p-1 text-left flex items-center justify-between">
                <div>
                  <p class="card-price">Price: Rp20.000/liter</p>
                  <p class="card-stock">Stock: 1000 (liter)</p>
                </div>
                </div>
            </div>

            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Pertalite</p>
                </div>
                <div class="card-img-container mt-4 mb-5">
                  <img src="{{ asset('images/pertalite.png') }}" alt="Product 2" class="card-img" style="width: 300px;">
                  <p class="card-description mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima, minus voluptas dolor nisi ullam veritatis similique praesentium incidunt ex odit animi voluptatibus voluptatem possimus consectetur neque ducimus maiores id?
                  </p>
                </div>
                <div class="px-10 p-1 text-left flex items-center justify-between">
                <div>
                  <p class="card-price">Price: Rp20.000/liter</p>
                  <p class="card-stock">Stock: 1000 (liter)</p>
                </div>
                </div>
            </div>

            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Pertamina Dex</p>
                </div>
                <div class="card-img-container mt-4 mb-5">
                  <img src="{{ asset('images/pertaminaDex.png') }}" alt="Product 3" class="card-img" style="width: 300px;">
                  <p class="card-description mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima, minus voluptas dolor nisi ullam veritatis similique praesentium incidunt ex odit animi voluptatibus voluptatem possimus consectetur neque ducimus maiores id?
                  </p>
                </div>
                <div class="px-10 p-1 text-left flex items-center justify-between">
                <div>
                  <p class="card-price">Price: Rp20.000/liter</p>
                  <p class="card-stock">Stock: 1000 (liter)</p>
                </div>
                </div>
            </div>

            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Dexlite</p>
                </div>
                <div class="card-img-container mt-4 mb-5">
                  <img src="{{ asset('images/dexLite.png') }}" alt="Product 4" class="card-img" style="width: 300px;">
                  <p class="card-description mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima, minus voluptas dolor nisi ullam veritatis similique praesentium incidunt ex odit animi voluptatibus voluptatem possimus consectetur neque ducimus maiores id?
                  </p>
                </div>
                <div class="px-10 p-1 text-left flex items-center justify-between">
                <div>
                  <p class="card-price">Price: Rp20.000/liter</p>
                  <p class="card-stock">Stock: 1000 (liter)</p>
                </div>
                </div>
            </div>
        </div>
    </div>

      <!-- <section>
      <div class="card-container">
        <a href="#" class="card">
          <div class="card-img-container">
            <img src="{{ asset('images/logoPertamina.png') }}" alt="Product 1" class="card-img">
          </div>

          <div class="card-details">
            <h1 class="card-title">Pertamina</h1>
            <div>
              <p class="card-price">Rp20.000</p>
              <p class="card-stock">1000</p>
            </div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima, minus voluptas dolor nisi ullam veritatis similique praesentium incidunt ex odit animi voluptatibus voluptatem possimus consectetur neque ducimus maiores id?
            </p>
          </div>
        </a>
      </div> 
      </section>      -->
</body>
</html>

