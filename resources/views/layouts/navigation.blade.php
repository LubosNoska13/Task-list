<nav class="bg-white border-b border-gray-100 shadow-sm">
    <div class="container mx-auto max-w-7xl p-4 flex justify-between">
        <h3><a href="{{ route('tasks.index') }}" class="font-bold">Task List<a/></h3>

        <!-- User avatar -->
        <div>
            <!-- photo -->
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full md:me-0" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('assets/img/profile-1.jpg') }}" alt="user photo" />
                User name
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownAvatarName" class="z-10 hidden mt-6 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <div class="px-4 py-3 text-sm text-gray-900 ">
                    <div class="font-medium ">Admin</div>
                    <div class="truncate">gmail@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Settings</a>
                    </li>
                </ul>
                <div class="py-2">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</nav>