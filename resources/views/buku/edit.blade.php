@include('components.header')

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center pt-10 px-4">

        {{-- CARD FORM --}}
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-xl p-8">

            <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Buku</h2>

            <form action="{{ route('buku.update', $buku) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="judul" type="text" value="{{ $buku->judul }}">
                </div>

                {{-- PENULIS --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Penulis</label>
                    <select
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="penulis_id">
                        <option value="">Pilih Penulis</option>
                        @foreach ($penulis as $p)
                            <option value="{{ $p->id }}" {{ $buku->penulis_id == $p->id ? 'selected' : '' }}>
                                {{ $p->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- PENERBIT --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Penerbit</label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="penerbit" type="text" value="{{ $buku->penerbit }}">
                </div>

                {{-- TAHUN TERBIT --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Tahun Terbit</label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="tahun_terbit" type="text" value="{{ $buku->tahun_terbit }}">
                </div>

                {{-- BODY --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Body</label>
                    <textarea
                        class="shadow border rounded w-full py-3 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="body" rows="6">{{ $buku->body }}</textarea>
                </div>

                {{-- BUTTON --}}
                <div class="mt-6">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow focus:outline-none focus:ring focus:ring-blue-300"
                        type="submit">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>

        <p class="text-center text-gray-500 text-xs mt-6">
            &copy;2024 AIWF Media. All rights reserved.
        </p>

    </div>
</body>