<x-header :title="$title" />

<body class="bg-gray-100 min-h-screen">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Konten Utama --}}
    <section class="container mx-auto px-4 mt-6 flex-1 w-full">

        {{-- Tombol tambah buku --}}
        <div class="flex justify-end mb-4">
            <a href="{{ route('buku.create') }}">
                <button class="btn btn-info">Tambah Buku</button>
            </a>
        </div>
    </section>
    {{-- Card Section mirip halaman artikel --}}
    <x-content.card-section :title="isset($kategori) ? 'Buku Terbaru tentang ' . $kategori->title : 'Buku Terbaru'"
        :categories="$categories" :items="$bukus" routePrefix="buku" />


    {{-- Footer --}}
    <x-footer />
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

</html>

{{-- ========================================================================
ORIGINAL CODE (Tidak dihapus sesuai permintaan)
=========================================================================== --}}

{{-- @include('components.header')

<body>
    <div class="w-full justify-center items-center flex">
        <div class="overflow-x-auto">

            @if (session('success'))
            <p>{{ session('success') }}</p>
            @endif

            <a href="{{ route('buku.create') }}">
                <button class="btn btn-info">Tambah Buku</button>
            </a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukus as $key => $buku)
                    <tr>
                        <th>{{ ++$key }}</th>
                        <th>{{ $buku->judul }}</th>
                        <th>{{ $buku->penulis->nama }}</th>
                        <th>{{ $buku->penerbit }}</th>
                        <th>{{ $buku->tahun_terbit }}</th>
                        <th>{{ $buku->body }}</th>
                        <th>
                            <a href="{{ route('buku.edit', $buku->id) }}">
                                <button class="btn bg-yellow-500">Edit</button>
                            </a>

                            <a href="{{ route('buku.show', $buku->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-red-800" type="submit"
                                    onclick="return confirm('apakah anda ingin menghapus buku ini?')">
                                    Hapus
                                </button>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</body> --}}