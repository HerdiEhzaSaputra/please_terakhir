<x-app-layout>
    <x-slot name="title">
        {{ __('cruds.user.title_singular') }} {{ __('global.list') }}
    </x-slot>

    <livewire:setting.index />

    <div class="py-2 border-b">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ __('global.edit') }} {{ __('cruds.user.title_singular') }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">this is profile</p>
    </div>

    <div id="myTabContent">
        <div class="py-2">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
    </div>

</x-app-layout>
