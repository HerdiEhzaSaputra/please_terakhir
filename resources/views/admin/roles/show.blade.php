<x-app-layout>
    <a class="justify-end" href="{{ url()->previous() }}">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                {{ __('global.back') }}
        </button>
    </a>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('global.show') }} {{ __('cruds.role.title') }}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>
        </div>

        <div class="card-body">
            <div class="mb-2">
                <dl>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.role.fields.id') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $role->id }}</dd>
                    </div>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.role.fields.title') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $role->name }}</dd>
                    </div>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.role.fields.description') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $role->description }}</dd>
                    </div>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Permissions</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @foreach($role->permissions()->pluck('name') as $permission)
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-900">{{ $permission }}</span>
                            @endforeach
                        </dd>
                    </div>
                </dl>
            </div>

            <nav class="mb-3">
                <div class="nav nav-tabs">

                </div>
            </nav>
            <div class="tab-content">

            </div>
        </div>
    </div>
</x-app-layout>
