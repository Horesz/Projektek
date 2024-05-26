@props(['name', 'label'])

<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="file" id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>