<x-auth-layout>
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
        {{ __('Create a Free Account') }}
    </h2>
    <x-form
        :action="route('register')"
        method="POST"
        class="mt-8 space-y-6">
        <x-input
            name="name"
            id="name"
            :title="__('Name')"
            required
            :error="$errors->get('name')"
        />
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
        <x-input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            :title="__('Confirm Password')"
            required
            :error="$errors->get('password_confirmation')"
        />
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <x-checkbox
                    id="terms_and_conditions"
                    name="terms_and_conditions"
                />
            </div>
            <div class="ml-3 text-sm">
                <label for="terms_and_conditions" class="font-medium text-gray-900 dark:text-white">
                    {{ __('I accept the') }}
                    <a href="#" class="text-primary-700 hover:underline dark:text-primary-500">
                        {{ __('Terms and Conditions') }}
                    </a>
                </label>
            </div>
        </div>
        <x-button
            type="submit"
            bgColor="primary-700"
            hoverBgColor="primary-800"
            darkBgColor="primary-600"
            darkHoverBgColor="primary-700">
            {{ __('Create account') }}
        </x-button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
            {{ __('Already have an account?') }}
            <a
                href="{{  route('login') }}"
                class="text-primary-700 hover:underline dark:text-primary-500">
                {{ __('Login here') }}
            </a>
        </div>
    </x-form>
</x-auth-layout>
