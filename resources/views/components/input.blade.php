@props([
    'type'          => 'text',
    'required'      => false,
    'title'         => '',
    'placeholder'   => '',
    'id'            => '',
    'name'          => '',
    'value'         => '',
    'error'         => '',
    'requiredStar'  => false,
])

<div>
    <label
        for="{{ $id }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $title }}
        @if($required && $requiredStar) <span class="text-red-500">*</span> @endif
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{ $attributes }}
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
    />
    <x-input-error :messages="$error" class="mt-2" />
</div>
