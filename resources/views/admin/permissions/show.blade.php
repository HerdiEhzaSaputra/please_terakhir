<x-app-layout>

    <x-slot name="title">
        {{ __('global.show') }} {{ __('cruds.permission.title') }}
    </x-slot>

    <a class="justify-end" href="{{ url()->previous() }}">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            {{ __('global.back') }}
        </button>
    </a>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('global.show') }} {{ __('cruds.permission.title') }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>
        </div>

        <div class="card-body">
            <div class="mb-2">
                <dl>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.permission.fields.id') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $permission->id }}</dd>
                    </div>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.permission.fields.title') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $permission->name }}</dd>
                    </div>
                    <div class="border-t bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">{{ __('cruds.permission.fields.description') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $permission->description }}</dd>
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
