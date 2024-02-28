@props([
    'enctype' => '',
    'method' => 'POST'])

<form
    {{ $attributes->merge(['class' => 'mt-8 space-y-6']) }}
    @if($enctype) enctype="{{ $enctype }}" @endif
    method="{{ strtoupper($method) }}">
    @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE', 'POST']))
        @csrf
    @endif

    {{ $slot }}
</form>
