@php
    $isEdit = $permission ?? false;
    $method = $isEdit ? 'PUT' : 'POST';
    $action = $isEdit ? route('dashboard.permissions.update', $permission->id) : route('dashboard.permissions.store');
@endphp
<section class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <header>
        <h4
            class="inline-flex items-center mb-6 text-lg font-semibold text-gray-800 dark:text-gray-400">
            {{ $isEdit ? 'Edit' : 'Create' }} Permission
        </h4>
    </header>
    <x-form
        id="permission-form"
        :action="$action"
        :method="$method">
        <div class="space-y-4">
            <x-input
                name="name"
                title="Permission Name"
                :value="$permission->name ?? ''"
                requried
            />
            <x-input
                name="guard_name"
                title="Guard Name"
                :value="$permission->guard_name ?? ''"
                required
            />
        </div>
        <div class="flex justify-center w-full mt-4 space-x-4">
            <button
                type="submit"
                class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                @if($isEdit)
                    Update
                @else
                    Create
                @endif
            </button>

            @if($isEdit)
                <a
                    href="{{ route('dashboard.permissions.index') }}"
                    class="w-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                >
                    Cancel
                </a>
                <button
                    form="delte-form"
                    type="submit"
                    onclick="return confirm('Are you sure?')"
                    class="w-full justify-center text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <x-backend.icons.trash class="w-5 h-5 mr-1 -ml-1" />
                    Delete
                </button>
            @else
                <button
                    type="reset"
                    class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    <x-backend.icons.cross class="w-5 h-5 -ml-1 sm:mr-1" />
                    Reset
                </button>
            @endif
        </div>
    </x-form>
    @if($isEdit)
        <x-delete-form
            id="delte-form"
            :action="route('dashboard.permissions.destroy', $permission->id)"
        ></x-delete-form>
    @endif
</section>
