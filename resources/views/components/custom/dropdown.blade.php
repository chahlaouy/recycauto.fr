
<div x-data="{ open: true }">
    <div x-on:click="open = ! open">
        {{$trigger }}
    </div>
    <ul class="relative"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    >
        {{ $content }}
    </ul>
</div>