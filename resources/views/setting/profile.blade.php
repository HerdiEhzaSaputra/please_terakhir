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
            <div class="flex justify-between">
                <div>
                    <input class="sr-only" id="option1" type="radio" tabindex="-1" />
                    <label for="option1" class="block w-full" tabindex="0">
                        <span class="text-sm font-medium text-left"> Name </span>
                    </label>
                </div>

                <div>
                    <input class="sr-only" id="option2" type="radio" tabindex="-1" />
                    <label for="option2" class="block w-full" tabindex="0">
                        <span class="text-sm font-medium text-left"> {{ Auth::user()->name }} </span>
                    </label>
                </div>

                <div>
                    <input class="sr-only" id="option3" type="radio" tabindex="-1" />
                    <label for="option3" class="block w-full" tabindex="0">
                        <span class="text-sm font-medium text-right"> update </span>
                    </label>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
