<!doctype html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- icon to show on windows tab with title --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/src/images/logo/logo.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/src/images/logo/logo-white.png') }}" media="(prefers-color-scheme: dark)">
    <title>Auth - Mehkaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    <main class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <a href="/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <img src="{{ asset('backend/src/images/logo/logo.png') }}" class="mr-4 h-11" alt="Mehkaan Logo">
                <span>Mehkaan</span>
            </a>
            <!-- Card -->
            <div class="{{ $attributes->get('class') ?: 'w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800' }}">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
