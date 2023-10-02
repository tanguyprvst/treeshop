<!DOCTYPE html>
<html lang="fr">
    <x-layouts.header />
    <body>
        <x-nav.sidebar />
        <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
            <x-nav.aside />
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                <main>
                    {{ $slot }}
                </main>
                @include('layouts.admin.footer')
            </div>
        </div>
    </body>
    <x-layouts.script />
</html>