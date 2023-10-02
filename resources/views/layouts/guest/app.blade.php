<!DOCTYPE html>
<html lang="fr">
    <x-layouts.header />
    <body>
        <header>
            <x-nav.stacked />
        </header>
        <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
            <div id="main-content" class="relative w-full max-w-screen-2xl mx-auto h-full overflow-y-auto bg-gray-50 dark:bg-gray-900">
                <main>
                    {{ $slot }}
                </main>
                @include('layouts.guest.footer')
            </div>
        </div>
    </body>
    <x-layouts.script />
</html>