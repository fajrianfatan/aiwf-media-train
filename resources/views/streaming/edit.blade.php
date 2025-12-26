@include('components.header')

<body>
    <div class="w-full max-w-xs">
        <form action="{{ route('streaming.update', $streaming) }}"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Judul
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="judul" type="text" value="{{ $streaming->judul }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Narasumber
                </label>
                <select
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="penulis_id">
                    <option value="">Pilih Narasumber</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}" {{ $streaming->penulis_id == $p->id ? 'selected' : ''}}>{{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Link
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="link" type="text    " value="{{  $streaming->link }}">

            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Penerbit
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="penerbit" type="text" value="{{  $streaming->penerbit }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Tahun Terbit
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="tahun_terbit" type="text" value="{{  $streaming->tahun_terbit }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Body
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="body" type="textarea" value="{{  $streaming->body }}">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Simpan
                </button>
                {{-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                    href="#">
                    Forgot Password?
                </a> --}}
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 Acme Corp. All rights reserved.
        </p>
    </div>
</body>