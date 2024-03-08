<x-backend.top-navbar.app-toggler-button />

<div
    class="z-20 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:bg-gray-700 dark:divide-gray-600"
    id="apps-dropdown"
    data-popper-placement="bottom"
    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1395.2px, 64.8px, 0px);">
    <x-backend.top-navbar.dropdown-title title="Apps" />
    <div class="grid grid-cols-3 gap-4 p-4">
        <x-backend.top-navbar.app-link title="Sales">
            <x-backend.icons.shopping-bag />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Users">
            <x-backend.icons.users />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Inbox">
            <x-backend.icons.inbox />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Profile">
            <x-backend.icons.profile />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Settings">
            <x-backend.icons.settings />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Products">
            <x-backend.icons.briefcase />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Pricing">
            <x-backend.icons.doller-sign />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Billing">
            <x-backend.icons.billing-receipt />
        </x-backend.top-navbar.app-link>
        <x-backend.top-navbar.app-link title="Logout">
            <x-backend.icons.logout />
        </x-backend.top-navbar.app-link>
    </div>
</div>
