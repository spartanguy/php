@props(['active' => false])
:active = "false" booliennél
<a {{ $attributes }} >{{ $slot }}</a>

@if ?Php if()

@else       ?Php else()

@endif

