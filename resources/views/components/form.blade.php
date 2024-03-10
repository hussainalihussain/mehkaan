@props([
    'enctype' => '',
    'method' => 'POST',
    'action' => '#',
    'class'  => '',
])

<form
    @if($enctype) enctype="{{ $enctype }}" @endif
    action="{{ $action }}"
    method="{{ in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']) ? 'post' : strtolower($method) }}"
    class="{{ $class }}">

    @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE', 'POST']))
        @csrf
    @endif

    {{ $slot }}
</form>
