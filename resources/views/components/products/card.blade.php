<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
        <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ asset("/images/placeholders/placeholder-product-image.jpg") }}" alt="Jese picture">
        <div>
            <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">{{ $product->name }}</h3>
            <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                {{ $product->description }}
            </div>
            <div class="flex items-center space-x-4">
                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>
                    Ajouter au panier
                </button>
            </div>
        </div>
    </div>
</div>