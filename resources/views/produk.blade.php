@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto bg-white shadow-md p-8 rounded-md">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="https://via.placeholder.com/400" alt="Product Image" class="w-full rounded-md">
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-4">Nama Produk</h2>
                    <p class="text-gray-700 mb-4">Deskripsi singkat tentang produk yang menarik minat pembeli untuk
                        membeli produk.</p>
                    <p class="text-gray-700 mb-4">Harga: $100</p>
                    <p class="text-gray-700 mb-4">Stok: 50</p>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Tambahkan ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
