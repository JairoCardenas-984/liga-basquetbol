<h1 style="
font-size:35px;
font-weight:bold;
margin-bottom:30px;
">
🏆 Clasificación General
</h1>
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
                        <td>{{ $equipo->ciudad }}</td>git add .
git commit -m "Implementar clasificación de equipos"
git push
                        <td>{{ $equipo->entrenador }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>