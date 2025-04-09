@props(['label','name'])
@php
    $input_defaults = [
        'class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'placeholder' => ucfirst($name)
    ];
@endphp
<div class="mb-4">
    @if($label)
        <x-forms.label :$name :$label></x-forms.label>
    @endif
    <input {{$attributes->merge($input_defaults)}}>
    <div>
        {{ $slot }}
        <x-forms.error :error="$errors->first($name)"></x-forms.error>
    </div>
</div>
