<x-guest-app-layout>
    <div class="px-4 pt-6 2xl:px-0">
        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
            @foreach ($products as $product)
                <x-products.card :$product />
            @endforeach
        </div>
    </div>
</x-guest-app-layout>