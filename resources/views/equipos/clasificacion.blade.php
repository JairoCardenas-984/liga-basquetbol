<x-app-layout>
    <div class="container">
        <h2>Clasificación de Equipos</h2>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Equipo</th>
                    <th>Ciudad</th>
                    <th>Entrenador</th>
                </tr>
            </thead>

            <tbody>
                @foreach($equipos as $index => $equipo)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $equipo->ciudad }}</td>
                        <td>{{ $equipo->entrenador }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>