<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <x-backend.top-navbar.sidebar-toggler-button />
                <x-backend.top-navbar.logo-button />
                <x-backend.top-navbar.search-form />
            </div>
            <div class="flex items-center">
                <x-backend.top-navbar.mobile-search-toggler-button />
                <x-backend.top-navbar.notifications />
                <x-backend.top-navbar.apps />
                <x-backend.top-navbar.dark-mode-toggle />
                <x-backend.top-navbar.profile-settings />
            </div>
        </div>
    </div>
</nav>
