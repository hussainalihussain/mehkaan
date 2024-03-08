@props([
    'title' => ''
])
<div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    {{ $title ?: $slot }}
</div>
