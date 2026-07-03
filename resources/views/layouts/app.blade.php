<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sona College of Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a', // Sona Blue
                        secondary: '#dc2626', // Sona Red accent
                        accent: '#dc2626', // For hover states
                        darktext: '#1a1a1a',
                        sonayellow: '#FBBF24', // Sona Yellow
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    fontSize: {
                        'md': '15px',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('styles')
</head>

<body class="antialiased overflow-x-hidden">

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Persistent Floating Apply Button -->
    <a href="#"
        class="fixed bottom-6 right-6 bg-yellow-500 hover:bg-yellow-400 text-[#081F3D] font-medium text-md px-6 py-3 rounded-full shadow-2xl transition transform hover:scale-105 z-50 flex items-center border-2 border-white">
        Apply Now <i class="fa-solid fa-arrow-right ml-2"></i>
    </a>

    @stack('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                once: true,
                duration: 800
            });
        });
    </script>
</body>

</html>
