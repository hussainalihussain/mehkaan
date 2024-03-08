<div class="flex items-center ml-3">
    <div>
        <x-backend.top-navbar.profile-setting-toggler-button />
    </div>

    <div
        class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
        id="dropdown-2"
        data-popper-placement="bottom"
        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1483.2px, 60.8px, 0px);">
        <x-backend.top-navbar.profile-heading />
        <ul
            class="py-1"
            role="none">
            <x-backend.top-navbar.profile-setting-item
                link="#"
                title="Dashboard"
            />
            <x-backend.top-navbar.profile-setting-item
                title="Settings"
            />
            <x-backend.top-navbar.profile-setting-item
                title="Earnings"
            />
            <x-backend.top-navbar.profile-setting-item
                title="Sign out"
            />
        </ul>
    </div>
</div>
