<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-base-100 text-base-content min-h-screen">
        <!-- Nav -->
        @livewire('navigation')

        <!-- Main Content -->
        <main class="min-h-screen">
            <!-- Sección Hero -->
            @livewire('hero-section')

            <!-- Sección Sobre Mi -->
            @livewire('about-section')

            <!-- Sección Experiencia -->
            @livewire('experience-timeline')

            <!-- Sección Skills -->
            @livewire('skills-grid')

            <!-- Sección Proyectos -->
            @livewire('projects-showcase')

            <!-- Sección Contacto -->
            @livewire('contact-form')

            <!-- Sección Contacto -->
            @livewire('footer-section')

        </main>        

        @stack('modals')

        @livewireScripts
    </body>
</html>
