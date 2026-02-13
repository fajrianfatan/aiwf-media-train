<!DOCTYPE html>
<html lang="en">

<body class="bg-white text-gray-900">
    @include('components.header')

    <div class="bg-gray-50 min-h-screen">

        <!-- NAVBAR -->
        <header class="w-full border-b bg-white shadow-sm">
            <nav class="flex items-center justify-between py-4 px-5 lg:px-12" aria-label="Global">

                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <a href="#" class="flex items-center">
                        <img class="h-10 w-auto" src="{{ asset('img/logo/aiwf_2.png') }}" alt="Logo AIWF">
                    </a>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Product</a>
                    <a href="#"
                        class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Features</a>
                    <a href="#"
                        class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Marketplace</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Company</a>
                </div>

                <!-- Login -->
                <div class="hidden lg:flex">
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">Log in
                        →</a>
                </div>

                <!-- Hamburger -->
                <div class="lg:hidden">
                    <button class="p-2 text-gray-700">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

            </nav>
        </header>

        {{-- TABLE SECTION --}}
        <div class="py-10 px-4">
            <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg p-8 border border-gray-100">

                @if (session('success'))
                    <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-700 border border-green-300 font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Add Button -->
                <div class="flex justify-end mb-6">
                    <a href="{{ route('streaming.create') }}">
                        <button
                            class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                            Tambah Video
                        </button>
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left border border-gray-200 rounded-xl overflow-hidden">

                        <thead class="bg-gray-100 border-b border-gray-200">
                            <tr class="text-gray-700">
                                <th class="py-3 px-4">No</th>
                                <th class="py-3 px-4">Judul</th>
                                <th class="py-3 px-4">Narasumber</th>
                                <th class="py-3 px-4">Link</th>
                                <th class="py-3 px-4">Penerbit</th>
                                <th class="py-3 px-4">Tahun</th>
                                <th class="py-3 px-4">Body</th>
                                <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            @foreach ($streamings as $key => $streaming)
                                <tr class="hover:bg-gray-50 transition">

                                    <td class="py-3 px-4 font-medium text-gray-800">{{ ++$key }}</td>
                                    <td class="py-3 px-4">{{ $streaming->judul }}</td>
                                    <td class="py-3 px-4">{{ $streaming->penulis->nama }}</td>
                                    <td class="py-3 px-4">{{ $streaming->link }}</td>
                                    <td class="py-3 px-4">{{ $streaming->penerbit }}</td>
                                    <td class="py-3 px-4">{{ $streaming->tahun_terbit }}</td>
                                    <td class="py-3 px-4">{{ $streaming->body }}</td>

                                    <td class="py-3 px-4 flex gap-2 justify-center">

                                        <!-- Edit -->
                                        <a href="{{ route('streaming.edit', $streaming->id) }}">
                                            <button
                                                class="px-3 py-1.5 bg-yellow-400 text-black rounded-lg hover:bg-yellow-500 transition shadow-sm">
                                                Edit
                                            </button>
                                        </a>

                                        <!-- Delete -->
                                        <a href="{{ route('streaming.show', $streaming->id) }}">
                                            <button
                                                class="px-3 py-1.5 bg-red-500 text-white rounded-lg hover:bg-red-600 transition shadow-sm"
                                                onclick="return confirm('Hapus video ini?')">
                                                Hapus
                                            </button>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    @include('components.footer')
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