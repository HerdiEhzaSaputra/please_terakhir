<div id="sidebar" :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="hidden md:block fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-100 dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
    <div class="sticky top-0 flex items-center justify-center py-3 bg-gray-100  dark:bg-gray-900">
        <a href="{{ url('/') }}" class="flex items-center px-2">
            <x-application-logo class="w-full" />

            <span class="w-full text-gray-800 dark:text-white text-2xl mx-2 font-semibold">DKU App</span>
        </a>
    </div>

    <livewire:layouts.partials.menu />
</div>
