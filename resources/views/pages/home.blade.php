@extends('layouts.app')

@section('content')
<div id="view-home" class="page-view fade-in">
            <!-- Sección Hero -->
            <header class="relative h-[85vh] min-h-[600px] flex items-center justify-center content-layer">
                <div class="absolute inset-0 w-full h-full bg-tactical-dark">
                    <img src="{{ asset('images/Fondo de Inicio.png') }}?v={{ time() }}" 
                         alt="Cuchillo Táctico de Fondo" 
                         class="w-full h-full object-cover object-center filter grayscale contrast-125 opacity-40" />
                    <div class="absolute inset-0 bg-gradient-to-r from-tactical-dark via-tactical-dark/80 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-tactical-dark via-transparent to-transparent"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col items-start">
                    <div class="inline-block bg-tactical-panel/80 backdrop-blur-sm border border-zinc-700 px-3 py-1 rounded-sm mb-6">
                        <span class="text-tactical-accent font-bold tracking-widest text-sm uppercase">Nueva Colección 2026</span>
                    </div>
                    <h1 class="font-display font-bold text-6xl md:text-8xl leading-none text-white uppercase max-w-3xl mb-4">
                        Forjados para la <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-tactical-accent to-yellow-500">Acción Real</span>
                    </h1>
                    <p class="mt-4 text-xl text-gray-300 max-w-xl font-light">
                        Herramientas de corte de grado militar, diseñadas para sobrevivir a los entornos más extremos. Cuchillería de alto rendimiento sin compromisos.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('catalog') }}" class="bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-4 px-8 uppercase tracking-widest transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                            Explorar Catálogo <i class="fa-solid fa-arrow-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </header>

            <!-- Barra de Confianza -->
            <section class="bg-tactical-panel border-y border-zinc-800 content-layer">
                <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left divide-y md:divide-y-0 md:divide-x divide-zinc-800">
                        <div class="flex items-center justify-center md:justify-start space-x-4 pt-4 md:pt-0 pl-0 md:pl-8 first:pl-0">
                            <i class="fa-solid fa-truck-fast text-tactical-accent text-3xl"></i>
                            <div>
                                <h3 class="text-white font-bold uppercase tracking-wider text-sm">Envío Rápido</h3>
                                <p class="text-zinc-400 text-sm">Gratis en pedidos +100€</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center md:justify-start space-x-4 pt-8 md:pt-0 pl-0 md:pl-8">
                            <i class="fa-solid fa-shield-halved text-tactical-accent text-3xl"></i>
                            <div>
                                <h3 class="text-white font-bold uppercase tracking-wider text-sm">Garantía de por vida</h3>
                                <p class="text-zinc-400 text-sm">En materiales y defectos</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center md:justify-start space-x-4 pt-8 md:pt-0 pl-0 md:pl-8">
                            <i class="fa-solid fa-fire-flame-curved text-tactical-accent text-3xl"></i>
                            <div>
                                <h3 class="text-white font-bold uppercase tracking-wider text-sm">Acero Premium</h3>
                                <p class="text-zinc-400 text-sm">D2, S35VN, M390 y más</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
@endsection