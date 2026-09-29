<footer class="bg-black pt-16 pb-8 border-t border-zinc-800 content-layer mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center mb-6 cursor-pointer" onclick="window.location.href='{{ route('home') }}'">
                        <img src="{{ asset('images/Logo.png') }}" alt="APEX CUTLERY Logo" class="h-16 w-auto mr-3" style="max-height: 4rem; width: auto; object-fit: contain;">
                        <span class="font-display text-2xl font-bold tracking-wider text-white uppercase mt-1">APEX <span class="text-tactical-accent">CUTLERY</span></span>
                    </div>
                    <p class="text-zinc-400 text-sm mb-6">Equipamiento táctico de primera línea. Suministramos herramientas en las que puedes confiar cuando tu vida depende de ello.</p>
                </div>
                <div>
                    <h4 class="font-display text-xl font-bold uppercase tracking-wider text-white mb-6">Navegación Rápida</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-zinc-400 hover:text-tactical-accent transition-colors text-sm flex items-center"><i class="fa-solid fa-angle-right text-xs mr-2"></i> Inicio</a></li>
                        <li><a href="{{ route('catalog') }}" class="text-zinc-400 hover:text-tactical-accent transition-colors text-sm flex items-center"><i class="fa-solid fa-angle-right text-xs mr-2"></i> Catálogo Completo</a></li>
                        <li><a href="{{ route('contact') }}" class="text-zinc-400 hover:text-tactical-accent transition-colors text-sm flex items-center"><i class="fa-solid fa-angle-right text-xs mr-2"></i> Operaciones (Contacto)</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-display text-xl font-bold uppercase tracking-wider text-white mb-6">Soporte Operativo</h4>
                    <ul class="space-y-3">
                        <li><a href="https://google.com" class="text-zinc-400 hover:text-white transition-colors text-sm">Envíos y Devoluciones</a></li>
                        <li><a href="https://google.com" class="text-zinc-400 hover:text-white transition-colors text-sm">Garantía del Fabricante</a></li>
                        <li><a href="https://google.com" class="text-zinc-400 hover:text-white transition-colors text-sm">Leyes y Regulaciones</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-display text-xl font-bold uppercase tracking-wider text-white mb-6">Redes Seguras</h4>
                    <div class="flex space-x-4">
                        <a href="https://google.com" class="w-10 h-10 bg-zinc-900 flex items-center justify-center text-zinc-400 hover:text-white hover:bg-tactical-accent transition-all rounded-sm"><i class="fa-brands fa-instagram text-xl"></i></a>
                        <a href="https://google.com" class="w-10 h-10 bg-zinc-900 flex items-center justify-center text-zinc-400 hover:text-white hover:bg-tactical-accent transition-all rounded-sm"><i class="fa-brands fa-youtube text-xl"></i></a>
                        <a href="https://google.com" class="w-10 h-10 bg-zinc-900 flex items-center justify-center text-zinc-400 hover:text-white hover:bg-tactical-accent transition-all rounded-sm"><i class="fa-brands fa-x-twitter text-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-zinc-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-zinc-600 text-xs mb-4 md:mb-0">&copy; 2026 APEX CUTLERY. Todos los derechos reservados.</p>
                <div class="flex space-x-4">
                    <i class="fa-brands fa-cc-visa text-zinc-600 text-2xl"></i>
                    <i class="fa-brands fa-cc-mastercard text-zinc-600 text-2xl"></i>
                    <i class="fa-brands fa-cc-paypal text-zinc-600 text-2xl"></i>
                </div>
            </div>
        </div>
    </footer>