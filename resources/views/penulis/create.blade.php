@include('components.header')

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center pt-10 px-4">

        {{-- CARD FORM --}}
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-xl p-8">

            <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Penulis</h2>

            <form action="{{ route('penulis.store') }}" method="POST">
                @csrf

                {{-- NAMA --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="nama" type="text" value="{{ old('nama') }}">
                </div>

                {{-- BIDANG --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Bidang</label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-300"
                        name="bidang" type="text" value="{{ old('bidang') }}">
                </div>

                {{-- BUTTON --}}
                <div class="mt-6">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow focus:outline-none focus:ring focus:ring-blue-300"
                        type="submit">
                        Tambah
                    </button>
                </div>

            </form>

        </div>

        <p class="text-center text-gray-500 text-xs mt-6">
            &copy;2024 AIWF Media. All rights reserved.
        </p>

    </div>
</body>