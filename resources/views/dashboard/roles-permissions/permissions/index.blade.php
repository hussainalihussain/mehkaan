<x-backend-layout :extra-spacing="false">
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <x-backend.breadcrumb />
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All permissions</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">

                    @include('dashboard.roles-permissions.permissions.parts.search-form')

                    <div class="flex items-center w-full sm:justify-end">
                        <div class="flex pl-2 space-x-1">

                            @include('dashboard.roles-permissions.permissions.parts.bulk-action-buttons')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-8 overflow-auto">
                @include('dashboard.roles-permissions.permissions.parts.table')
                {{ $permissions->links() }}
            </div>
            <div class="col-span-12 lg:col-span-4 p-3">
                @include('dashboard.roles-permissions.permissions.parts.form')
            </div>
        </div>
    </div>
</x-backend-layout>
