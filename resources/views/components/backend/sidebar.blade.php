<aside
    id="sidebar"
    class="fixed top-0 left-0 z-20 flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <x-backend.sidebar.menu />
        <x-backend.sidebar.bottom-menu />
    </div>
</aside>
<div class="bg-gray-900/50 dark:bg-gray-700/90 fixed hidden inset-0 z-10" id="sidebarBackdrop"></div>
