<div class="mb-4">
    <label for="{{ $name }}" class="uppercase text-slate-700 mb-2">{{ $name }}</label> <br />
    <textarea name="{{ $name }}" @class(['shadow-sm rounded-md appearance-none border w-full h-60 py-2 px-3 text-slate-700 leading-tight focus:outline-none','border-red-500' => $errors->has($name)])>{{ $slot }}</textarea> 
    @error($name)
        <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
    @enderror
</div>
