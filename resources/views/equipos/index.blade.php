<h1 style="
font-size:35px;
font-weight:bold;
margin-bottom:30px;
">
🏀 Gestión de Equipos
</h1>
<x-app-layout>
    <x-slot name="header">
        <h2>Gestión de Equipos</h2>
    </x-slot>

    <div style="padding: 30px;">
        <a href="{{ route('equipos.create') }}"class="auth-button">Nuevo Equipo</a>
        |
        <a href="{{ route('jugadores.index') }}">Ver jugadores</a>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <table border="1" cellpadding="10" style="margin-top: 20px;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Entrenador</th>
                <th>Acciones</th>
            </tr>

            @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->ciudad }}</td>
                    <td>{{ $equipo->entrenador }}</td>
                    <td>
                        <a href="{{ route('equipos.edit', $equipo) }}">Editar</a>

                        <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
