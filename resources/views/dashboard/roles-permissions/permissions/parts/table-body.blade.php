<tbody
    dusk="permission-table-body"
    class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
    @foreach ($permissions as $index => $permission)
        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
            <td class="w-4 p-4">
                <div class="flex items-center">
                    <input
                        id="checkbox-{{ $index }}"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600"
                    />
                    <label for="checkbox-194556" class="sr-only">checkbox</label>
                </div>
            </td>
            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                <div class="text-base font-semibold text-gray-900 dark:text-white">
                    {{ $permission->name }}
                </div>
                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Used inside: Role1, Role2, User1, User2....
                </div>
            </td>
            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                {{ $permission->guard_name }}
            </td>
            <td class="w-1/3 p-4 space-x-2 whitespace-nowrap">
                <a
                    href="{{ route('dashboard.permissions.edit', $permission->id) }}"
                    class="permission-update-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <x-backend.icons.pencil />
                    Edit
                </a>
                <x-delete-form
                    :action="route('dashboard.permissions.destroy', $permission->id)"
                    name="permission-delete-form-{{ $index }}"
                    id="permission-delete-form-{{ $permission->id }}"
                >
                    <button
                        type="submit"
                        id="{{ "permission-delete-form-$permission->id" }}"
                        dusk="delete-item-button"
                        onclick="return confirm('Are you sure?')"
                        class="delete-item inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                    >
                        <x-backend.icons.trash class="w-4 h-4 mr-2" />
                        Delete item
                    </button>
                </x-delete-form>
            </td>
        </tr>
    @endforeach
</tbody>
