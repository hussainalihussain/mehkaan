@props([
    'type'              => 'submit',
    'text'              => 'Submit',
    'bgColor'           => 'primary-700',
    'hoverBgColor'      => 'primary-800',
    'darkBgColor'       => 'primary-600',
    'darkHoverBgColor'  => 'primary-700',
    'text'              => '',
    'class'             => ''
])
@php
    $classes = "w-full px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-$bgColor hover:bg-$hoverBgColor focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-$darkBgColor dark:hover:bg-$darkHoverBgColor dark:focus:ring-primary-800 " . $class;
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $text ?: $slot }}
</button>
