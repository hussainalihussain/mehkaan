@props([
    'href'  => '#',
    'text'  => 'Link Text',
    'class' => 'mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400'
])

<li>
    <a href="{{ $href }}" class="{{ $class }}">{{ $text ?: $slot }}</a>
</li>
