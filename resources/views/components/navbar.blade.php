<div class="navbar bg-accent-content shadow-sm z-[999] top-0 left-0 w-full px-4">

    <div class="navbar-start flex items-center space-x-3">
        {{-- Mobile Menu --}}
        <div class="dropdown lg:hidden">
            <button tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </button>
            <ul tabindex="0" class="menu dropdown-content bg-zinc-800 text-black rounded-box z-50 mt-3 w-52 p-2 shadow">

                <li><a href="{{ route('beranda')}}" class="text-white">Beranda</a></li>
                <li>
                    <details>
                        <summary class="text-white">Profil</summary>
                        <ul class="p-2">
                            <li><a href="{{ route('about')}}" class="text-white">Tentang Kami</a></li>
                            {{-- <li><a href="{{ route('visi-misi')}}" class="text-white">Visi dan Misi</a></li> --}}
                            {{-- <li><a href="{{ route('struktur')}}" class="text-white">Struktur Organisasi</a></li>
                            --}}
                            {{-- <li><a href="{{ route('departemen')}}" class="text-white">Departemen Yayasan</a></li>
                            --}}
                            <li><a href="{{ route('galeri')}}" class="text-white">Galeri Kegiatan</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="{{ route('artikel.index')}}" class="text-white">Artikel</a></li>
                {{-- <li>
                    <details>
                        <summary class="text-white">Artikel</summary>
                        <ul class="p-2">
                            <li><a href="{{route('artikel.index')}}" class="text-white">Halaman Utama</a></li>
                            <li>
                                <details>
                                    <summary class="text-white">Al-Qur'an</summary>
                                    <ul class="p-2">
                                        <li><a href="" class="text-white">Tafsir</a></li>
                                        <li><a href="" class="text-white">Ayatul Ahkam</a></li>
                                        <li><a href="" class="text-white">Ulumul Qur'an</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details>
                                    <summary class="text-white">Hadits</summary>
                                    <ul class="p-2">
                                        <li><a href="" class="text-white">Syarh Hadits</a></li>
                                        <li><a href="" class="text-white">Hadits Dlo'if</a></li>
                                        <li><a href="" class="text-white">Ulumul Hadits</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details>
                                    <summary class="text-white">Fiqih</summary>
                                    <ul class="p-2">
                                        <li><a href="" class="text-white">Shalat</a></li>
                                        <li><a href="" class="text-white">Fiqih Ibadah</a></li>
                                        <li><a href="" class="text-white">Fiqih Mu'amalah</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details>
                                    <summary class="text-white">Tahdzibul Akhlaq</summary>
                                    <ul class="p-2">
                                        <li><a href="" class="text-white">Penyakit Hati</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li><a href="" class="text-white">Aqidah</a></li>
                            <li>
                                <details>
                                    <summary class="text-white">Ta'bir</summary>
                                    <ul class="p-2">
                                        <li><a href="" class="text-white">Ibrah</a></li>
                                        <li><a href="" class="text-white">Hikmah</a></li>
                                        <li><a href="" class="text-white">Fiqh Sirah</a></li>
                                        <li><a href="" class="text-white">Fadlilah Sahabat</a></li>
                                    </ul>
                                </details>
                            </li>

                            <li><a href="" class="text-white">Mimbar</a></li>
                        </ul>
                    </details>
                </li> --}}
                <li><a href="{{ route('berita.index')}}" class="text-white">Berita</a></li>
                <li><a href="{{ route('kajian')}}" class="text-white">Kajian</a></li>
                <li>
                    <details>
                        <summary class="text-white">Media Partner</summary>
                        <ul class="p-2">
                            <li><a href="https://ngaoskuy.co.id" class="text-white" target="_blank">Ngaoskuy</a></li>
                            <li><a href="https://ufhsofficial.glide.page" class="text-white " target="_blank">UFHS
                                    Official</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="{{ route('logs')}}" class="text-white">Logs</a></li>
            </ul>
        </div>

        <a href="{{route('beranda')}}" class="flex items-center gap-2">
            <div class="avatar">
                <div class="w-10">
                    <img src="{{ asset('img/logo/aiwf_2.png') }}" alt="AIWF Logo">
                </div>
            </div>
            <span class="text-white"
                style="font-family: 'Lora', Cambria, serif; font-weight: 400; white-space: nowrap;">
                AHLUL ILMI WAL FADHLI
            </span>
        </a>

    </div>
    {{-- Desktop navbar --}}
    <div class="navbar-center hidden lg:flex z-[999]">
        <ul class="menu menu-horizontal px-1 space-x-4">
            <li><a href="{{ route('beranda')}}" class="text-white">Beranda</a></li>

            <li class="relative">
                <details class="peer relative">
                    <summary
                        class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                        Profil
                    </summary>
                    <ul class="absolute left-0 bg-zinc-800 text-black rounded-box p-2 mt-2 shadow-lg w-48">
                        <li><a href="{{ route('about')}}" class="text-white">Tentang Kami</a></li>
                        {{-- <li><a href="{{ route('visi-misi')}}" class="text-white">Visi dan Misi</a></li> --}}
                        {{-- <li><a href="{{ route('struktur')}}" class="text-white">Struktur Organisasi</a></li> --}}
                        {{-- <li><a href="{{ route('departemen')}}" class="text-white">Departemen Yayasan</a></li> --}}
                        <li><a href="{{ route('galeri')}}" class="text-white">Galeri Kegiatan</a></li>
                    </ul>
                </details>
            </li>

            <li><a href="{{ route('artikel.index')}}" class="text-white">Artikel</a></li>
            {{-- <li class="relative">
                <details class="peer relative">
                    <summary
                        class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden relative">
                        Artikel

                    </summary>

                    <ul class="absolute left-0 bg-zinc-800 text-black rounded-box p-2 mt-2 shadow-lg w-48">
                        <li><a href="{{route('artikel.index')}}" class="text-white">Halaman Utama</a></li>
                        <li class="relative">
                            <details class="peer relative">
                                <summary
                                    class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden relative">
                                    Al-Qur'an
                                </summary>
                                <ul
                                    class="absolute left-full top-0 bg-zinc-800 text-black rounded-box p-2 mt-0 shadow-lg w-48">
                                    <li><a href="" class="text-white">Tafsir</a></li>
                                    <li><a href="" class="text-white">Ayatul Ahkam</a></li>
                                    <li><a href="" class="text-white">Ulumul Qur'an</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="relative">
                            <details class="peer relative">
                                <summary
                                    class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                                    Hadits
                                </summary>
                                <ul
                                    class="absolute left-full top-0 bg-zinc-800 text-black rounded-box p-2 mt-0 shadow-lg w-48">
                                    <li><a href="" class="text-white">Syarh Hadits</a></li>
                                    <li><a href="" class="text-white">Hadits Dlo'if</a></li>
                                    <li><a href="" class="text-white">Ulumul Hadits</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="relative">
                            <details class="peer relative">
                                <summary
                                    class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                                    Fiqih
                                </summary>
                                <ul
                                    class="absolute left-full top-0 bg-zinc-800 text-black rounded-box p-2 mt-0 shadow-lg w-48">
                                    <li><a href="" class="text-white">Shalat</a></li>
                                    <li><a href="" class="text-white">Fiqih Ibadah</a></li>
                                    <li><a href="" class="text-white">Fiqih Mu'amalah</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="relative">
                            <details class="peer relative">
                                <summary
                                    class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                                    Tahdzibul Akhlaq
                                </summary>
                                <ul
                                    class="absolute left-full top-0 bg-zinc-800 text-black rounded-box p-2 mt-0 shadow-lg w-48">
                                    <li><a href="" class="text-white">Penyakit Hati</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a href="" class="text-white">Aqidah</a></li>
                        <li class="relative">
                            <details class="peer relative">
                                <summary
                                    class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                                    Ta'bir
                                </summary>
                                <ul
                                    class="absolute left-full top-0 bg-zinc-800 text-black rounded-box p-2 mt-0 shadow-lg w-48">
                                    <li><a href="" class="text-white">Ibrah</a></li>
                                    <li><a href="" class="text-white">Hikmah</a></li>
                                    <li><a href="" class="text-white">Fiqh Sirah</a></li>
                                    <li><a href="" class="text-white">Fadlilah Sahabat</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a href="" class="text-white">Mimbar</a></li>
                    </ul>
                </details>
            </li> --}}
            <li><a href="{{ route('berita.index')}}" class="text-white">Berita</a></li>
            <li><a href="{{ route('kajian')}}" class="text-white">Kajian</a></li>


            <li class="relative">
                <details class="peer relative">
                    <summary
                        class="text-white cursor-pointer flex items-center gap-2 [&::-webkit-details-marker]:hidden">
                        Media Partner

                    </summary>
                    <ul class="absolute left-0 bg-zinc-800 text-black rounded-box p-2 mt-2 shadow-lg w-48">
                        <li><a href="https://ngaoskuy.co.id" class="text-white" target="_blank">Ngaoskuy</a></li>
                        <li><a href="https://ufhsofficial.glide.page" class="text-white" target="_blank">UFHS
                                Official</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="{{ route('logs')}}" class="text-white">Logs</a></li>
        </ul>
    </div>


    <div class="navbar-end">
        {{-- <a href="{{ route('login')}}" class="btn btn-neutral">Login</a> --}}
    </div>
</div>