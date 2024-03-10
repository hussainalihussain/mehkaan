<x-form
    action="{{ route('logout') }}"
    method="POST"
    class="d-inline-block"
>
    <button
        type="submit"
        class="text-left w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
    >Sign out</button>
</x-form>
