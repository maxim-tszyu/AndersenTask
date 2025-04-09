@props(['label','name'])
@php
    $input_defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'placeholder' => ucfirst($name)
    ];
@endphp
<div>
    <input {{$attributes->merge($input_defaults)}}
    @if($label)
        <x-forms.label :$name :$label></x-forms.label>
    @endif
    <div>
        {{ $slot }}
        <x-forms.error :error="$errors->first($name)"></x-forms.error>
    </div>
</div>
