@props(['id', 'name', 'label'])

<div {{ $attributes }}>
    <input type="checkbox" id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-checkbox']) }}>
    <label for="{{ $id }}" class="ml-2">{{ $label }}</label>
</div>