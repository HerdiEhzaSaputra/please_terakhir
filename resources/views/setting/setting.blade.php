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

    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <div class="w-5 h-5">
            <svg id="theme-toggle-dark-icon" class="hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </div>
    </button>

    @if (count(config('panel.available_languages', [])) > 1)
            @foreach (config('panel.available_languages') as $langLocale => $langName)

            @endforeach

        <div class="flex px-4 py-2 text-sm leading-5 text-gray-700 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
            <a class="p-3 bg-transparent focus:outline-none focus:bg-blue-700 active:bg-blue-500 {{ strtoupper(app()->getLocale()) === strtoupper('id')? 'bg-blue-600 text-white hover:bg-blue-600': 'text-grey-700' }}"
                href="{{ url()->current() }}?change_language=id">
                <span class="sr-only"> {{ $langName }} </span>

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-3"
                    id="flag-icons-id" viewBox="0 0 640 480">
                    <g fill-rule="evenodd" stroke-width="1pt">
                        <path fill="#e70011" d="M0 0h640v249H0z" />
                        <path fill="#fff" d="M0 240h640v240H0z" />
                    </g>
                </svg>
            </a>
            <a class="p-3 bg-transparent focus:outline-none focus:bg-blue-700 active:bg-blue-500 {{ strtoupper(app()->getLocale()) === strtoupper('en')? 'bg-blue-600 text-white hover:bg-blue-600': 'text-grey-700' }}"
                href="{{ url()->current() }}?change_language=en">
                <span class="sr-only"> {{ $langName }} </span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-3"
                    id="flag-icons-gb" viewBox="0 0 640 480">
                    <path fill="#012169" d="M0 0h640v480H0z" />
                    <path fill="#FFF"
                        d="m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z" />
                    <path fill="#C8102E"
                        d="m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l240-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z" />
                    <path fill="#FFF" d="M241 0v480h160V0H241zM0 160v160h640V160H0z" />
                    <path fill="#C8102E" d="M0 193v96h640v-96H0zM273 0v480h96V0h-96z" />
                </svg>
            </a>
        </div>
    @endif

</x-app-layout>
