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
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Artikel</h2>

            <a href="{{ route('artikel.create') }}">
                <button class="btn btn-sm bg-blue-500 hover:bg-blue-400 text-white border-none shadow">
                    + Tambah Artikel
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
                    @foreach ($artikels as $key => $artikel)
                        <tr class="hover:bg-gray-50 transition">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $artikel->judul }}</td>
                            <td>{{ $artikel->penulis->nama }}</td>
                            <td>{{ $artikel->kategori }}</td>
                            <td>{{ $artikel->tanggal_terbit }}</td>

                            <td class="max-w-xs truncate">{{ $artikel->body }}</td>

                            <td class="text-center">
                                <div class="flex gap-2 justify-center">

                                    {{-- Edit --}}
                                    <a href="{{ route('artikel.edit', $artikel->id) }}">
                                        <button
                                            class="btn btn-xs bg-yellow-400 hover:bg-yellow-300 text-gray-800 border-none shadow-sm">
                                            Edit
                                        </button>
                                    </a>

                                    {{-- Hapus --}}
                                    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah anda ingin menghapus artikel ini?')">
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

    </div>

</body>