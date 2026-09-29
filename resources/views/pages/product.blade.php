@extends('layouts.app')

@section('content')
<div id="view-product" class="page-view fade-in py-12 content-layer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Breadcrumbs -->
                <nav class="flex mb-8 text-sm text-zinc-500 uppercase tracking-widest font-semibold">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Inicio</a>
                    <span class="mx-2">/</span>
                    <a href="{{ route('catalog') }}" class="hover:text-white transition-colors">Catálogo</a>
                    <span class="mx-2">/</span>
                    <a href="{{ route('catalog') }}" class="hover:text-white transition-colors">{{ $product['category'] }}</a>
                    <span class="mx-2">/</span>
                    <span class="text-tactical-accent">{{ $product['name'] }}</span>
                </nav>

                <div class="flex flex-col lg:flex-row gap-12">
                    
                    <!-- Video del Producto (Izquierda) -->
                    <div class="w-full lg:w-1/2 flex flex-col gap-4 lg:sticky lg:top-24 h-fit">
                        <div class="bg-zinc-900 border border-zinc-800 rounded-sm flex items-center justify-center p-0 relative overflow-hidden pointer-events-none" style="background-image: radial-gradient(#27272a 1px, transparent 1px); background-size: 20px 20px;">
                            @if($product['video'])
                            <video 
                                src="{{ asset($product['video']) }}" 
                                class="w-full h-auto object-contain rounded-sm" 
                                autoplay 
                                muted 
                                playsinline 
                                disablepictureinpicture 
                                onended="this.pause()"
                                controlslist="nodownload nofullscreen noremoteplayback"></video>
                            @elseif($product['image'])
                            <img 
                                src="{{ asset($product['image']) }}" 
                                alt="{{ $product['name'] }}"
                                class="w-full h-auto object-contain rounded-sm" />
                            @else
                            <div class="w-full aspect-video flex flex-col items-center justify-center text-zinc-600 bg-zinc-900 border border-zinc-800 rounded-sm">
                                <i class="fa-solid fa-image text-4xl mb-3"></i>
                                <span class="text-sm uppercase font-bold tracking-widest">Sin Medio Visual</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Información del Producto (Derecha) -->
                    <div class="w-full lg:w-1/2 flex flex-col">
                        <div class="flex items-center space-x-3 mb-2">
                            @if($product['tag'])
                            <span class="{{ $product['tag_color'] }} text-white text-xs font-bold uppercase tracking-wider px-2 py-1 rounded-sm">{{ $product['tag'] }}</span>
                            @endif
                            <span class="text-tactical-accent text-sm"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (124 reseñas)</span>
                        </div>
                        
                        <h1 class="font-display text-4xl sm:text-5xl font-bold uppercase tracking-wide text-white mb-4">{{ $product['name'] }}</h1>
                        <p class="text-3xl sm:text-4xl font-bold text-white mb-6">{{ number_format($product['price'], 2) }}€ <span class="text-xs sm:text-sm text-zinc-500 font-normal ml-2">Impuestos incluidos</span></p>

                        <p class="text-zinc-400 mb-8 leading-relaxed">
                            {{ $product['description'] }}
                        </p>

                        <!-- Controles de Compra -->
                        <form action="{{ route('cart.add', ['id' => $product['id']]) }}" method="POST" class="flex flex-col sm:flex-row gap-4 mb-10 pb-10 border-b border-zinc-800">
                            @csrf
                            <div class="flex border border-zinc-700 bg-tactical-panel w-32 rounded-sm shrink-0">
                                <button type="button" onclick="const q=document.getElementById('quantity'); if(q.value>1) q.value--;" class="w-10 h-12 flex items-center justify-center text-white hover:text-tactical-accent transition-colors"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-full bg-transparent text-center text-white font-bold focus:outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                                <button type="button" onclick="document.getElementById('quantity').value++;" class="w-10 h-12 flex items-center justify-center text-white hover:text-tactical-accent transition-colors"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <button type="submit" class="w-full bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-3 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm flex items-center justify-center text-lg">
                                Añadir al Arsenal <i class="fa-solid fa-cart-shopping ml-3"></i>
                            </button>
                        </form>

                        <!-- Especificaciones Técnicas -->
                        <h3 class="font-display text-2xl font-bold uppercase tracking-wide text-white mb-4 flex items-center">
                            <i class="fa-solid fa-clipboard-list text-tactical-accent mr-3"></i> Especificaciones Tácticas
                        </h3>
                        <ul class="divide-y divide-zinc-800 border-t border-b border-zinc-800 mb-8">
                            @foreach($product['specs'] as $key => $val)
                            <li class="py-3 flex justify-between">
                                <span class="text-zinc-400 font-semibold uppercase text-sm tracking-wider">{{ $key }}</span>
                                <span class="text-white font-bold text-sm">{{ $val }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <div class="flex items-center text-zinc-400 text-sm">
                            <i class="fa-solid fa-shield-check text-tactical-accent text-xl mr-3"></i>
                            <span>Respaldado por nuestra <strong>Garantía Táctica de Por Vida</strong> contra defectos de fabricación.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection