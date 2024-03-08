@props([
    'picture',
    'icon',
    'when',
])
<a
    href="#"
    class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
    <div class="flex-shrink-0">
        <img
            class="rounded-full w-11 h-11"
            src="{{ $picture }}"
            alt="Jese image"
        />
        <div
            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
            @switch($icon)
                @case('zip')
                    <x-backend.icons.zip />
                    @break
                @case('heart')
                    <x-backend.icons.heart />
                    @break
                @case('add-friend')
                    <x-backend.icons.person-plus />
                    @break
                @case('video')
                    <x-backend.icons.video />
                    @break
                @default
                    <x-backend.icons.chat />
            @endswitch
        </div>
    </div>
    <div class="w-full pl-3">
        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
            {{ $slot }}
        </div>
        <div class="text-xs font-medium text-primary-700 dark:text-primary-400">
            {{ $when }}
        </div>
    </div>
</a>
