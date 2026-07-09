<nav class="bg-slate-900 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-16 items-center">

            <div class="flex items-center gap-8">

                <a href="{{ route('dashboard') }}"
                   class="text-2xl font-bold text-orange-500">
                    🏀 Liga Básquetbol
                </a>

                <div class="flex gap-6">

                    <a href="{{ route('equipos.index') }}"
                       class="text-white hover:text-orange-400">
                        Equipos
                    </a>

                    <a href="{{ route('jugadores.index') }}"
                       class="text-white hover:text-orange-400">
                        Jugadores
                    </a>

                    <a href="{{ route('partidos.index') }}"
                       class="text-white hover:text-orange-400">
                        Partidos
                    </a>

                    <a href="{{ route('clasificacion') }}"
                       class="text-white hover:text-orange-400">
                        Clasificación
                    </a>

                </div>
            </div>

            <div class="text-white">
                {{ Auth::user()->name }}
            </div>

        </div>
    </div>
</nav>
