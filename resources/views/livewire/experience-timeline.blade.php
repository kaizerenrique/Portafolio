<section id="experiencia" class="py-20 bg-base-100 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Título de la sección -->
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-accent mb-4">Experiencia Profesional</h2>
            <p class="text-xl text-base-content/80 max-w-2xl mx-auto">
                Mi trayectoria en el desarrollo de software y soluciones tecnológicas
            </p>
            <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
        </div>

        <!-- Línea de tiempo -->
        <div class="relative">
            <!-- Línea vertical central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-primary via-secondary to-accent hidden lg:block"></div>

            <!-- Items de experiencia -->
            @foreach($experiences as $index => $experience)
                <div class="relative flex flex-col lg:flex-row items-center mb-12 lg:mb-20">
                    <!-- Punto en la línea -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 rounded-full bg-{{ $experience['color'] }} border-4 border-base-100 z-10 hidden lg:flex items-center justify-center">
                        <span class="text-xs">{{ $experience['icon'] }}</span>
                    </div>

                    <!-- Contenido - Alterna entre izquierda y derecha -->
                    <div class="w-full lg:w-1/2 {{ $index % 2 == 0 ? 'lg:pr-8 lg:text-right' : 'lg:pl-8 lg:order-last' }}">
                        <div class="group relative">
                            <!-- Efecto de borde con gradiente -->
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-{{ $experience['color'] }} to-{{ $index % 2 == 0 ? 'accent' : 'info' }} rounded-box blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                            
                            <!-- Card de experiencia -->
                            <div class="relative bg-base-300 rounded-box p-6 shadow-depth-1 group-hover:shadow-depth-2 transition-all duration-300 group-hover:scale-[1.02]">
                                <!-- Periodo -->
                                <div class="inline-flex items-center px-3 py-1 rounded-full bg-{{ $experience['color'] }}/20 border border-{{ $experience['color'] }}/30 mb-4">
                                    <span class="text-sm font-medium text-{{ $experience['color'] }}">{{ $experience['period'] }}</span>
                                </div>

                                <!-- Título y posición -->
                                <h3 class="text-xl font-bold text-base-content group-hover:text-{{ $experience['color'] }} transition-colors duration-300">
                                    {{ $experience['title'] }}
                                </h3>
                                <p class="text-lg font-semibold text-secondary mb-4">{{ $experience['position'] }}</p>

                                <!-- Logros -->
                                <ul class="space-y-2 mb-4">
                                    @foreach($experience['achievements'] as $achievement)
                                        <li class="flex items-start text-base-content/90">
                                            <svg class="w-4 h-4 text-{{ $experience['color'] }} mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            <span>{{ $achievement }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Tecnologías -->
                                <div class="flex flex-wrap gap-2 mt-4">
                                    @foreach($experience['technologies'] as $tech)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-base-200 text-xs font-medium text-base-content/70">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Espacio para la otra mitad (solo en desktop) -->
                    <div class="w-1/2 hidden lg:block {{ $index % 2 == 0 ? 'order-last' : '' }}"></div>
                </div>
            @endforeach
        </div>

        <!-- Indicador de más experiencias -->
        <div class="text-center mt-12">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 border border-primary/20">
                <span class="text-sm font-medium text-primary">+3 años de experiencia acumulada</span>
            </div>
        </div>
    </div>
</section>
