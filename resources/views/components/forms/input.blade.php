@props(['name', 'label',  'type', 'font_bold' => true])

@php
    $input_class = "shadow-sm rounded-md appearance-none border w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none";

    if ($font_bold) {
        $input_class .= " font-medium";
    }
@endphp

<div class="mb-4">
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700 mb-2 tracking-wide">{{ ucwords($label) }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $slot }}" @class([$input_class,'border-red-500' => $errors->has($name)]) /> 
    @error($name)
        <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
    @enderror
</div>
