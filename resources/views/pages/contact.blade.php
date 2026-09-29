@extends('layouts.app')

@section('content')
<div id="view-contact" class="page-view fade-in py-12 content-layer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-16">
                    <h1 class="font-display text-5xl font-bold uppercase tracking-wide text-white">Comando <span class="text-tactical-accent">Central</span></h1>
                    <div class="h-1 w-24 bg-tactical-accent mx-auto mt-4 mb-4"></div>
                    <p class="text-zinc-400 max-w-2xl mx-auto text-lg">¿Dudas sobre equipamiento? ¿Pedidos especiales para tu unidad? Contacta con nuestros operadores. Responderemos en menos de 24 horas.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-tactical-panel border border-zinc-800 rounded-sm overflow-hidden p-1">
                    
                    <!-- Info de Contacto -->
                    <div class="bg-zinc-900 p-8 md:p-12 relative overflow-hidden">
                        <!-- Decoración fondo -->
                        <i class="fa-solid fa-crosshairs absolute -bottom-10 -right-10 text-[15rem] text-zinc-800 opacity-20 transform -rotate-45"></i>
                        
                        <div class="relative z-10">
                            <h3 class="font-display text-3xl font-bold uppercase tracking-wide text-white mb-8">Coordenadas</h3>
                            
                            <div class="space-y-8">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-tactical-dark border border-zinc-700 flex items-center justify-center rounded-sm mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-map-location-dot text-tactical-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-1">Ubicación de la Armería</h4>
                                        <p class="text-zinc-400 text-sm">Zona Industrial Norte, Sector Alpha, Bloque 4<br>28001, Madrid, España</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-tactical-dark border border-zinc-700 flex items-center justify-center rounded-sm mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-phone-volume text-tactical-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-1">Línea Segura</h4>
                                        <p class="text-zinc-400 text-sm">+34 900 123 456<br>Lunes a Viernes, 0900 hrs - 1800 hrs</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-tactical-dark border border-zinc-700 flex items-center justify-center rounded-sm mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-envelope-open-text text-tactical-accent text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-1">Transmisiones (Email)</h4>
                                        <p class="text-zinc-400 text-sm">operaciones@filotactico.es<br>soporte@filotactico.es</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario -->
                    <div class="p-8 md:p-12">
                        <h3 class="font-display text-3xl font-bold uppercase tracking-wide text-white mb-8">Enviar Transmisión</h3>
                        <form class="space-y-6" onsubmit="event.preventDefault(); alert('Mensaje enviado a la central. Cambio y corto.');">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-zinc-500 text-xs font-bold uppercase tracking-wider mb-2">Nombre en Clave (Nombre)</label>
                                    <input type="text" required class="w-full bg-tactical-dark border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent rounded-sm">
                                </div>
                                <div>
                                    <label class="block text-zinc-500 text-xs font-bold uppercase tracking-wider mb-2">Frecuencia (Email)</label>
                                    <input type="email" required class="w-full bg-tactical-dark border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent rounded-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-zinc-500 text-xs font-bold uppercase tracking-wider mb-2">Asunto de la Misión</label>
                                <select class="w-full bg-tactical-dark border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent rounded-sm appearance-none">
                                    <option>Consulta sobre producto</option>
                                    <option>Problemas con envío</option>
                                    <option>Suministro a unidades/mayorista</option>
                                    <option>Garantía y reparaciones</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-zinc-500 text-xs font-bold uppercase tracking-wider mb-2">Mensaje</label>
                                <textarea rows="5" required class="w-full bg-tactical-dark border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent rounded-sm resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-4 px-8 uppercase tracking-widest transition-colors rounded-sm flex items-center justify-center">
                                Tansmitir Mensaje <i class="fa-solid fa-satellite-dish ml-3"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection