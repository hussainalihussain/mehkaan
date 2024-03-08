<x-backend.top-navbar.notification-toggler-button />

<div
    class="z-20 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700"
    id="notification-dropdown"
    data-popper-placement="bottom"
    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1355.2px, 64.8px, 0px);">
    <x-backend.top-navbar.dropdown-title title="Notifications" />
    <div>
        <x-backend.top-navbar.notification-list-item
            picture="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png"
            when="a few moments ago"
            icon="zip"
        >
            New message from
            <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>:
            "Hey, what's up? All set for the presentation?"
        </x-backend.top-navbar.notification-list-item>
        <x-backend.top-navbar.notification-list-item
            picture="https://flowbite-admin-dashboard.vercel.app/images/users/jese-leos.png"
            when="10 minutes ago"
            icon="add-friend"
        >
            <span class="font-semibold text-gray-900 dark:text-white">Jese leos</span>
            and
            <span class="font-medium text-gray-900 dark:text-white">5 others</span>
            started following you.
        </x-backend.top-navbar.notification-list-item>
        <x-backend.top-navbar.notification-list-item
            picture="https://flowbite-admin-dashboard.vercel.app/images/users/joseph-mcfall.png"
            when="44 minutes ago"
            icon="heart"
        >
            <span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span>
            and
            <span class="font-medium text-gray-900 dark:text-white">141 others</span>
            love your story. See it and view more stories.
        </x-backend.top-navbar.notification-list-item>
        <x-backend.top-navbar.notification-list-item
            picture="https://flowbite-admin-dashboard.vercel.app/images/users/leslie-livingston.png"
            when="1 hour ago"
            icon="chat"
        >
            <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span>
            mentioned you in a comment:
            <span class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span>
            what do you say?
        </x-backend.top-navbar.notification-list-item>
        <x-backend.top-navbar.notification-list-item
            picture="https://flowbite-admin-dashboard.vercel.app/images/users/robert-brown.png"
            when="3 hours ago"
            icon="video"
        >
            <span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span>
            posted a new video: Glassmorphism - learn how to implement the new design trend.
        </x-backend.top-navbar.notification-list-item>
    </div>
    <x-backend.top-navbar.view-all-notification-button />
</div>
