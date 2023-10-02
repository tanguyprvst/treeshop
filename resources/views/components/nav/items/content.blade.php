<div class="flex justify-start items-center">
    <a href="" class="flex mr-14">
        <img class="mr-3 h-8"
            src="{{ asset('/icons/logo.webp') }}" 
            srcset="{{ asset('/icons/logo48.webp') }} 480w, {{ asset('/icons/logo.webp') }} 1080w" 
            sizes="50vw" alt="Logo" />
        <span class="self-center hidden sm:flex text-2xl font-semibold whitespace-nowrap">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <!-- Desktop menu -->
    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
        <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
            <x-nav.items.left-item route="admin.products.index" title="Nos produits" />
            <x-nav.items.left-item route="admin.products.index" title="Mon panier" />
            @can("admin.*")
                <x-nav.items.left-item route="admin.dashboard" title="Admin" />
            @endcan
        </ul>
    </div>
</div>
<div class="flex justify-between items-center lg:order-2">
    <div class="mr-3 -mb-1 hidden sm:block">
        <a class="github-button">{{ Auth()->user()->name }}</a>
    </div>
    <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 flex-shrink-0 focus:ring-4 focus:ring-gray-300" id="userMenuDropdownButton" aria-expanded="false" data-dropdown-toggle="userMenuDropdown">
        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
    </button>
    <!-- Dropdown menu -->
    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="userMenuDropdown">
        <div class="py-3 px-4">
            <span class="block text-sm font-semibold text-gray-900">{{ Auth()->user()->email }}</span>
            <span class="block text-sm font-light text-gray-500 truncate">{{ Auth()->user()->name }}</span>
        </div>
        <ul class="py-1 font-light text-gray-500" aria-labelledby="userMenuDropdownButton">
            <li>
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">Mon profile</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">Mon panier</a>
            </li>
        </ul>
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="userMenuDropdownButton">
            <li>
                <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="mr-2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg> My likes</a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="mr-2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg> Collections</a>
            </li>
        </ul>
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
            <li>
                <a href="{{ route('auth.logout') }}" onclick="event.preventDefault(); console.log('test'); document.getElementById('logout-form').submit();" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
            </li>
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</div>