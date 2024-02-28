<!doctype html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
			x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
			x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- icon to show on windows tab with title --}}
    <link rel="icon" type="image/x-icon" href="https://flowbite-admin-dashboard.vercel.app/images/logo.svg">
    <title>Backend Dashboard - Mehkaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    <x-backend.header/>

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <x-backend.sidebar class="min-w-fit flex-grow-0 flex-shrink-0 hidden md:block"/>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main @class(['px-4 pt-6' => $extraSpacing])>
                {{ $slot }}
            </main>

            <x-backend.footer />

            <x-backend.copyright />
        </div>
    </div>
</body>

</html>
