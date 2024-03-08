<div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
    <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        <ul class="pb-2 space-y-2">
            <li>
                <x-backend.sidebar.search-form />
            </li>
            <li>
                <a href="https://flowbite-admin-dashboard.vercel.app/"
                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                    <x-backend.icons.dashboard />
                    <span class="ml-3" sidebar-toggle-item="">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                    aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
                    <x-backend.icons.layout />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Layouts</span>
                    <x-backend.icons.angle-down />
                </button>
                <ul id="dropdown-layouts" class="hidden py-2 space-y-2">
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/layouts/stacked/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Stacked</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/layouts/sidebar/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sidebar</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                    aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
                    <x-backend.icons.table />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">CRUD</span>
                    <x-backend.icons.angle-down />
                </button>
                <ul id="dropdown-crud" class="space-y-2 py-2 hidden ">
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/crud/products/"
                            class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Products</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/crud/users/"
                            class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Users</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="https://flowbite-admin-dashboard.vercel.app/settings/"
                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                    <x-backend.icons.settings
                        class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                    />
                    <span class="ml-3" sidebar-toggle-item="">Settings</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <x-backend.icons.page />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Pages</span>
                    <x-backend.icons.angle-down />
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/pages/pricing/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/pages/maintenance/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Maintenance</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/pages/404/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">404
                            not found</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/pages/500/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">500
                            server error</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                    aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
                    <x-backend.icons.lock />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                        sidebar-toggle-item="">Authentication</span>
                    <x-backend.icons.angle-down />
                </button>
                <ul id="dropdown-auth" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/sign-in"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign
                            in</a>
                    </li>
                    <li>
                        <a href="/sign-up"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign
                            up</a>
                    </li>
                    <li>
                        <a href="/forgot-password-2"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Forgot
                            password</a>
                    </li>
                    <li>
                        <a href="/reset-password-2/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Reset
                            password</a>
                    </li>
                    <li>
                        <a href="/profile-lock-2/"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile
                            lock</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                    aria-controls="dropdown-playground" data-collapse-toggle="dropdown-playground">
                    <x-backend.icons.cursor-clicked />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                        sidebar-toggle-item="">Playground</span>
                    <x-backend.icons.angle-down />
                </button>
                <ul id="dropdown-playground" class="space-y-2 py-2 hidden ">
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/playground/stacked/"
                            class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Stacked</a>
                    </li>
                    <li>
                        <a href="https://flowbite-admin-dashboard.vercel.app/playground/sidebar/"
                            class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Sidebar</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pt-2 space-y-2">
            <a href="https://github.com/themesberg/flowbite-admin-dashboard" target="_blank"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                <x-backend.icons.github />
                <span class="ml-3" sidebar-toggle-item="">GitHub Repository</span>
            </a>
            <a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                <x-backend.icons.docs />
                <span class="ml-3" sidebar-toggle-item="">Flowbite Docs</span>
            </a>
            <a href="https://flowbite.com/docs/components/alerts/" target="_blank"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                <x-backend.icons.components />
                <span class="ml-3" sidebar-toggle-item="">Components</span>
            </a>
            <a href="https://github.com/themesberg/flowbite-admin-dashboard/issues" target="_blank"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3" sidebar-toggle-item="">Support</span>
            </a>
        </div>
    </div>
</div>
