
<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 py-3 px-4">
    <div class="flex justify-between items-center max-w-screen-2xl mx-auto">
        <x-nav.items.content />
    </div>
</nav>
<nav class="bg-white dark:bg-gray-900">
    <!-- Mobile menu -->
    <ul id="toggleMobileMenu" class="hidden flex-col mt-0 pt-16 w-full text-sm font-medium lg:hidden">
        <li class="block border-b dark:border-gray-700">
            <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0" aria-current="page">Home</a>
        </li>
        <li class="block border-b dark:border-gray-700">
            <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Messages</a>
        </li>
        <li class="block border-b dark:border-gray-700">
            <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Profile</a>
        </li>
        <li class="block border-b dark:border-gray-700">
            <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Settings</a>
        </li>
        <li class="block border-b dark:border-gray-700">
            <button type="button" data-collapse-toggle="dropdownMobileNavbar" class="flex justify-between items-center py-3 px-4 w-full text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Dropdown <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
            <ul id="dropdownMobileNavbar" class="hidden"> 
                <li class="block border-t border-b dark:border-gray-700">
                    <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item 1</a>
                </li>
                <li class="block border-b dark:border-gray-700">
                    <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item 2</a>
                </li>
                <li class="block">
                    <a href="#" class="block py-3 px-4 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item 3</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
