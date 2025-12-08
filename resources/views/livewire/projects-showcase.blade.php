<section id="proyectos" class="py-20 bg-base-100 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Título de la sección -->
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-warning mb-4">Portafolio de Proyectos</h2>
            <p class="text-xl text-base-content/80 max-w-2xl mx-auto">
                Una muestra de mis trabajos más recientes y destacados
            </p>
            <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
        </div>

        <!-- Grid de proyectos -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            @foreach($projects as $index => $project)
                <div class="group relative" 
                     x-data="{ expanded: false }" 
                     x-effect="if(expanded) { document.body.style.overflow = 'hidden' } else { document.body.style.overflow = 'auto' }">
                    
                    <!-- Card principal del proyecto -->
                    <div class="relative bg-base-300 rounded-box overflow-hidden shadow-depth-1 group-hover:shadow-depth-2 transition-all duration-500 group-hover:scale-[1.02] h-full cursor-pointer"
                         @click="expanded = true">
                        
                        <!-- Imagen del proyecto -->
                        <div class="h-48 bg-gradient-to-br from-{{ $project['status'] == 'active' ? 'primary' : 'secondary' }}/20 to-base-200 relative overflow-hidden">
                            <img src="{{ $project['image'] }}" 
                                 alt="{{ $project['title'] }}" 
                                 class="w-full h-full object-cover opacity-60 group-hover:opacity-80 group-hover:scale-110 transition-all duration-700">
                            
                            <!-- Badge de estado -->
                            <div class="absolute top-4 right-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                    {{ $project['status'] == 'active' ? 'bg-warning/20 text-warning' : 'bg-success/20 text-success' }}">
                                    {{ $project['status'] == 'active' ? 'En Desarrollo' : 'Completado' }}
                                </span>
                            </div>

                            <!-- Categoría -->
                            <div class="absolute bottom-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-base-100/80 backdrop-blur-sm text-xs font-medium text-base-content">
                                    {{ $project['category'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Contenido de la card -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-base-content mb-2 group-hover:text-primary transition-colors duration-300">
                                {{ $project['title'] }}
                            </h3>
                            
                            <p class="text-base-content/70 text-sm mb-3">{{ $project['period'] }}</p>
                            
                            <p class="text-base-content/80 mb-4 line-clamp-2">
                                {{ $project['description'] }}
                            </p>

                            <!-- Tecnologías -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full bg-base-200 text-xs font-medium text-base-content/70">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                                @if(count($project['technologies']) > 3)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full bg-base-200 text-xs font-medium text-base-content/70">
                                        +{{ count($project['technologies']) - 3 }}
                                    </span>
                                @endif
                            </div>

                            <!-- Indicador de click -->
                            <div class="flex items-center justify-between pt-4 border-t border-base-200">
                                <span class="text-sm text-primary font-medium">Click para ver detalles</span>
                                <svg class="w-5 h-5 text-primary transform group-hover:translate-x-1 transition-transform duration-300" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de detalles (se expande al hacer click) -->
                    <div x-show="expanded" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-base-100/95 backdrop-blur-sm"
                         @click.self="expanded = false">
                        
                        <div class="relative bg-base-300 rounded-box max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-depth-2">
                            <!-- Header del modal -->
                            <div class="sticky top-0 bg-base-300 border-b border-neutral p-6 flex justify-between items-start z-10">
                                <div>
                                    <h3 class="text-2xl font-bold text-base-content">{{ $project['title'] }}</h3>
                                    <p class="text-base-content/70">{{ $project['period'] }} • {{ $project['category'] }}</p>
                                </div>
                                <button @click="expanded = false" 
                                        class="p-2 hover:bg-base-200 rounded-full transition-colors duration-300">
                                    <svg class="w-6 h-6 text-base-content" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- Contenido del modal -->
                            <div class="p-6">
                                <div class="grid md:grid-cols-2 gap-8">
                                    <!-- Columna izquierda: Imagen y tecnologías -->
                                    <div>
                                        <div class="bg-base-200 rounded-box p-4 mb-6">
                                            <img src="{{ $project['image'] }}" 
                                                 alt="{{ $project['title'] }}" 
                                                 class="w-full h-48 object-cover rounded-box">
                                        </div>
                                        
                                        <!-- Badge para paquetes PHP -->
                                        @if($project['category'] === 'PHP Package')
                                            <div class="mb-4">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-info/20 text-info text-sm font-medium">
                                                    📦 Paquete PHP Instalable
                                                </span>
                                            </div>
                                        @endif

                                        <div class="mb-6">
                                            <h4 class="text-lg font-semibold text-base-content mb-3">Tecnologías Utilizadas</h4>
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($project['technologies'] as $tech)
                                                    <span class="inline-flex items-center px-3 py-2 rounded-field bg-base-200 text-sm font-medium text-base-content">
                                                        {{ $tech }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>

                                        <!-- Enlaces -->
                                        @if(isset($project['links']) && count($project['links']) > 0)
                                            <div>
                                                <h4 class="text-lg font-semibold text-base-content mb-3">
                                                    @if($project['category'] === 'PHP Package')
                                                        Instalación
                                                    @else
                                                        Enlaces
                                                    @endif
                                                </h4>
                                                <div class="space-y-2">
                                                    @if(isset($project['links']['github']))
                                                        <a href="{{ $project['links']['github'] }}" 
                                                           target="_blank"
                                                           class="flex items-center px-4 py-2 bg-base-200 rounded-field hover:bg-base-100 transition-colors duration-300">
                                                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                                            </svg>
                                                            @if($project['category'] === 'PHP Package')
                                                                Ver paquete en GitHub
                                                            @else
                                                                Ver código en GitHub
                                                            @endif
                                                        </a>
                                                    @endif
                                                    @if(isset($project['links']['demo']))
                                                        <a href="{{ $project['links']['demo'] }}" 
                                                           target="_blank"
                                                           class="flex items-center px-4 py-2 bg-primary/10 text-primary rounded-field hover:bg-primary/20 transition-colors duration-300">
                                                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                            </svg>
                                                            Ver web
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Columna derecha: Descripción y características -->
                                    <div>
                                        <div class="mb-6">
                                            <h4 class="text-lg font-semibold text-base-content mb-3">Descripción del Proyecto</h4>
                                            <p class="text-base-content/80 leading-relaxed">
                                                {{ $project['long_description'] }}
                                            </p>
                                        </div>

                                        <div>
                                            <h4 class="text-lg font-semibold text-base-content mb-3">Características Principales</h4>
                                            <ul class="space-y-2">
                                                @foreach($project['features'] as $feature)
                                                    <li class="flex items-start">
                                                        <svg class="w-5 h-5 text-success mr-3 mt-0.5 flex-shrink-0" 
                                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                        </svg>
                                                        <span class="text-base-content/80">{{ $feature }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <div class="bg-base-300 rounded-box p-8 max-w-2xl mx-auto shadow-depth-1">
                <h3 class="text-2xl font-bold text-base-content mb-4">¿Tienes un proyecto en mente?</h3>
                <p class="text-base-content/80 mb-6">
                    Estoy disponible para nuevos desafíos y proyectos interesantes. 
                    Hablemos sobre cómo puedo ayudarte a hacer realidad tu idea.
                </p>
                <a href="#contacto" 
                   class="inline-flex items-center px-6 py-3 bg-primary text-primary-content rounded-box font-semibold hover:bg-primary/90 transform hover:scale-105 transition-all duration-300">
                    <span>Iniciar Proyecto</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
