<div x-data="{accordionOne: true, accordionTwo: false}">
    <div class="w-96 flex items-center rounded">
        <div 
            class="uppercase text-sm flex-1 py-3 bg-white border-t-2 text-gray-800 text-center cursor-pointer" 
            :class="accordionOne === true ? 'border-blue-500 bg-white' : 'bg-gray-300'" 
            x-on:click="accordionOne = true; accordionTwo = false"
            >
            description
        </div>
        <div 
            class="uppercase text-sm flex-1 py-3 text-gray-800 text-center border-t-2 cursor-pointer"
            :class="accordionTwo === true ? 'border-blue-500 bg-white' : 'bg-gray-300'" 
            x-on:click="accordionTwo = true; accordionOne = false"
            >
            additional description
        </div>
    </div>

    {{-- Accordion one for description --}}

    <div class="w-full p-8 bg-white tracking-wide leading-loose text-sm" x-show="accordionOne">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti tenetur aut iusto nostrum voluptatibus cumque laudantium maxime atque hic harum doloribus repudiandae et, vel sit minus nihil eum nesciunt nulla.
    </div>

    {{-- Accordion two for additional description --}}

    <div class="w-full p-8 bg-white tracking-wide leading-loose text-sm" x-show="accordionTwo">
        false
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti tenetur aut iusto nostrum voluptatibus cumque laudantium maxime atque hic harum doloribus repudiandae et, vel sit minus nihil eum nesciunt nulla.
    </div>
</div>