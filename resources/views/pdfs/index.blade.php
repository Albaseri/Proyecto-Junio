<!-- resources/views/pdf/index.blade.php -->

@extends('layout.principal')

@section('titulo')
    crear
@endsection
@section('cabecera')
    nuevo pdf
@endsection

@section('content')
    <div class="container">
        <h1>PDFs</h1>

        <a href="{{ route('pdfs.create') }}" class="btn btn-primary mb-3">Subir PDF</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre de archivo</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdfs as $pdf)
                    <tr>
                        <td>{{ $pdf->id }}</td>
                        <td>{{ $pdf->name }}</td>
                        <td>{{ $pdf->file_name }}</td>
                        <td>{{ $pdf->user->name }}</td>
                        <td>
                            <a href="{{ route('pdfs.edit', $pdf) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('pdfs.destroy', $pdf) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este PDF?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
