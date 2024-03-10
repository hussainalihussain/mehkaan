<section>
    <header>
        <h3 class="mb-4 text-xl font-semibold dark:text-white">{{ __('Password information') }}</h3>
    </header>
    <x-form
        action="{{ route('password.update') }}"
        method="put"
    >
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <x-input
                    type="password"
                    name="current_password"
                    :title="__('Current Password')"
                    :error="$errors->updatePassword->get('current_password')"
                    required
                />
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-input
                    type="password"
                    name="password"
                    id="password"
                    :title="__('New Password')"
                    :error="$errors->updatePassword->get('password')"
                    required
                    data-popover-target="popover-password" data-popover-placement="bottom"
                />
                <div data-popover="" id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(892.8px, -1412px, 0px);" data-popper-placement="top" data-popper-reference-hidden="" data-popper-escaped="">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Must have at least 6 characters</h3>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                            <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                            <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                            <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                        </div>
                        <p>It’s better to have:</p>
                        <ul>
                            <li class="flex items-center mb-1">
                                <svg class="w-4 h-4 mr-2 text-green-400 dark:text-green-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                Upper &amp; lower case letters
                            </li>
                            <li class="flex items-center mb-1">
                                <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                A symbol (#$&amp;)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                A longer password (min. 12 chars.)
                            </li>
                        </ul>
                </div>
                <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(139.2px, 0px, 0px);"></div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <x-input
                    type="password"
                    name="password_confirmation"
                    :title="__('Confirm Password')"
                    :error="$errors->updatePassword->get('password_confirmation')"
                    required
                />
            </div>

            <div class="col-span-6 sm:col-full">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
            </div>
        </div>
    </x-form>
</section>
