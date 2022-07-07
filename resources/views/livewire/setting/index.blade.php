<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
        data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <a href="{{ route('setting.profile') }}">
                <button class="{{ request()->is('setting/profile') ? 'text-blue-500 border-b-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }} inline-block p-4 rounded-t-lg border-b-2">
                    Profile
                </button>
            </a>
        </li>
        <li class="mr-2" role="presentation">
            <a href="{{ route('setting.dashboard') }}">
                <button class="{{ request()->is('setting/dashboard') ? 'text-blue-500 border-b-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }} inline-block p-4 rounded-t-lg border-b-2">
                    Dashboard
                </button>
            </a>
        </li>
        <li class="mr-2" role="presentation">
            <a href="{{ route('setting.settings') }}">
                <button class="{{ request()->is('setting/settings') ? 'text-blue-500 border-b-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }} inline-block p-4 rounded-t-lg border-b-2">
                    Settings</button>
                </a>
        </li>
    </ul>
</div>
