<section 
    class="wrapper mx-auto bg-gray-100 w-full relative" 
    style="height: 524px" 
    x-data="
    {
        slides: [
            [0, 'une équipe de professionels est a votre disposition'], 
            [1, 'une équipe de professionels est a votre disposition'], 
            [2, 'une équipe de professionels est a votre disposition'],
            [3,'une équipe de professionels est a votre disposition']
        ],
        activeSlide: 0
    }
    " 
    x-init="
        setInterval(function(){
            activeSlide = activeSlide === slides.length-1 ? 1 : activeSlide + 1
            
        }, 3000);
    ">

    <div class="h-full">

        <div class="w-full mx-auto relative z-40">
            <!-- Slides -->
            <template x-for="slide in slides">
                <div x-show="activeSlide === slide[0]" class="relative z-10 h-full"
                    style="height: 524px">
                    <div class="relative" >
                        <div class="absolute top-0 left-0 z-20 bg-gray-800 bg-opacity-50 w-full h-full"
                            style="height: 524px; width: 100%">
                        </div>
                        <img src="{{asset('assets/images/visuel-slider.jpg')}}" class="w-full relative z-10 bg-cover bg-center object-cover" alt=""
                            style="height: 524px">
                        <div class="absolute z-40 top-24 left-12">
                            <div class="text-custom-green text-5xl leading-loose tracking-wider">
                                Recyc'auto
                            </div>
                            <div class="text-gray-100 py-2 px-1 text-lg max-w-xs leading-loose tracking-wide mb-12" x-text="slide[1]">
                            </div>
                            <button class="text-gray-100 bg-custom-blue px-12 py-4 text-sm rounded">Shop Now</button>
                        </div>

                    </div>
                    <!-- <span class="text-teal-300">/</span>
                    <span class="w-12 text-center" x-text="slides.length"></span> -->
                </div>
            </template>

            <!-- Prev/Next Arrows -->
            <div class="z-40 absolute inset-0 flex" style="height: 524px">
                <div class="flex items-end justify-start w-1/2">
                    <button
                        class="flex items-center justify-center  bg-custom-green text-gray-100 hover:text-orange-500 font-bold hover:shadow-lg rounded w-12 h-12 ml-6"
                        x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                        <ion-icon name="chevron-back-outline" class="text-xl"></ion-icon>
                    </button>
                </div>
                <div class="flex items-end justify-end w-1/2">
                    <button
                        class="flex items-center justify-center bg-custom-green text-gray-100 hover:text-gray-100 font-bold hover:shadow rounded w-12 h-12 mr-6"
                        x-on:click="activeSlide = activeSlide === slides.length-1 ? 1 : activeSlide + 1">
                        <ion-icon name="chevron-forward-outline" class="text-xl"></ion-icon>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>