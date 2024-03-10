<x-auth-layout>
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
        {{ __('Sign in to platform') }}
    </h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-form
        action="{{ route('login') }}"
        method="post"
        class="mt-8 space-y-6">
        <x-input
            type="email"
            name="email"
            id="email"
            :title="__('Email')"
            required
            :error="$errors->get('email')"
        />

        <x-input
            type="password"
            name="password"
            id="password"
            :title="__('Password')"
            required
            :error="$errors->get('password')"
        />

        <div class="flex items-start">
            <div class="flex items-center h-5">
                <x-checkbox
                    id="remember"
                    name="remember"
                />
            </div>
            <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-white">{{ __('Remember me') }}</label>
            </div>
            <a
                href="{{ route('password.request') }}"
                class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">
                {{ __('Forgot your password?') }}
            </a>
        </div>
        <x-button
            type="submit"
            bgColor="primary-700"
            hoverBgColor="primary-800"
            darkBgColor="primary-600"
            darkHoverBgColor="primary-700">{{ __('Log in') }}</x-button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
            {{ __('Not registered?') }}
            <a
                href="{{ route('register') }}"
                class="text-primary-700 hover:underline dark:text-primary-500"
            >{{ __('Create account') }}</a>
        </div>
    </x-form>
</x-auth-layout>
