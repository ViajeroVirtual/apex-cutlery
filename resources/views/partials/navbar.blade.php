<nav class="fixed w-full bg-tactical-dark/95 backdrop-blur-md border-b border-zinc-800 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location.href='{{ route('home') }}'">
                    <img src="{{ asset('images/Logo.png') }}" alt="APEX CUTLERY Logo" class="h-16 w-auto mr-3" style="max-height: 4rem; width: auto; object-fit: contain;">
                    <span class="font-display text-2xl font-bold tracking-wider text-white uppercase mt-1">APEX <span class="text-tactical-accent">CUTLERY</span></span>
                </div>

                <!-- Enlaces de Menú (Desktop) -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="nav-link text-white hover:text-tactical-accent transition-colors uppercase text-sm font-semibold tracking-wider">Inicio</a>
                    <a href="{{ route('catalog') }}" class="nav-link text-gray-400 hover:text-white transition-colors uppercase text-sm font-semibold tracking-wider">Catálogo</a>
                    <a href="{{ route('contact') }}" class="nav-link text-gray-400 hover:text-white transition-colors uppercase text-sm font-semibold tracking-wider">Contacto</a>
                </div>

                <!-- Iconos de Acción -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('catalog') }}" class="text-gray-300 hover:text-tactical-accent transition-colors">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </a>
                    @auth
                        <div class="flex items-center space-x-3">
                            <span class="text-xs font-bold text-zinc-400 uppercase tracking-widest hidden lg:block">{{ Auth::user()->name }}</span>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-300 hover:text-tactical-accent transition-colors" title="Cerrar Sesión">
                                    <i class="fa-solid fa-right-from-bracket text-xl"></i>
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-tactical-accent transition-colors" title="Iniciar Sesión">
                            <i class="fa-regular fa-user text-xl"></i>
                        </a>
                    @endauth
                    <a href="{{ route('cart.view') }}" class="text-gray-300 hover:text-tactical-accent transition-colors relative" title="Ver Carrito">
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                        @php $cartCount = collect(session('cart', []))->sum(); @endphp
                        @if($cartCount > 0)
                        <span class="absolute -top-2 -right-2 bg-tactical-accent text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">{{ $cartCount }}</span>
                        @endif
                    </a>
                </div>

                <!-- Botón Menú Móvil -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Móvil (Desplegable) -->
        <div id="mobile-menu" class="hidden md:hidden bg-tactical-panel border-b border-zinc-800 absolute w-full">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="w-full text-left block px-3 py-2 text-base font-medium text-white hover:bg-zinc-800 rounded-md">Inicio</a>
                <a href="{{ route('catalog') }}" class="w-full text-left block px-3 py-2 text-base font-medium text-gray-300 hover:bg-zinc-800 rounded-md">Catálogo</a>
                <a href="{{ route('contact') }}" class="w-full text-left block px-3 py-2 text-base font-medium text-gray-300 hover:bg-zinc-800 rounded-md">Contacto</a>
                
                <div class="border-t border-zinc-800 mt-2 pt-2">
                    @auth
                        <div class="px-3 py-2 text-sm text-zinc-400 uppercase font-bold tracking-widest">{{ Auth::user()->name }}</div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left block px-3 py-2 text-base font-medium text-red-500 hover:bg-zinc-800 rounded-md">Cerrar Sesión</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="w-full text-left block px-3 py-2 text-base font-medium text-gray-300 hover:bg-zinc-800 rounded-md">Iniciar Sesión</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>