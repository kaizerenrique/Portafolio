<!-- Sección Hero -->
<section id="inicio" class="min-h-screen flex items-center justify-center relative bg-gradient-to-br from-base-100 via-base-200 to-base-300 px-4 sm:px-6 lg:px-8 overflow-hidden pt-4">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-secondary rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-accent rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto text-center relative z-10 mt-4">
        <!-- Badge de especialización -->
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-success/20 border border-success/30 mb-4">
            <span class="w-2 h-2 bg-success rounded-full mr-2 animate-pulse"></span>
            <span class="text-sm font-medium text-success">Backend Developer Disponible</span>
        </div>

        <!-- Nombre -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4">
            <span class="block text-base-content">Oliver</span>
            <span class="block text-primary mt-1">Gómez</span>
        </h1>

        <!-- Título -->
        <div class="mb-6">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-secondary mb-3">
                Backend Developer
            </h2>
            
            <!-- Especialidades -->
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                @php
                    $specialties = ['PHP', 'Laravel', 'APIs', 'Linux'];
                    $colors = ['primary', 'secondary', 'accent', 'info'];
                @endphp
                
                @foreach($specialties as $index => $specialty)
                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-{{ $colors[$index] }}/10 border border-{{ $colors[$index] }}/20">
                        <span class="text-{{ $colors[$index] }} font-medium text-xs">{{ $specialty }}</span>
                    </span>
                @endforeach
            </div>
        </div>

        <!-- Descripción -->
        <p class="text-lg sm:text-xl text-base-content/80 max-w-2xl mx-auto mb-8 leading-relaxed">
            Backend Developer con +3 años de experiencia construyendo 
            <span class="text-primary font-semibold">APIs</span> y 
            <span class="text-secondary font-semibold">aplicaciones web</span> 
            escalables y eficientes
        </p>

        <!-- Botones de acción -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center items-center mb-20">
            <!-- Botón Contactar -->
            <a href="#contacto" 
               class="group inline-flex items-center px-6 py-3 bg-primary text-primary-content rounded-box font-semibold text-base hover:bg-primary/90 transform hover:scale-105 transition-all duration-300 ease-in-out shadow-depth-1">
                <span>Contactar</span>
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" 
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>

            <!-- Botón Ver Proyectos -->
            <a href="#proyectos" 
               class="group inline-flex items-center px-6 py-3 bg-transparent border-2 border-primary text-primary rounded-box font-semibold text-base hover:bg-primary hover:text-primary-content transform hover:scale-105 transition-all duration-300 ease-in-out">
                <span>Ver Proyectos</span>
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" 
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </a>
        </div>

        <!-- Indicador Scroll Down - Reposicionado -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
            <a href="#sobre-mi" class="flex flex-col items-center text-base-content/60 hover:text-primary transition-colors duration-300 animate-bounce">
                <span class="text-xs font-medium mb-1">Scroll Down</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </div>
</section>