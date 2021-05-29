{{-- card --}}
<div class="relative rounded bg-white flex h-60 mb-8">
    <div class="w-60 h-60 absolute z-40 flex items-center">
        <div class="pl-4">
            <span class="uppercase text-sm text-custom-green">BOITIER UPC</span>
            <h2 class="text-xl text-gray-900 mb-2 font-bold">RENAULT CLIO GAZOLE</h2>
            <p class="leading-loose tracking-wide text-gray-700 text-xs mb-8 ">Garantie 12 mois</p>
            <a href="{{route('products.show')}}" class="inline-block rounded py-3 text-gray-100 px-6 text-xs bg-black shadow hover:bg-primary hover:text-green-800 transition ease-in-out"> {{ __('View details') }} </a>
        </div>
    </div>
    <div class="w-96 h-60 absolute z-30 cursor-pointer">
        <img src="{{ asset('assets/images/img.jpg') }}" alt="" class="-mr-12 w-96 h-60 hover:scale-95 transform transition animation-duration-1000 ease-in-out">
    </div>
</div>