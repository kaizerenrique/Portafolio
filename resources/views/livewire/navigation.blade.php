<nav x-data="{ open: false }" class="fixed top-0 left-0 w-full bg-base-100 border-b border-neutral shadow-depth-1 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo and Main Menu -->
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="text-2xl font-bold text-primary">
                        OG
                    </a>
                </div>

                <!-- Navigation Links - Desktop -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="#inicio" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Inicio
                    </a>
                    <a href="#sobre-mi" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Sobre Mí
                    </a>
                    <a href="#experiencia" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Experiencia
                    </a>
                    <a href="#habilidades" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Habilidades
                    </a>
                    <a href="#proyectos" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Proyectos
                    </a>
                    <a href="#contacto" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-base-content hover:text-primary transition duration-150 ease-in-out">
                        Contacto
                    </a>
                </div>
            </div>

            <!-- Hamburger Menu Button -->
            <div class="sm:hidden flex items-center">
                <button @click="open = !open" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-base-content hover:text-primary hover:bg-base-200 focus:outline-none focus:bg-base-200 focus:text-primary transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:hidden bg-base-200 border-t border-neutral">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#inicio" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Inicio
            </a>
            <a href="#sobre-mi" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Sobre Mí
            </a>
            <a href="#experiencia" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Experiencia
            </a>
            <a href="#habilidades" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Habilidades
            </a>
            <a href="#proyectos" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Proyectos
            </a>
            <a href="#contacto" 
               class="block pl-3 pr-4 py-2 text-base font-medium text-base-content hover:text-primary hover:bg-base-300 transition duration-150 ease-in-out">
                Contacto
            </a>
        </div>
    </div>
</nav>
