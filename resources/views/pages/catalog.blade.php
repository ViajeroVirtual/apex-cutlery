@extends('layouts.app')

@section('content')
<div id="view-catalog" class="page-view fade-in py-12 content-layer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Encabezado del Catálogo -->
                <div class="mb-6 sm:mb-8 border-b border-zinc-800 pb-4 sm:pb-6 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                    <div>
                        <h1 class="font-display text-4xl sm:text-5xl font-bold uppercase tracking-wide text-white">Catálogo <span class="text-tactical-accent">Táctico</span></h1>
                        <p class="text-zinc-400 mt-2 text-sm sm:text-base">Explora nuestro arsenal completo. Usa los filtros para encontrar tu herramienta ideal.</p>
                    </div>
                    <div class="flex items-center justify-between w-full md:w-auto space-x-4">
                        <button id="mobile-filter-btn" class="lg:hidden bg-zinc-800 hover:bg-zinc-700 text-white px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-sm border border-zinc-700 flex items-center transition-colors">
                            <i class="fa-solid fa-filter mr-2"></i> Filtros
                        </button>
                        <div class="flex items-center space-x-2">
                            <span class="hidden sm:inline text-sm text-zinc-500 uppercase tracking-widest">Ordenar:</span>
                        <select name="sort" form="filterForm" onchange="document.getElementById('filterForm').submit();" class="bg-tactical-panel border border-zinc-700 text-white text-sm rounded-sm p-2 focus:outline-none focus:border-tactical-accent">
                            <option value="">Relevancia</option>
                            <option value="price_asc" @if(request('sort') == 'price_asc') selected @endif>Precio: Menor a Mayor</option>
                            <option value="price_desc" @if(request('sort') == 'price_desc') selected @endif>Precio: Mayor a Menor</option>
                            <option value="newest" @if(request('sort') == 'newest') selected @endif>Novedades</option>
                        </select>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Sidebar Filtros -->
                    <aside id="filter-sidebar" class="hidden lg:block w-full lg:w-64 flex-shrink-0">
                        <form id="filterForm" method="GET" action="{{ route('catalog') }}" class="bg-tactical-panel border border-zinc-800 p-6 lg:sticky top-24 rounded-sm">
                            <h3 class="font-bold text-white uppercase tracking-wider mb-4 flex items-center">
                                <i class="fa-solid fa-filter text-tactical-accent mr-2"></i> Filtros
                            </h3>
                            
                            <div class="mb-6">
                                <h4 class="text-sm font-semibold text-zinc-400 uppercase tracking-widest mb-3">Tipo de Hoja</h4>
                                <div class="space-y-2">
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="categories[]" value="Hoja Fija" @if(in_array('Hoja Fija', request('categories', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900 focus:ring-tactical-accent focus:ring-offset-tactical-dark">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">Hoja Fija</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="categories[]" value="Navaja EDC" @if(in_array('Navaja EDC', request('categories', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900 focus:ring-tactical-accent focus:ring-offset-tactical-dark">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">Navaja EDC</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="categories[]" value="Defensa Personal" @if(in_array('Defensa Personal', request('categories', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900 focus:ring-tactical-accent focus:ring-offset-tactical-dark">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">Defensa Personal</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="categories[]" value="Machetes" @if(in_array('Machetes', request('categories', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900 focus:ring-tactical-accent focus:ring-offset-tactical-dark">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">Machetes</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="text-sm font-semibold text-zinc-400 uppercase tracking-widest mb-3">Material (Acero)</h4>
                                <div class="space-y-2">
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="steels[]" value="D2 Alto Carbono" @if(in_array('D2 Alto Carbono', request('steels', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">D2 Alto Carbono</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="steels[]" value="8Cr14MoV" @if(in_array('8Cr14MoV', request('steels', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">8Cr14MoV</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="steels[]" value="N690Co" @if(in_array('N690Co', request('steels', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">N690Co</span>
                                    </label>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="steels[]" value="Acero al Carbono 1095" @if(in_array('Acero al Carbono 1095', request('steels', []))) checked @endif class="form-checkbox h-4 w-4 text-tactical-accent rounded-sm border-zinc-600 bg-zinc-900">
                                        <span class="text-sm text-gray-300 group-hover:text-white transition-colors">Acero 1095</span>
                                    </label>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <button type="submit" class="w-full bg-zinc-800 hover:bg-zinc-700 text-white text-sm font-bold py-2 px-4 uppercase tracking-wider transition-colors border border-zinc-600 rounded-sm">
                                    Aplicar Filtros
                                </button>
                                @if(request()->has('categories') || request()->has('steels') || request()->has('sort'))
                                <a href="{{ route('catalog') }}" class="text-center w-full bg-transparent hover:bg-tactical-accent/10 text-tactical-accent text-sm font-bold py-2 px-4 uppercase tracking-wider transition-colors border border-transparent hover:border-tactical-accent/30 rounded-sm">
                                    Limpiar
                                </a>
                                @endif
                            </div>
                        </form>
                    </aside>

                    <!-- Grid de Catálogo -->
                    <div class="flex-grow">
                        @if(count($products) > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($products as $prod)
                            <div onclick="window.location.href='{{ route('product', $prod['id']) }}'" class="bg-tactical-dark border border-zinc-800 group hover:border-tactical-accent transition-colors duration-300 flex flex-col h-full rounded-sm overflow-hidden cursor-pointer">
                                <div class="relative aspect-video overflow-hidden bg-zinc-900 flex items-center justify-center">
                                    @if($prod['tag'])
                                    <div class="absolute top-3 left-3 {{ $prod['tag_color'] }} text-white text-xs font-bold uppercase tracking-wider px-2 py-1 z-10">{{ $prod['tag'] }}</div>
                                    @endif
                                    @if($prod['image'])
                                        <img src="{{ asset($prod['image']) }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full flex flex-col items-center justify-center text-zinc-600 bg-zinc-900 border border-zinc-800">
                                            <i class="fa-solid fa-image text-3xl mb-2"></i>
                                            <span class="text-xs uppercase font-bold tracking-widest">Sin Imagen</span>
                                        </div>
                                    @endif
                                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <span class="text-white font-bold uppercase tracking-widest bg-tactical-accent px-4 py-2 rounded-sm">Ver Detalles</span>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <div class="flex justify-between items-start mb-2">
                                        <span class="text-xs text-zinc-500 uppercase font-bold tracking-wider">{{ $prod['category'] }}</span>
                                    </div>
                                    <h3 class="text-xl font-display font-bold uppercase tracking-wide text-white mb-2 line-clamp-2">{{ $prod['name'] }}</h3>
                                    <p class="text-zinc-400 text-sm mb-4 line-clamp-2 flex-grow">{{ $prod['short_description'] }}</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-zinc-800">
                                        <span class="text-2xl font-bold text-white">{{ number_format($prod['price'], 2) }}€</span>
                                        <i class="fa-solid fa-cart-plus text-2xl text-zinc-600 group-hover:text-tactical-accent transition-colors"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Botón cargar más simulado -->
                        <div class="mt-8 text-center">
                            <button class="bg-transparent border-2 border-zinc-700 hover:border-tactical-accent text-white font-bold py-3 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm">
                                Cargar Más Armamento
                            </button>
                        </div>
                        @else
                        <!-- Estado vacío -->
                        <div class="text-center py-24 bg-tactical-panel border border-zinc-800 rounded-sm h-full flex flex-col items-center justify-center">
                            <i class="fa-solid fa-ghost text-6xl text-zinc-700 mb-6"></i>
                            <h3 class="text-2xl font-display font-bold uppercase tracking-wide text-white mb-2">Sin Resultados</h3>
                            <p class="text-zinc-400 max-w-md mx-auto mb-6">No hay armas en el arsenal que coincidan con tus especificaciones.</p>
                            <a href="{{ route('catalog') }}" class="bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-3 px-6 uppercase tracking-wider transition-colors rounded-sm inline-block">
                                Mostrar Todo
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtn = document.getElementById('mobile-filter-btn');
        const filterSidebar = document.getElementById('filter-sidebar');
        
        if(filterBtn && filterSidebar) {
            filterBtn.addEventListener('click', () => {
                filterSidebar.classList.toggle('hidden');
            });
        }
    });
</script>
@endsection