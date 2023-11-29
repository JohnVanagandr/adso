<form action="{{ route('actualizar', $saludo->id) }}" method="POST">
    @csrf
    <input type="text" name="saludo" value="{{ $saludo->saludo }}">
    <button type="submit">Editar</button>
</form>
