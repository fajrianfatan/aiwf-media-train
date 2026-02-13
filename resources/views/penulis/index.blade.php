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
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Penulis</h2>

            <a href="{{ route('penulis.create') }}">
                <button class="btn btn-sm bg-blue-500 hover:bg-blue-400 text-white border-none shadow">
                    + Tambah Penulis
                </button>
            </a>
        </div>

        {{-- TABLE --}}
        <div class="overflow-x-auto rounded-xl shadow bg-white border border-gray-200">
            <table class="table w-full text-sm">
                <thead class="bg-gray-50 border-b border-gray-200 text-gray-700">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Bidang</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">
                    @foreach ($penulis as $key => $p)
                        <tr class="hover:bg-gray-50 transition">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->bidang }}</td>

                            <td class="text-center">
                                <div class="flex gap-2 justify-center">

                                    {{-- Edit --}}
                                    <a href="{{ route('penulis.edit', $p->id) }}">
                                        <button
                                            class="btn btn-xs bg-yellow-400 hover:bg-yellow-300 text-gray-800 border-none shadow-sm">
                                            Edit
                                        </button>
                                    </a>

                                    {{-- Hapus --}}
                                    <form action="{{ route('penulis.destroy', $p->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah anda ingin menghapus penulis ini?')">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
</body>