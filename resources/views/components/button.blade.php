<button type="{{ $type }}" {{ $attributes->merge(['class' => 'rounded-md px-2 py-1 text-center text-slate-700 shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-50']) }}>
    {{ $slot }}
</button>
