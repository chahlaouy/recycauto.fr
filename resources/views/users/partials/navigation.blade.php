<x-slot name="sidenavbar">
    <ul>
        <li>
            <x-custom.nav-link 
            :href="route('dashboard')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('dashboard')">
                Dashboard
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.dropdown>
                <x-slot name="trigger">
                    <x-custom.nav-link 
                        href="#" 
                        name="chevron-forward-outline" 
                        :route="request()->routeIs('threads.create')">
                            Acticles
                    </x-custom.nav-link>
                </x-slot>
                <x-slot name="content">
                    <div class="ml-3">
                        <x-custom.nav-link 
                            :href="route('threads.create')" 
                            name="chevron-forward-outline" 
                            :route="request()->routeIs('threads.create')">
                                Créer une article
                        </x-custom.nav-link>
                        <x-custom.nav-link 
                            :href="route('author.threads.index')" 
                            name="chevron-forward-outline" 
                            :route="request()->routeIs('author.threads.index')">
                                Liste des article
                        </x-custom.nav-link>
                    </div>
                </x-slot>
            </x-custom.dropdown>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('threads.index')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Historique
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('threads.index')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Messages
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('threads.index')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Notifications
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('threads.index')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Commentaires
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('threads.index')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Catégories
            </x-custom.nav-link>
        </li>
        <li>
            <x-custom.nav-link 
            :href="route('logout')" 
            name="chevron-forward-outline" 
            :route="request()->routeIs('threads.index')">
                Déconnexion
            </x-custom.nav-link>
        </li>
        

    </ul>
</x-slot>