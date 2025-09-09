<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Integrador Tecnologia Emergente -D - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT LICENSE | ... (todo el CSS existente se mantiene igual) */
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <!-- Panel izquierdo - Información -->
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium text-2xl">Proyecto Integrador</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Sistema de gestión desarrollado con Laravel como parte del proyecto integrador de tecnologías emergentes.</p>
                    
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Dashboard administrativo con estadísticas
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Gestión de usuarios y permisos
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Reportes y análisis de datos
                            </span>
                        </li>
                    </ul>
                    
                    <div class="bg-[#f8f9fa] dark:bg-[#2a2a28] p-4 rounded-lg mb-4">
                        <h3 class="font-medium mb-2">Demo Dashboard</h3>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded">Usuarios: 124</div>
                            <div class="bg-green-100 dark:bg-green-900 p-2 rounded">Ventas: $12,456</div>
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-2 rounded">Pedidos: 45</div>
                            <div class="bg-red-100 dark:bg-red-900 p-2 rounded">Alertas: 3</div>
                        </div>
                    </div>

                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="{{ route('login') }}" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                Acceder al Sistema
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Panel derecho - Imagen/Logo -->
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden flex items-center justify-center">
                    <div class="text-center p-8">
                        <div class="w-32 h-32 bg-[#1b1b18] dark:bg-[#FF750F] rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-4xl font-bold">PI</span>
                        </div>
                        <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Sistema de Gestión</h2>
                        <p class="text-[#706f6c] dark:text-[#A1A09A]">Tecnologías Emergentes</p>
                        
                        <!-- Mini dashboard visual -->
                        <div class="mt-8 bg-white dark:bg-[#2a2a28] p-4 rounded-lg">
                            <div class="flex justify-between mb-3">
                                <div class="w-16 h-2 bg-blue-400 rounded"></div>
                                <div class="w-12 h-2 bg-green-400 rounded"></div>
                                <div class="w-14 h-2 bg-yellow-400 rounded"></div>
                            </div>
                            <div class="w-full h-20 bg-gray-100 dark:bg-[#3a3a38] rounded mb-2"></div>
                            <div class="flex gap-2">
                                <div class="w-1/4 h-8 bg-blue-200 dark:bg-blue-700 rounded"></div>
                                <div class="w-1/4 h-8 bg-green-200 dark:bg-green-700 rounded"></div>
                                <div class="w-1/4 h-8 bg-yellow-200 dark:bg-yellow-700 rounded"></div>
                                <div class="w-1/4 h-8 bg-red-200 dark:bg-red-700 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        <footer class="mt-8 text-center text-[#706f6c] dark:text-[#A1A09A] text-sm">
            <p>© 2024 Proyecto Integrador - Tecnologías Emergentes</p>
        </footer>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>