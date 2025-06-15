<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Gambar</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-lg transform transition-all duration-300 hover:scale-105">
        <h2 class="text-3xl font-extrabold mb-8 text-center text-gray-900">Formulir Unggah Gambar</h2>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg relative mb-6 shadow-md" role="alert">
                <strong class="font-semibold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg relative mb-6 shadow-md" role="alert">
                <strong class="font-semibold">Oops!</strong>
                <span class="block sm:inline">Ada beberapa masalah dengan masukan Anda:</span>
                <ul class="mt-3 list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Gambar</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-base" placeholder="Masukkan judul gambar..." value="{{ old('title') }}" required>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Pilih Gambar</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer" accept="image/jpeg,image/png,image/jpg,image/gif" required>
            </div>

            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                Unggah
            </button>
        </form>

        @if (isset($image))
            <div class="mt-10 text-center border-t border-gray-200 pt-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Pratinjau Gambar yang Baru Diunggah:</h3>
                <p class="text-gray-600 text-lg mb-4"><strong>Judul:</strong> {{ $image->title }}</p>
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="max-w-full h-auto rounded-lg shadow-xl mx-auto object-cover max-h-80 border-4 border-gray-200">

                <!-- Formulir untuk menghapus gambar -->
                <form action="{{ route('images.destroy', $image) }}" method="POST" class="mt-6">
                    @csrf
                    @method('DELETE') {{-- Ini adalah metode HTTP spoofing untuk DELETE --}}
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Hapus Gambar
                    </button>
                </form>
            </div>
        @endif
    </div>
</body>
</html>