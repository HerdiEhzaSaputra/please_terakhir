<x-app-layout>
    <x-slot name="title">
        {{ __('cruds.user.title_singular') }} {{ __('global.list') }}
    </x-slot>

    <div x-data="{ activeTab: 'productDetails' }" x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : 'productDetails'">
        <nav>
            <ul class="flex flex-wrap gap-4">
                <li>
                    <a @click="activeTab = 'productDetails'" :class="{ 'font-bold': activeTab === 'productDetails' }"
                        class="block p-3 text-white bg-black rounded-lg" href="#productDetails">
                        Product Details
                    </a>
                </li>

                <li>
                    <a @click="activeTab = 'productSpecs'" :class="{ 'font-bold': activeTab === 'productSpecs' }"
                        class="block p-3 text-white bg-black rounded-lg" href="#productSpecs">
                        Product Specs
                    </a>
                </li>

                <li>
                    <a @click="activeTab = 'productReviews'" :class="{ 'font-bold': activeTab === 'productReviews' }"
                        class="block p-3 text-white bg-black rounded-lg" href="#productReviews">
                        Product Reviews
                    </a>
                </li>
            </ul>
        </nav>

        <div class="p-6 mt-4 text-white bg-black rounded-lg">
            <div x-show="activeTab === 'productDetails'" x-cloak>
                <h2>Product Details</h2>
            </div>

            <div x-show="activeTab === 'productSpecs'" x-cloak>
                <h2>Product Specs</h2>
            </div>

            <div x-show="activeTab === 'productReviews'" x-cloak>
                <h2>Product Reviews</h2>
            </div>
        </div>
    </div>

    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
            data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                    Profile
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                    aria-controls="dashboard" aria-selected="false">
                    Dashboard
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                    aria-controls="settings" aria-selected="false">
                    Settings</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">
                    Contacts
                </button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
            aria-labelledby="settings-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div>
    </div>

</x-app-layout>
