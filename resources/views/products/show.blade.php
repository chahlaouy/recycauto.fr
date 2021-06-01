@extends('layouts.master')

@section('upperbar')
    @include('layouts.partials.upperbar')
@endsection
@section('content')
    <section>
        <div class="mt-16 flex">
            <div class="flex-1 mr-4">
                <div class="mb-12">
                    @include('products.partials.single-product-card')
                </div>
                <div class="mb-12">
                    @include('products.partials.accordion')
                </div>
            </div>
            <div class="w-56">
                <div class="mb-8">
                    @include('home.partials.categories')   
                </div>
                <div class="mb-8">
                    @include('home.partials.hot-offers-card')   
                </div>
                
            </div> 
        </div>
        <h3 class="mb-4 text-2xl tracking-wide text-black font-medium uppercase leading-loose">PRODUITS CONNEXES</h3>
        
        <div class="mb-8 grid grid-cols-3 gap-8 max-w-3xl">
            <x-custom.product-card />
            <x-custom.product-card />
            <x-custom.product-card />
        </div>
    </section>
@endsection