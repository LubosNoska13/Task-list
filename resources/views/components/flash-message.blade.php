@props(['type'])

@if (session($type))
    <div class="absolute top-0 right-4">
        @if ($type === 'success')
        <div id="flash-message" class="relative min-w-80 shadow-sm rounded-xl border border-green-300 text-green-700 bg-green-100 px-4 py-3" role="alert">
        @else
        <div id="flash-message" class="relative min-w-80 shadow-sm rounded-xl border border-red-300 text-red-700 bg-red-100 px-4 py-3" role="alert">
        @endif
            <p class="font-medium mb-2">Success!<p/>
            <p>{{ session($type) }}</p>

            <span id="flash-message-cross" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" @click="flash = false"
                    stroke="currentColor" class="h-6 w-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </div>
    </div>
@endif