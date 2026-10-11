@foreach ($mapeo as $value)
    @php
        $estado = '';
        if ($value->ocupado == 1) {
            $estado = 'ocupado';
        } else {
            $estado = 'disponible';
        }
    @endphp
    <div class="elemento {{ $estado }}" data-toggle="tooltip" title="Seleccionar para modificar o eliminar">
        <input type="text" class="id" value="{{ $value->id }}" readonly hidden>
        <input type="text" class="nom" value="{{ $value->nom }}" readonly hidden>
        <div class="nombre">
            {{ $value->nom }}
        </div>
    </div>
@endforeach
