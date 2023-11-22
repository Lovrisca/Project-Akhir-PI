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
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    @vite('resources/css/css/landingPage.css')
</head>

<body style="font-family: 'Maven Pro';">
    <!-- SideBar -->
    @extends('component/sideBar')

    <div class="flex flex-col ml-64 p-4">
        <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E3F5FF;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Product</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">721K</p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+11.01%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Profit</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">367K</p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">-0.03%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E3F5FF;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Stock</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">1,156</p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+15.03%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Customer</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">579</p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+15.03%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>