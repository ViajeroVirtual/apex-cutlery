@extends('layouts.app')

@section('content')
<div class="page-view fade-in py-12 content-layer">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- Timeline -->
        <div class="flex items-center justify-between mb-16 max-w-xl mx-auto">
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-box"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Resumen</span>
            </div>
            <div class="flex-grow h-px bg-tactical-accent -mt-6"></div>
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Pago</span>
            </div>
            <div class="flex-grow h-px bg-tactical-accent -mt-6"></div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 bg-tactical-accent rounded-full flex items-center justify-center text-white font-bold mb-2 z-10 relative"><i class="fa-solid fa-check"></i></div>
                <span class="text-tactical-accent font-bold uppercase tracking-widest text-xs">Completado</span>
            </div>
        </div>

        <div class="bg-tactical-panel border border-zinc-800 p-12 rounded-sm mb-8 flex flex-col items-center">
            
            <div class="w-24 h-24 bg-green-500/20 border border-green-500 rounded-full flex items-center justify-center mb-6 text-green-500 text-4xl">
                <i class="fa-solid fa-check"></i>
            </div>
            
            <h1 class="font-display text-5xl font-bold uppercase tracking-wide text-white mb-4">Transmisión <span class="text-tactical-accent">Recibida</span></h1>
            
            <p class="text-zinc-400 text-lg mb-8 max-w-lg">
                Agente {{ Auth::user()->name }}, su solicitud para adquirir el <strong>{{ $product['name'] }}</strong> ha sido autorizada. El paquete está siendo preparado para el despliegue a sus coordenadas.
            </p>

            <div class="bg-zinc-900 border border-zinc-800 p-4 rounded-sm w-full max-w-sm mb-8">
                <p class="text-sm text-zinc-500 uppercase font-bold tracking-widest mb-1">Código de Rastreo</p>
                <p class="text-xl font-mono text-tactical-accent font-bold tracking-widest">APEX-{{ rand(1000,9999) }}-{{ rand(100,999) }}</p>
            </div>

            <a href="{{ route('catalog') }}" class="bg-zinc-800 hover:bg-zinc-700 text-white font-bold py-4 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm">
                Volver al Catálogo <i class="fa-solid fa-crosshairs ml-2"></i>
            </a>

        </div>

    </div>
</div>
@endsection
