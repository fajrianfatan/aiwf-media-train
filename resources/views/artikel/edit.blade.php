@include('components.header')

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">

        <form action="{{ route('artikel.update', $artikel) }}" class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8"
            method="POST">
            @csrf
            @method('PUT')

            <h2 class="text-xl font-bold text-gray-800 mb-6">Edit Artikel</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    name="judul" type="text" value="{{ $artikel->judul }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    name="penulis_id">
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}" {{ $artikel->penulis_id == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    name="kategori" type="text" value="{{ $artikel->kategori }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Terbit</label>
                <input datepicker
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    name="tanggal_terbit" type="text" value="{{ $artikel->tanggal_terbit }}">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Body</label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 h-32 focus:outline-none focus:shadow-outline"
                    name="body">{{ $artikel->body }}</textarea>
            </div>

            <div class="flex justify-between items-center">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Simpan
                </button>
            </div>
        </form>

        <p class="text-center text-gray-500 text-xs mt-4">
            &copy;2025 AIWF Media. All rights reserved.
        </p>
    </div>
</body>