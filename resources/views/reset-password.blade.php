<x-auth-layout>
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
        Reset your password
    </h2>
    <x-form class="mt-8 space-y-6" action="#">
        <x-input
            type="email"
            name="email"
            id="email"
            placeholder="name@company.com"
            title="Your email"
            required
        />
        <x-input
            type="password"
            name="password"
            id="password"
            placeholder="••••••••"
            title="New password"
            required
        />
        <x-input
            type="password"
            name="password"
            id="password"
            placeholder="••••••••"
            title="Confirm New Password"
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
                        class="text-primary-700 hover:underline dark:text-primary-500">Terms and
                        Conditions</a></label>
            </div>
        </div>
        <x-button
            type="submit"
            bgColor="primary-700"
            hoverBgColor="primary-800"
            darkBgColor="primary-600"
            darkHoverBgColor="primary-700">Reset password</x-button>
    </x-form>
</x-auth-layout>
