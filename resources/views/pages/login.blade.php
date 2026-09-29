@extends('layouts.app')

@section('content')
<div class="page-view fade-in py-20 content-layer flex items-center justify-center min-h-[70vh]">
    <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-sm w-full max-w-md">
        <h2 class="font-display text-3xl font-bold uppercase tracking-wide text-white mb-6 text-center">Acceso al <span class="text-tactical-accent">Arsenal</span></h2>
        
        @if ($errors->any())
            <div class="bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded-sm mb-6 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-zinc-400 text-sm font-bold uppercase tracking-wider mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full bg-tactical-panel border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent focus:ring-1 focus:ring-tactical-accent transition-colors rounded-sm">
            </div>
            
            <div>
                <label for="password" class="block text-zinc-400 text-sm font-bold uppercase tracking-wider mb-2">Contraseña</label>
                <input type="password" id="password" name="password" required class="w-full bg-tactical-panel border border-zinc-700 text-white px-4 py-3 focus:outline-none focus:border-tactical-accent focus:ring-1 focus:ring-tactical-accent transition-colors rounded-sm">
            </div>

            <button type="submit" class="w-full bg-tactical-accent hover:bg-tactical-accentHover text-white font-bold py-4 px-8 uppercase tracking-widest transition-all duration-300 rounded-sm">
                Iniciar Sesión <i class="fa-solid fa-right-to-bracket ml-2"></i>
            </button>
        </form>
        
        <div class="mt-6 text-center text-zinc-500 text-sm">
            <p>Email de prueba: <strong class="text-zinc-300">admin@apex.com</strong></p>
            <p>Contraseña: <strong class="text-zinc-300">password</strong></p>
        </div>
    </div>
</div>
@endsection
