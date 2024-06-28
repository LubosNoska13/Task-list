<div class="mb-4">
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700 mb-2 tracking-wide">{{ ucfirst($name) }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $slot }}" @class(['shadow-sm rounded-md appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none','border-red-500' => $errors->has($name)]) /> 
    @error($name)
        <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
    @enderror
</div>