<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size:30px; font-weight:bold;">
            🏀 Panel de Control
        </h2>
    </x-slot>

    <div style="padding:30px;">

        <h1 style="
            font-size:35px;
            font-weight:800;
            margin-bottom:10px;
        ">
            Sistema de Gestión de Liga de Básquetbol
        </h1>

        <p style="
            color:#64748b;
            margin-bottom:35px;
            font-size:18px;
        ">
            Administra equipos, jugadores, partidos y estadísticas de la liga.
        </p>

        <div class="module-links">

            <a href="{{ route('equipos.index') }}">
                🏀<br><br>
                Gestión de Equipos
            </a>

            <a href="{{ route('jugadores.index') }}">
                👥<br><br>
                Gestión de Jugadores
            </a>

            <a href="{{ route('partidos.index') }}">
                📅<br><br>
                Registro de Partidos
            </a>

            <a href="{{ route('estadisticas.index') }}">
                📊<br><br>
                Estadísticas
            </a>

            <a href="{{ route('clasificacion') }}">
                🏆<br><br>
                Clasificación
            </a>

        </div>

        <div style="
            margin-top:50px;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        ">
            <h3 style="
                font-size:25px;
                margin-bottom:15px;
            ">
                📢 Información
            </h3>

            <p style="font-size:17px;">
                Bienvenido al sistema de gestión de la Liga de Básquetbol.
                Desde este panel podrás registrar equipos, jugadores,
                partidos y consultar las estadísticas y clasificación
                de la competición.
            </p>
        </div>

    </div>
</x-app-layout>