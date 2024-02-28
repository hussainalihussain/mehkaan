<x-auth-layout class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md p-6 sm:p-8 dark:bg-gray-800">
    <div class="flex space-x-4">
        <img class="w-8 h-8 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png"
            alt="Bonnie image">
        <h2 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">Bonnie Green</h2>
    </div>
    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
        Better to be safe than sorry.
    </p>
    <x-form class="mt-8 space-y-6" action="#">
        <x-input
            type="password"
            name="password"
            id="password"
            placeholder="••••••••"
            title="Your password"
            required
        />
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <x-checkbox
                    id="remember"
                    name="remember"
                    required
                />
            </div>
            <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-white">I accept the <a href="#"
                        class="text-primary-700 hover:underline dark:text-primary-500">Terms and Conditions</a></label>
            </div>
        </div>
        <x-button
            type="submit"
            bgColor="primary-700"
            hoverBgColor="primary-800"
            darkBgColor="primary-600"
            darkHoverBgColor="primary-700"
            class="inline-flex items-center justify-center">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z">
                </path>
            </svg>
            Unlock
        </x-button>
    </x-form>
</x-auth-layout>
