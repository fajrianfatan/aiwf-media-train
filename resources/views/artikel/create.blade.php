@include('components.header')

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-lg">
        <form action="{{ route('artikel.store') }}"
            class="bg-white shadow-md rounded-2xl p-8 space-y-5 border border-gray-100"
            method="POST">
            @csrf

            <h2 class="text-xl font-semibold text-gray-800 mb-3">Tambah Artikel</h2>

            <div class="space-y-1">
                <label class="text-gray-700 text-sm font-medium">Judul</label>
                <input
                    class="border border-gray-300 rounded-xl w-full py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition"
                    name="judul" type="text" value="{{ old('judul') }}">
            </div>

            <div class="space-y-1">
                <label class="text-gray-700 text-sm font-medium">Penulis</label>
                <select
                    class="border border-gray-300 rounded-xl w-full py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
                    name="penulis_id">
                    <option value="">Pilih Penulis</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-1">
                <label class="text-gray-700 text-sm font-medium">Kategori</label>
                <input
                    class="border border-gray-300 rounded-xl w-full py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
                    name="kategori" type="text" value="{{ old('kategori') }}">
            </div>

            <div class="space-y-1">
                <label class="text-gray-700 text-sm font-medium">Tanggal Terbit</label>
                <input datepicker
                    class="border border-gray-300 rounded-xl w-full py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
                    name="tanggal_terbit" type="text" value="{{ old('tanggal_terbit') }}">
            </div>

            <div class="space-y-1">
                <label class="text-gray-700 text-sm font-medium">Body</label>
                <textarea
                    class="border border-gray-300 rounded-xl w-full py-2.5 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition min-h-[140px]"
                    name="body">{{ old('body') }}</textarea>
            </div>

            <div class="flex justify-end pt-3">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2.5 px-6 rounded-xl shadow-sm hover:shadow transition focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Tambah
                </button>
            </div>
        </form>

        <p class="text-center text-gray-500 text-xs mt-4">
            &copy;2025 AIWF Media. All rights reserved.
        </p>
    </div>

</body>
