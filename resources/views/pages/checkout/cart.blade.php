@extends('layouts.app')

@section('content')
<div class="page-view fade-in py-12 content-layer">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h1 class="font-display text-4xl font-bold uppercase tracking-wide text-white mb-8 border-b border-zinc-800 pb-4">Tu <span class="text-tactical-accent">Arsenal</span></h1>

        <!-- Timeline -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 bg-tactical-accent rounded-full flex items-center justify-center text-white font-bold mb-2 z-10 relative"><i class="fa-solid fa-box"></i></div>
                <span class="text-tactical-accent font-bold uppercase tracking-widest text-xs">Resumen</span>
            </div>
            <div class="flex-grow h-px bg-zinc-800 -mt-6"></div>
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Pago</span>
            </div>
            <div class="flex-grow h-px bg-zinc-800 -mt-6"></div>
            <div class="flex flex-col items-center opacity-50">
                <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-zinc-400 font-bold mb-2 z-10 relative"><i class="fa-solid fa-check"></i></div>
                <span class="text-zinc-400 font-bold uppercase tracking-widest text-xs">Completado</span>
            </div>
        </div>

        @if(count($cartItems) > 0)
            <div class="space-y-4 mb-8">
                @foreach($cartItems as $item)
                <div class="bg-tactical-panel border border-zinc-800 p-6 rounded-sm flex gap-6 flex-col md:flex-row items-center relative">
                    
                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST" class="absolute top-4 right-4">
                        @csrf
                        <button type="submit" class="text-zinc-500 hover:text-red-500 transition-colors"><i class="fa-solid fa-xmark text-xl"></i></button>
                    </form>

                    <div class="w-32 h-32 bg-zinc-900 rounded-sm overflow-hidden flex-shrink-0">
                        <img src="{{ asset($item['image']) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-grow text-center md:text-left">
                        <h2 class="text-2xl font-display font-bold text-white uppercase">{{ $item['name'] }}</h2>
                        <p class="text-zinc-400 mt-1">{{ $item['category'] }}</p>
                        <div class="mt-4 flex border border-zinc-700 w-24 rounded-sm mx-auto md:mx-0">
                            <span class="w-full bg-transparent text-center text-white font-bold py-1 text-sm">{{ $item['quantity'] }}</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-3xl font-bold text-tactical-accent">{{ number_format($item['price'] * $item['quantity'], 2) }}€</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Summary -->
            <div class="bg-tactical-panel border border-zinc-800 p-6 rounded-sm mb-8">
                <div class="flex justify-between text-zinc-400 mb-2">
                    <span>Subtotal</span>
                    <span>{{ number_format($total, 2) }}€</span>
                </div>
                <div class="flex justify-between text-zinc-400 mb-4 pb-4 border-b border-zinc-800">
                    <span>Envío (Táctico Urgente)</span>
                    <span>Gratis</span>
                </div>
                <div class="flex justify-between text-white text-xl font-bold">
                    <span>Total</span>
                    <span class="text-tactical-accent">{{ number_format($total, 2) }}€</span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('catalog') }}" class="text-zinc-400 hover:text-white uppercase text-sm font-bold tracking-widest transition-colors"><i class="fa-solid fa-arrow-left mr-2"></i> Seguir Comprando</a>
                <a href="{{ route('checkout.payment') }}" class="bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-3 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm">
                    Proceder al Pago <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        @else
            <div class="bg-tactical-panel border border-zinc-800 p-12 rounded-sm mb-8 text-center">
                <i class="fa-solid fa-box-open text-6xl text-zinc-800 mb-4"></i>
                <h2 class="text-2xl font-bold text-white mb-4">Tu arsenal está vacío</h2>
                <p class="text-zinc-400 mb-8">No has añadido ningún equipo a tu carrito todavía.</p>
                <a href="{{ route('catalog') }}" class="bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-3 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm inline-block">
                    Explorar Catálogo
                </a>
            </div>
        @endif

    </div>
</div>
@endsection
