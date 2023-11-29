<ul>
    @foreach ($saludos as $saludo)
        <li>
            <p>
                {{ $saludo->saludo }}
            </p>
            <a href="{{ route('editar', $saludo->id) }}">Editar</a>
            -
            <form action="{{ route('eliminar', $saludo->id) }}" method="POST">
                @csrf
                <button type="submit">Eliminar</button>
            </form>

        </li>
    @endforeach

</ul>
