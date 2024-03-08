<x-auth-layout class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md p-6 sm:p-8 dark:bg-gray-800">
    <h2 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">
        Forgot your password?
    </h2>
    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
        Don't fret! Just type in your email and we will send you a code to reset your password!
    </p>
    <x-form method="POST" action="#">
        <x-input
            type="email"
            name="email"
            id="email"
            placeholder="name@company.com"
            title="Your email"
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
                <label for="remember" class="font-medium text-gray-900 dark:text-white">I accept the <a href="#" class="text-primary-700 hover:underline dark:text-primary-500">Terms and Conditions</a></label>
            </div>
        </div>
        <x-button
            type="submit"
            bgColor="primary-700"
            hoverBgColor="primary-800"
            darkBgColor="primary-600"
            darkHoverBgColor="primary-700"
        >Reset password</x-button>
    </x-form>
</x-auth-layout>
