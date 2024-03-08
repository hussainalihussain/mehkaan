@props([
    'href'  => '#',
    'class' => 'text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white'
])

<a href="{{ $href }}" class="{{ $class }}">
    {{ $slot }}
</a>
