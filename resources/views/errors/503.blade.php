<x-base-app-layout>
    <div class="flex flex-col justify-center items-center px-6 mx-auto h-screen xl:px-0 dark:bg-gray-900">
        <div class="block mb-5 md:max-w-md">
            <img src="{{ asset('images/errors/maintenance.svg') }}" alt="maintenance image">
        </div>
        <div class="text-center xl:max-w-4xl">
            <h1 class="mb-3 text-2xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl dark:text-white">En maintenance</h1>
            <p class="mb-5 text-base font-normal text-gray-500 md:text-lg dark:text-gray-400">Désolé pour le désagrément, nous effectuons actuellement des travaux de maintenance. Si vous en avez besoin, vous pouvez toujours <a href="#" class="text-primary-700 hover:underline dark:text-primary-500">nous contacter</a>, nous serons de retour en ligne sous peu !</p>
        </div>
    </div>
</x-base-app-layout>