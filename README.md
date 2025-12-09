# Portafolio Profesional - Oliver Gómez

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9?style=for-the-badge&logo=livewire)](https://laravel-livewire.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)](https://php.net)

## 📋 Descripción

Portafolio web profesional desarrollado con **Laravel 12**, **Jetstream**, **Livewire** y **Tailwind CSS**. Presenta mis habilidades como **Backend Developer** con más de 3 años de experiencia en PHP, Laravel, APIs y sistemas Linux.

## ✨ Características

✅ **8 secciones completas** (Hero, Sobre mí, Experiencia, Habilidades, Proyectos, Contacto)  
✅ **Diseño responsive** (mobile-first)  
✅ **Formulario de contacto funcional** con envío de emails  
✅ **Navegación fluida** con menú hamburguesa  
✅ **Optimizado para SEO**  
✅ **Performance optimizado**  
✅ **Código limpio y organizado**

## 🏗️ Estructura del Proyecto

app/Livewire/
├── Navigation.php # Navegación responsiva
├── HeroSection.php # Sección principal
├── AboutSection.php # Información personal
├── ExperienceTimeline.php # Timeline de experiencias
├── SkillsGrid.php # Grid de habilidades
├── ProjectsShowcase.php # Galería de proyectos
├── EducationSection.php # Educación y certificados
├── ContactForm.php # Formulario de contacto
└── FooterSection.php # Pie de página

resources/views/
├── components/ # Componentes reutilizables
├── layouts/ # Layouts principales
├── livewire/ # Vistas de componentes Livewire
└── emails/ # Plantillas de email


## 🛠️ Tecnologías

### Backend
- Laravel 12 + Jetstream
- Livewire 3 + Alpine.js
- MySQL + Eloquent ORM
- PHP 8.2+

### Frontend
- Tailwind CSS 3
- JavaScript ES6+
- HTML5 semántico

### Herramientas
- Git/GitHub
- Composer/NPM
- SMTP/Mailtrap

## 🚀 Instalación Rápida

### Prerrequisitos
```bash
PHP >= 8.2
Composer 2.x
Node.js 18.x
MySQL 8.x

# 1. Clonar repositorio
git clone https://github.com/kaizerenrique/portafolio.git
cd portafolio

# 2. Instalar dependencias
composer install
npm install
npm run build

# 3. Configurar entorno
cp .env.example .env
php artisan key:generate

# 4. Configurar base de datos en .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portafolio
DB_USERNAME=root
DB_PASSWORD=

# 5. Migrar base de datos
php artisan migrate

# 6. Iniciar servidor
php artisan serve

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@gmail.com
MAIL_FROM_NAME="Portafolio Oliver"

## ⚙️ Configuración del Formulario de Contacto

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@gmail.com
MAIL_FROM_NAME="Portafolio Oliver"

## 🚀 Despliegue en Producción

# Cache de configuraciones
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build de assets
npm run production

# Optimizar autoload
composer install --optimize-autoloader --no-dev