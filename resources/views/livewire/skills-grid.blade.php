<section id="habilidades" class="py-20 bg-base-100 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Título de la sección -->
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-warning mb-4">Habilidades & Competencias</h2>
            <p class="text-xl text-base-content/80 max-w-2xl mx-auto">
                Conjunto de habilidades técnicas y blandas adquiridas a lo largo de mi carrera
            </p>
            <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
        </div>

        <!-- Grid de habilidades -->
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
            @foreach($skills as $category)
                <div class="group relative">
                    <!-- Efecto de borde con gradiente -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-{{ $category['color'] }} to-{{ $category['color'] == 'primary' ? 'secondary' : ($category['color'] == 'secondary' ? 'accent' : 'info') }} rounded-box blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    
                    <!-- Card de categoría -->
                    <div class="relative bg-base-300 rounded-box p-6 shadow-depth-1 group-hover:shadow-depth-2 transition-all duration-300 group-hover:scale-[1.02] h-full">
                        <!-- Header de la categoría -->
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-{{ $category['color'] }}/20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-xl">{{ $category['icon'] }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-{{ $category['color'] }}">{{ $category['title'] }}</h3>
                        </div>

                        <!-- Lista de habilidades -->
                        <div class="space-y-4">
                            @foreach($category['skills'] as $skill)
                                <div class="group/item">
                                    @if(isset($skill['level']))
                                        <!-- Habilidad técnica con nivel -->
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-base-content font-medium group-hover/item:text-{{ $category['color'] }} transition-colors duration-300">
                                                {{ $skill['name'] }}
                                            </span>
                                            <div class="flex items-center">
                                                <!-- Estrellas -->
                                                <div class="flex space-x-1 mr-3">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $skill['level'])
                                                            <svg class="w-4 h-4 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                            </svg>
                                                        @else
                                                            <svg class="w-4 h-4 text-base-content/20" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <!-- Porcentaje -->
                                                <span class="text-xs text-base-content/60">{{ $skill['percentage'] }}%</span>
                                            </div>
                                        </div>
                                        <!-- Barra de progreso -->
                                        <div class="w-full bg-base-200 rounded-full h-2">
                                            <div class="bg-{{ $category['color'] }} h-2 rounded-full transition-all duration-1000 ease-out" 
                                                 style="width: {{ $skill['percentage'] }}%">
                                            </div>
                                        </div>
                                    @else
                                        <!-- Habilidad blanda -->
                                        <div class="flex items-center py-2 group-hover/item:transform group-hover/item:translate-x-2 transition-all duration-300">
                                            <div class="w-2 h-2 bg-{{ $category['color'] }} rounded-full mr-3 group-hover/item:scale-150 transition-transform duration-300"></div>
                                            <span class="text-base-content group-hover/item:text-{{ $category['color'] }} transition-colors duration-300">
                                                {{ $skill['name'] }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Nota adicional -->
        <div class="text-center mt-12">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-success/10 border border-success/20">
                <span class="text-sm font-medium text-success">En constante aprendizaje y mejora continua</span>
            </div>
        </div>
    </div>
</section>
