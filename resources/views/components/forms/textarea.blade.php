@props(['name'])

@php
    $textarea_class = "shadow-sm rounded-md appearance-none border w-full h-60 py-2 px-3 text-gray-500 leading-tight focus:outline-none";
@endphp

<div class="mb-4">
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700 mb-2 tracking-wide">{{ ucwords($name) }}</label>
    <textarea name="{{ $name }}" @class([$textarea_class,'border-red-500' => $errors->has($name)])>{{ $slot }}</textarea> 
    @error($name)
        <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
    @enderror
</div>
