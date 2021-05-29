<div>
    <header class="flex justify-between items-center mb-10 border-b border-gray-200 py-2">
        <h3 class="uppercase text-xl">
            {{ __('Title') }}
        </h3>
        <div class="flex items-center">
            <div class="flex items-center w-96 justify-between mr-12">
                <span class="block py-1 uppercase text-sm font-bold text-gray-800 border-b-2 border-primary">
                    {{ __('New arrivals') }}
                </span>
                <span class="block text-gray-500 py-1 uppercase cursor-pointer text-sm border-b-2 border-transparent hover:border-primary hover:text-black transition ease-in-out duration-500">
                    {{ __('Featured') }}
                </span>
                <span class="block text-gray-500 py-1 uppercase cursor-pointer text-sm border-b-2 border-transparent hover:border-primary hover:text-black transition ease-in-out duration-500">
                    {{ __('Popular') }}
                </span>
            </div>
            <div class="flex items-center text-gray-500">
                <ion-icon name="chevron-back-outline" class="cursor-pointer block text-2xl mr-4 transform duration-200 transition ease-linear hover:scale-150"></ion-icon>
                <span class="font-light text-gray-300 mr-4">|</span>
                <ion-icon name="chevron-forward-outline" class="cursor-pointer block text-2xl transform duration-200 transition ease-linear hover:scale-150"></ion-icon>
            </div>
        </div>
    </header>

    {{-- Cards --}}
    <div class="grid grid-cols-3 gap-8">
        <x-custom.product-card />
        <x-custom.product-card />
        <x-custom.product-card />
    </div>
</div>