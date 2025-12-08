import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Colores base (fondo principal)
                'base': {
                    100: '#1a1d23', // Convertido de oklch(25.33% 0.016 252.42)
                    200: '#16181d', // Convertido de oklch(23.26% 0.014 253.1)
                    300: '#121418', // Convertido de oklch(21.15% 0.012 254.09)
                    content: '#f0f2f5', // Convertido de oklch(97.807% 0.029 256.847)
                },
                // Color primario (principal)
                'primary': {
                    DEFAULT: '#c65151', // Convertido de oklch(63% 0.237 25.331)
                    content: '#f2f3ff', // Convertido de oklch(96% 0.018 272.314)
                },
                // Color secundario
                'secondary': {
                    DEFAULT: '#8a5bc4', // Convertido de oklch(58% 0.233 277.117)
                    content: '#f9f0ff', // Convertido de oklch(94% 0.028 342.258)
                },
                // Color de acento
                'accent': {
                    DEFAULT: '#5ecbc5', // Convertido de oklch(77% 0.152 181.912)
                    content: '#0f4140', // Convertido de oklch(38% 0.063 188.416)
                },
                // Color neutral
                'neutral': {
                    DEFAULT: '#1a1a1f', // Convertido de oklch(14% 0.005 285.823)
                    content: '#e8e8e8', // Convertido de oklch(92% 0.004 286.32)
                },
                // Colores de estado
                'info': {
                    DEFAULT: '#4d9de0', // Convertido de oklch(74% 0.16 232.661)
                    content: '#0f2942', // Convertido de oklch(29% 0.066 243.157)
                },
                'success': {
                    DEFAULT: '#3db39e', // Convertido de oklch(76% 0.177 163.223)
                    content: '#0d352d', // Convertido de oklch(37% 0.077 168.94)
                },
                'warning': {
                    DEFAULT: '#e6b445', // Convertido de oklch(82% 0.189 84.429)
                    content: '#47300a', // Convertido de oklch(41% 0.112 45.904)
                },
                'error': {
                    DEFAULT: '#d45c5c', // Convertido de oklch(71% 0.194 13.428)
                    content: '#451717', // Convertido de oklch(27% 0.105 12.094)
                },
            },
            borderRadius: {
                'selector': '0.5rem',
                'field': '0.25rem',
                'box': '0.5rem',
            },
            borderWidth: {
                DEFAULT: '1px',
            },
            boxShadow: {
                'depth-1': '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
            }
        },
    },

    plugins: [forms, typography],
};
