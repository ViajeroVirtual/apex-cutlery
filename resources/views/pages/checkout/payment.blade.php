@extends('layouts.app')

@section('content')
<div class="page-view fade-in py-12 content-layer">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h1 class="font-display text-4xl font-bold uppercase tracking-wide text-white mb-8 border-b border-zinc-800 pb-4">Procesar <span class="text-tactical-accent">Despliegue</span></h1>

        <!-- Timeline -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-box"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Resumen</span>
            </div>
            <div class="flex-grow h-px bg-tactical-accent -mt-6"></div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 bg-tactical-accent rounded-full flex items-center justify-center text-white font-bold mb-2 z-10 relative"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-tactical-accent font-bold uppercase tracking-widest text-xs">Pago</span>
            </div>
            <div class="flex-grow h-px bg-zinc-800 -mt-6"></div>
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-check"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Completado</span>
            </div>
        </div>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- Direccion -->
                <div class="bg-tactical-panel border border-zinc-800 p-6 rounded-sm">
                    <h3 class="font-display text-2xl text-white uppercase tracking-wider mb-6 border-b border-zinc-800 pb-2"><i class="fa-solid fa-location-crosshairs text-tactical-accent mr-2"></i> Coordenadas de Envío</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">Nombre Completo</label>
                            <input type="text" value="{{ Auth::user()->name }}" class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm" readonly>
                        </div>
                        <div>
                            <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">Dirección de Entrega</label>
                            <input type="text" name="address" required placeholder="Ej. Base Operativa Alpha, Sector 7" class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">Ciudad</label>
                                <input type="text" required class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                            </div>
                            <div>
                                <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">C.P.</label>
                                <input type="text" required class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pago -->
                <div class="bg-tactical-panel border border-zinc-800 p-6 rounded-sm">
                    <h3 class="font-display text-2xl text-white uppercase tracking-wider mb-6 border-b border-zinc-800 pb-2"><i class="fa-solid fa-shield-halved text-tactical-accent mr-2"></i> Enlace Seguro de Pago</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">Número de Tarjeta</label>
                            <input type="text" name="card" required placeholder="XXXX-XXXX-XXXX-XXXX" class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">Caducidad</label>
                                <input type="text" placeholder="MM/AA" required class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                            </div>
                            <div>
                                <label class="block text-zinc-400 text-xs font-bold uppercase tracking-wider mb-1">CVC</label>
                                <input type="password" placeholder="***" required class="w-full bg-zinc-900 border border-zinc-700 text-white px-4 py-2 focus:outline-none focus:border-tactical-accent rounded-sm">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 bg-zinc-900 p-4 border border-zinc-800 flex justify-between items-center rounded-sm">
                        <span class="text-zinc-400 uppercase font-bold tracking-widest text-sm">Total a pagar:</span>
                        <span class="text-2xl font-bold text-tactical-accent">{{ number_format($total, 2) }}€</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('cart.view') }}" class="text-zinc-400 hover:text-white uppercase text-sm font-bold tracking-widest transition-colors"><i class="fa-solid fa-arrow-left mr-2"></i> Volver al Resumen</a>
                <button type="submit" class="bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-3 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm">
                    Confirmar Transmisión <i class="fa-solid fa-satellite-dish ml-2"></i>
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
