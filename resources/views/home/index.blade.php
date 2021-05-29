@extends('layouts.master')

@section('upperbar')
    @include('layouts.partials.upperbar')
@endsection
@section('content')
    <section class="mt-12 mb-24">
        <div class="flex">
            <div class="flex-1 mr-4">
                @include('layouts.slider')
            </div>
            <div class="w-96 flex flex-col ">

                {{-- card --}}
                {{-- <div class="relative rounded bg-white flex h-60 mb-8">
                    <div class="w-60 h-60 absolute z-40 flex items-center">
                        <div class="pl-4">
                            <span class="uppercase text-sm text-custom-green">BOITIER UPC</span>
                            <h2 class="text-xl text-gray-900 mb-2 font-bold">RENAULT CLIO GAZOLE</h2>
                            <p class="leading-loose tracking-wide text-gray-700 text-xs mb-8 ">Garantie 12 mois</p>
                            <button class="rounded py-3 px-6 text-xs bg-custom-green shadow"> {{ __('View details') }} </button>
                        </div>
                    </div>
                    <div class="w-96 absolute z-30">
                        <img src="{{ asset('assets/images/img.jpg') }}" alt="" class="">
                    </div>
                </div> --}}
                
                {{-- card --}}
                {{-- <div class="relative rounded bg-white flex h-60">
                    <div class="w-60 h-60 absolute z-40 flex items-center">
                        <div class="pl-4">
                            <span class="uppercase text-sm text-custom-green">BOITIER UPC</span>
                            <h2 class="text-xl text-gray-900 mb-2 font-bold">RENAULT CLIO GAZOLE</h2>
                            <p class="leading-loose tracking-wide text-gray-700 text-xs mb-8 font-bold">Garantie 12 mois</p>
                            <button class="rounded py-3 px-6 text-xs bg-custom-green shadow"> {{ __('View details') }} </button>
                        </div>
                    </div>
                    <div class="w-96 absolute z-30">
                        <img src="{{ asset('assets/images/img.jpg') }}" alt="" class="">
                    </div>
                </div> --}}
                
                @include('home.partials.card')
                @include('home.partials.card')
                
                
            </div>
        </div>
        
    </section>
    <section class="mb-12">
        <div class="flex">
            <div class="flex-shrink-0">
                <div class="mb-8">
                    @include('home.partials.categories')
                </div>
                <div class="mb-8">
                    @include('home.partials.brands-card')
                </div>
                <div>
                    @include('home.partials.hot-offers-card')
                </div>
            </div>

            <div class="flex-1">
                <div class="mb-16">
                    <x-custom.accordion />
                </div>

                <div class="mb-16">
                    <x-custom.ads-card />
                </div>

                <div class="mb-16">
                    <x-custom.accordion />
                </div>

                <div class="mb-16">
                    <x-custom.ads-card />
                </div>

                <div>
                    <x-custom.accordion />
                </div>

            </div>
        </div>
    </section>
@endsection