@include('components.header')

<body class="bg-gray-50">

    <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="{{ asset('img/logo/aiwf_2.png') }}" class="mx-auto h-14 w-auto" alt="Logo">

            <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">
                AIWF Media
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white p-8 rounded-xl shadow-md border border-gray-200">

            <form class="space-y-6" action="#" method="POST">

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">
                        Email address
                    </label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" required class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm
                                   focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm text-gray-900" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">
                            Password
                        </label>

                        <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                            Forgot password?
                        </a>
                    </div>

                    <div class="mt-2">
                        <input type="password" name="password" id="password" required class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm
                                   focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm  text-gray-900" />
                    </div>
                </div>

                <!-- Button -->
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 
                               text-sm font-semibold text-white shadow hover:bg-indigo-500
                               focus-visible:outline focus-visible:outline-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </div>

            </form>

            <!-- Register -->
            <p class="mt-8 text-center text-sm text-gray-600">
                Not a member?
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">
                    Start a 14 day free trial
                </a>
            </p>

        </div>

    </div>

</body>

</html>