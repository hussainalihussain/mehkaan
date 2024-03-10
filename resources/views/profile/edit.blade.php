<x-backend-layout :extra-spacing="false">
    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <x-backend.breadcrumb />
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">User settings</h1>
        </div>
        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    @include('profile.partials.update-picture-form')
                </div>
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                @include('profile.partials.update-language-time-form')
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flow-root">
                    @include('profile.partials.update-social-accounts-form')
                </div>
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flow-root">
                    @include('profile.partials.update-other-accounts-form')
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                @include('profile.partials.update-password-form')
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flow-root">
                    @include('profile.partials.update-sessions-form')
                </div>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-1 px-4 xl:grid-cols-2 xl:gap-4">
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
            <div class="flow-root">
                @include('profile.partials.update-alert-notifications-form')
            </div>
        </div>
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
            <div class="flow-root">
                @include('profile.partials.update-email-notifications-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-backend-layout>
