<html lang="en">
@include('components.header')
<a href=""></a>

<body class="bg-white">
  @include('components.navbar')

  <!-- VIDEO SECTION -->
  <div class="flex items-center justify-center mt-10 mb-16 px-4">
    <div class="w-full max-w-4xl aspect-video rounded-xl overflow-hidden shadow-lg">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/9ZhqYpNFyUA" frameborder="0"></iframe>
    </div>
  </div>

  <!-- HERO SECTION -->
  <div class="relative isolate overflow-hidden bg-gray-900 py-20 sm:py-24">

    <!-- Background -->
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=2830&q=80" alt=""
      class="absolute inset-0 -z-10 size-full object-cover object-center opacity-40">

    <!-- Gradient kiri -->
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:blur-3xl opacity-25"
      aria-hidden="true">
      <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff]"
        style="clip-path: polygon(74.1% 44.1%,100% 61.6%,97.5% 26.9%,85.5% 0.1%,80.7% 2%,72.5% 32.5%,60.2% 62.4%,52.4% 68.1%,47.5% 58.3%,45.2% 34.5%,27.5% 76.7%,0.1% 64.9%,17.9% 100%,27.6% 76.8%,76.1% 97.7%,74.1% 44.1%)">
      </div>
    </div>

    <!-- Gradient tengah -->
    <div class="absolute -top-48 left-1/2 -z-10 -translate-x-1/2 blur-3xl sm:top-[-26rem] sm:ml-16 opacity-25"
      aria-hidden="true">
      <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff]"
        style="clip-path: polygon(74.1% 44.1%,100% 61.6%,97.5% 26.9%,85.5% 0.1%,80.7% 2%,72.5% 32.5%,60.2% 62.4%,52.4% 68.1%,47.5% 58.3%,45.2% 34.5%,27.5% 76.7%,0.1% 64.9%,17.9% 100%,27.6% 76.8%,76.1% 97.7%,74.1% 44.1%)">
      </div>
    </div>

    <!-- TEXT CONTENT (tidak diubah sama sekali) -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">
          QS.Luqman(Eps. 15)
        </h2>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">
          Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
          fugiat veniam occaecat fugiat.
        </p>
      </div>

      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">

        <!-- LINKS (tidak diubah) -->
        <div
          class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
          <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
          <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
          <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
          <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
        </div>

        <!-- STATS (tidak diubah) -->
        <dl class="mt-14 grid grid-cols-1 gap-8 sm:mt-16 sm:grid-cols-2 lg:grid-cols-4">
          <div class="flex flex-col-reverse gap-1">
            <dt class="text-base/7 text-gray-300">Offices worldwide</dt>
            <dd class="text-4xl font-semibold tracking-tight text-white">12</dd>
          </div>
          <div class="flex flex-col-reverse gap-1">
            <dt class="text-base/7 text-gray-300">Full-time colleagues</dt>
            <dd class="text-4xl font-semibold tracking-tight text-white">300+</dd>
          </div>
          <div class="flex flex-col-reverse gap-1">
            <dt class="text-base/7 text-gray-300">Hours per week</dt>
            <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
          </div>
          <div class="flex flex-col-reverse gap-1">
            <dt class="text-base/7 text-gray-300">Paid time off</dt>
            <dd class="text-4xl font-semibold tracking-tight text-white">Unlimited</dd>
          </div>
        </dl>

      </div>
    </div>

  </div>

  @include('components.footer')
</body>

</html>