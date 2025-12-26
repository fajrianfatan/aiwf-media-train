@include('components.header')

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <form action="{{ route('buku.store') }}" class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Judul
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="judul" type="text" value="{{ old('judul') }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Penulis
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="penulis_id">
                    <option value="">Pilih Penulis</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Penerbit
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="penerbit" type="text" value="{{ old('penerbit') }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Tahun Terbit
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="tahun_terbit" type="text" value="{{ old('tahun_terbit') }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Body
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
                    name="body">{{ old('body') }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Tambah
                </button>
            </div>
        </form>

        <p class="text-center text-gray-500 text-xs mt-4">
            &copy;2025 AIWF Media. All rights reserved.
        </p>
    </div>
</body>