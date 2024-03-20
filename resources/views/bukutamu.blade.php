@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center mb-6">Buku Tamu</h1>
        <div class="max-w-md mx-auto bg-white rounded-md p-8 shadow-md">
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan nama anda" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Alamat:</label>
                    <textarea id="message" name="message" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" rows="4" placeholder="Masukkan alamat anda" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

@endsection
