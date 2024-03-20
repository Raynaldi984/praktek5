@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Biodata</h1>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nama
                </label>
                <p class="text-gray-700 text-lg" id="name">Dhani Raynaldi</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                    Umur
                </label>
                <p class="text-gray-700 text-lg" id="age">21 tahun</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                    Alamat
                </label>
                <p class="text-gray-700 text-lg" id="address">Jl. Perdamaian, Kota Pontianak</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <p class="text-gray-700 text-lg" id="email">dhaniraynaldi984@gmail.com</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Telepon
                </label>
                <p class="text-gray-700 text-lg" id="phone">+6289624412150</p>
            </div>
        </div>
    </div>
</body>

</html>

<!-- end cards -->
@endsection
