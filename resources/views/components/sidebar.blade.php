<div x-data="{ open: true }" class="h-screen bg-gray-100 dark:bg-gray-900 shadow-md">
    <!-- Sidebar -->
    <div class="h-full flex flex-col">
        <!-- Toggle Button -->
        <button @click="open = !open"
            class="p-3 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-800">
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Navigation Links -->
        <nav class="flex-1 px-2 space-y-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center p-2 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300"
                :class="{ 'bg-gray-300 dark:bg-gray-700': window.location.pathname === '{{ route('dashboard') }}' }">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 10h11M9 21V3m4 18V3m4 0h4v18h-4m-4-4h4"></path>
                </svg>
                <span x-show="open" class="ml-2">Dashboard</span>
            </a>

            <a href="{{ route('admin.index') }}"
                class="flex items-center p-2 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300"
                :class="{ 'bg-gray-300 dark:bg-gray-700': window.location.pathname === '{{ route('admin.index') }}' }">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 17a4 4 0 0 1 8 0m-8 0v1m8-1v1m-8-5a4 4 0 1 1 8 0"></path>
                </svg>
                <span x-show="open" class="ml-2">Users</span>
            </a>

            <a href="{{ route('admin.index') }}"
                class="flex items-center p-2 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300"
                :class="{ 'bg-gray-300 dark:bg-gray-700': window.location.pathname === '{{ route('admin.index') }}' }">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4z"></path>
                </svg>
                <span x-show="open" class="ml-2">Posts</span>
            </a>
        </nav>
    </div>
</div>
