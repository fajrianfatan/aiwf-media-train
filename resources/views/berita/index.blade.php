@include('components.header')

<body class="bg-gray-100 min-h-screen">

    <div class="w-full max-w-6xl mx-auto px-4 py-8">

        {{-- Alert --}}
        @if (session('success'))
            <div class="alert alert-success shadow-sm mb-4 bg-green-100 text-green-800 border border-green-200">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Berita</h2>

            <a href="{{ route('berita.create') }}">
                <button class="btn btn-sm bg-blue-500 hover:bg-blue-400 text-white border-none shadow">
                    + Tambah Berita
                </button>
            </a>
        </div>

        {{-- TABLE --}}
        <div class="overflow-x-auto rounded-xl shadow bg-white border border-gray-200">
            <table class="table w-full text-sm">
                <thead class="bg-gray-50 border-b border-gray-200 text-gray-700">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Tanggal Terbit</th>
                        <th>Body</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">
                    @foreach ($beritas as $key => $berita)
                        <tr class="hover:bg-gray-50 transition">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $berita->judul }}</td>
                            <td>{{ $berita->penulis->nama }}</td>
                            <td>{{ $berita->kategori }}</td>
                            <td>{{ $berita->tanggal_terbit }}</td>

                            <td class="max-w-xs truncate">
                                {{ Str::limit($berita->body, 120) }}
                            </td>

                            <td class="text-center">
                                <div class="flex gap-2 justify-center">

                                    {{-- Edit --}}
                                    <a href="{{ route('berita.edit', $berita->id) }}">
                                        <button
                                            class="btn btn-xs bg-yellow-400 hover:bg-yellow-300 text-gray-800 border-none shadow-sm">
                                            Edit
                                        </button>
                                    </a>

                                    {{-- Hapus --}}
                                    <form action="{{ route('berita.destroy', $berita->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Apakah anda ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="btn btn-xs bg-red-400 hover:bg-red-300 text-white border-none shadow-sm">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        {{-- GRID CARD --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($beritas as $berita)
                <div class="card bg-white border border-gray-200 shadow-sm rounded-xl">
                    <figure class="rounded-t-xl overflow-hidden">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Berita" class="w-full h-40 object-cover">
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title text-gray-800">{{ $berita->judul }}</h2>
                        <p class="text-gray-600">{{ Str::limit($berita->body, 100) }}</p>

                        <div class="card-actions justify-end">
                            <button class="btn btn-sm bg-blue-500 hover:bg-blue-400 text-white border-none shadow"
                                onclick="document.getElementById('modal_{{ $berita->id }}').showModal()">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                {{-- MODAL --}}
                <dialog id="modal_{{ $berita->id }}" class="modal">
                    <div class="modal-box max-w-lg">
                        <h3 class="text-lg font-bold text-gray-800">{{ $berita->judul }}</h3>
                        <p class="py-4 text-gray-700">{{ $berita->body }}</p>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                    </form>
                </dialog>
            @endforeach
        </div>

    </div>

</body>
