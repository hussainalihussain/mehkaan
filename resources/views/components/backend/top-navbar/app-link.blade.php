@props([
    'link' => '#',
    'title'
])
<a
    href="{{ $link }}"
    class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
    {{ $slot }}
    <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $title }}</div>
</a>
