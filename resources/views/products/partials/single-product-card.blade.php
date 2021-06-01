<div class="flex bg-white shadow-sm p-6">
    <div class="flex-1 mr-4">
        <img src="{{asset('assets/images/img-card.jpg')}}" alt="" class="w-full mb-8">
        <div class="grid grid-cols-3 gap-4">
            <img src="{{asset('assets/images/img-card.jpg')}}" alt="" class="w-24 h-24 bg-cover object-cover bg-center">
            <img src="{{asset('assets/images/img.jpg')}}" alt="" class="w-24 h-24 bg-cover object-cover bg-center opacity-40 hover:opacity-100 transition ease-in-out cursor-pointer">
            <img src="{{asset('assets/images/img.jpg')}}" alt="" class="w-24 h-24 bg-cover object-cover bg-center opacity-40 hover:opacity-100 transition ease-in-out cursor-pointer">
        </div>
    </div>
    <div class="flex-1">
        <h2 class="mb-4 text-2xl tracking-wide text-black font-medium uppercase leading-loose">Perfect Titanium Wheel Cover (14, 16, 18 inches)</h2>
        <div class="flex items-center mb-4">
            <ion-icon name="star" class="block text-yellow-400"></ion-icon>
            <ion-icon name="star" class="block text-yellow-400"></ion-icon>
            <ion-icon name="star" class="block text-yellow-400"></ion-icon>
            <ion-icon name="star" class="block text-gray-300 mr-4"></ion-icon>

            <span class="block text-gray-400 text-xs">( 3 reviews )</span>
        </div>
        <p class="leading-loose tracking-wide mb-8 text-xs text-gray-500">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, recusandae veniam iure ut eaque placeat veritatis exercitationem esse impedit maxime cupiditate animi dignissimos dolore asperiores molestias nostrum natus perspiciatis accusantium?
        </p>
        <div class="items-center flex items-end justify-between mb-8">
            <h3 class="text-2xl font-bold text-black mr-2">336 $</h3>
            <div class="flex items-end ">
                <ion-icon name="checkmark-done-circle" class="block text-lg text-primary"></ion-icon>
                <span class="block text-primary text-xs">{{__('In stock')}}</span>
            </div>
        </div>
        <div class="items-center flex items-end justify-between">
            <div class="w-24 h-10 bg-gray-200 text-gray-500 text-sm flex items-center justify-between mr-4 rounded">
                <span class="block pl-4 cursor-pointer">+</span>
                <span class="block px-2">0</span>
                <span class="block pr-4 cursor-pointer">-</span>
            </div>
            <button class="flex flex-1 items-center justify-center h-10 bg-gray-800 rounded text-gray-100 text-sm">
                <span>Ajouter au panier</span>
            </button>
        </div>
    </div>
</div>