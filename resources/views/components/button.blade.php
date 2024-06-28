<button type="submit" {{ $attributes->merge(['class' => 'text-white bg-gray-800 hover:bg-gray-900 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:hover:bg-gray-700']) }}>
    {{ $slot }}
</button>
