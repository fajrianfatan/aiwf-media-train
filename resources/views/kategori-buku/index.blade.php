@include('components.header')

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
                <!-- head -->
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Judul</th>
                        <th>Text Color</th>
                        <th>Body Color</th>
                        <th>Tahun Terbit</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($bukuCategories as $key => $b_categories)


                    <tr>
                        <th>{{ ++$key }}</th>
                        <th>{{ $b_categories->title }}</th>
                        <th>{{ $b_categories->slug }}</th>
                        <th>{{ $b_categories->text_color }}</th>
                        <th>{{ $b_categories->bg_color }}</th>

                        <th>
                            <a href="{{ route('buku.edit', $b_categories->id) }}">
                                <button class="btn bg-yellow-500  ">Edit</button>
                            </a>
                            <a href="{{ route('buku.show', $b_categories->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-red-800" type="submit"
                                    onclick="return confirm('apakah anda ingin menghapus buku ini?')">Hapus</button>
                            </a>
                        </th>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>
