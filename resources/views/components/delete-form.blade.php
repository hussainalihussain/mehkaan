@props([
    'action',
    'class' => 'inline-block',
])
<x-form
    :action="$action"
    method="DELETE"
    class="inline-block"
    {{ $attributes }}
>
    {{ $slot }}
</x-form>
