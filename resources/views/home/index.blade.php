<html lang="en">
@include('components.header')

<body class="bg-white">
  @include('components.navbar')
  @foreach ($beranda as $b)

    <div class="relative isolate overflow-hidden bg-white py-20 sm:py-28">

      <!-- Background image (lebih terang, tanpa blend gelap) -->
      <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80" alt=""
        class="absolute inset-0 -z-10 size-full object-cover object-center opacity-30">

      <!-- Soft gradient decoration -->
      <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:blur-3xl opacity-40"
        aria-hidden="true">
        <div class="aspect-1097/845 w-[68.5625rem] bg-gradient-to-tr from-pink-300 to-indigo-300"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
            {{ $b['beranda_title'] }}
          </h2>
          <p class="mt-8 text-lg font-medium text-gray-700 sm:text-xl">
            {{ $b['beranda_deskripsi'] }}
          </p>
        </div>

        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
          <div
            class="grid grid-cols-1 gap-x-8 gap-y-6 text-lg font-semibold text-blue-600 sm:grid-cols-2 md:flex lg:gap-x-10">
            <a href="{{ route('artikel.index') }}">artikel →</a>
            <a href="{{ route('berita.index') }}">berita →</a>
            <a href="{{ route('kajian') }}">kajian →</a>
            <a href="{{ route('streaming.index') }}">live streaming →</a>
          </div>

          <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">

            <div class="flex flex-col-reverse gap-1">
              <dt class="text-base text-gray-600">Offices worldwide</dt>
              <dd class="text-4xl font-semibold tracking-tight text-gray-900">{{ $b['jumlah_departemen'] }}</dd>
            </div>

            <div class="flex flex-col-reverse gap-1">
              <dt class="text-base text-gray-600">program</dt>
              <dd class="text-4xl font-semibold tracking-tight text-gray-900">{{ $b['jumlah_kegiatan'] }}</dd>
            </div>

            <div class="flex flex-col-reverse gap-1">
              <dt class="text-base text-gray-600">Hours per week</dt>
              <dd class="text-4xl font-semibold tracking-tight text-gray-900">{{ $b['jumlah_SDM'] }}</dd>
            </div>

            <div class="flex flex-col-reverse gap-1">
              <dt class="text-base text-gray-600">Paid time off</dt>
              <dd class="text-4xl font-semibold tracking-tight text-gray-900">{{ $b['jadwal_kajian'] }}</dd>
            </div>

          </dl>
        </div>
      </div>

    </div>
  @endforeach
  @include('components.footer')
</body>

</html>