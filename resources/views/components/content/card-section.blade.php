@props(['title', 'categories', 'items', 'routePrefix'])

@php
    $tipeKonten = $routePrefix;
@endphp

<section class="py-10 bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- TITLE --}}
        <h2 class="font-manrope text-2xl font-bold text-gray-900 text-center mb-8">
            {{ $title }}
        </h2>

        {{-- CATEGORY FILTER (tetap disimpan sesuai struktur asli ketika dibutuhkan) --}}
        {{-- 
        @if ($categories)
            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-2 gap-2 sm:flex sm:flex-wrap sm:justify-center">
                    @foreach ($categories as $category)
                        <a href="{{ route($routePrefix . '.kategori', $category) }}"
                            class="btn btn-outline w-full sm:w-auto border-gray-400 text-gray-700
                                hover:bg-gray-200 transition rounded-lg"
                            style="background-color: {{ $category->bg_color }};
                                   color: {{ $category->text_color }};">
                            {{ $category->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endif 
        --}}

        {{-- LIST CONTENT --}}
        @if ($items->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                @foreach ($items as $item)
                    <div class="group w-full bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition">

                        {{-- IMAGE --}}
                        <div>
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                class="rounded-t-2xl w-full h-[25vh] md:h-[30vh] object-cover">
                        </div>

                        {{-- BODY CONTENT --}}
                        <div class="p-5 lg:p-6">

                            {{-- DATE --}}
                            <span class="text-sm text-gray-500 font-medium block mb-1">
                                {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                            </span>

                            {{-- TITLE --}}
                            <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-3">
                                {{ $item->title }}
                            </h4>

                            {{-- BODY TEXT --}}
                            <p class="text-gray-600 text-sm md:text-base leading-6 mb-5 break-words">
                                {{ Str::limit(html_entity_decode(strip_tags($item->body), ENT_QUOTES | ENT_HTML5, 'UTF-8'), 80) }}
                            </p>

                            {{-- READ MORE (masih placeholder) --}}
                            <a class="text-blue-600 hover:underline cursor-pointer">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>
                @endforeach

            </div>

        @else
            {{-- EMPTY STATE --}}
            <div class="flex flex-col justify-center items-center h-[50vh] text-center">
                <p class="text-lg text-gray-600">
                    Belum ada {{ $tipeKonten }} terbaru.
                </p>
            </div>
        @endif

        {{-- PAGINATION --}}
        <div class="mt-10 text-center">
            {{ $items->links() }}
        </div>

    </div>
</section>
