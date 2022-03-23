@extends('dashboard.master')

@section('content')
    <a class="btn btn-success mt-3 mb-3" href="{{ route('category.create') }}">
        crear
    </a>

    <table class="table">

        <thead>
            <td>
                Id
            </td>
            <td>
                Titulo
            </td>

            <td>
                Creacion
            </td>
            <td>
                Actualizacion
            </td>
            <td>
                acciones
            </td>
            </tr>
        </thead>
        <tbody>
            </thead>
        <tbody>
            @foreach($categories as $category)
                <thead>
                    <tr>
                        <td>
                            {{ $category->id }}
                        </td>
                        <td>
                            {{ $category->title }}
                        </td>

                        <td>
                            {{ $category->created_at->format('d-m-Y') }}
                        </td>
                        <td>
                            {{ $category->updated_at->format('d-m-Y') }}
                        </td>
                        <td>
                            <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                            <a class="btn btn-success mt-3 mb-3" href="{{ route('category.show', $category->id) }}"> VER </a>
                            <a class="btn btn-success mt-3 mb-3" href="{{ route('category.edit', $category->id) }}"> Actualizar </a>
                                @method('DELETE')
                                 @csrf
                            <button type="submit" data-toggle="modal" data-target="#deleteModal"
                                data-id="{{ $category->id }}" class="btn btn-danger"  onclick="return confirm('estas seguro de borrarlo')">Eliminar</button>
                               </form>

                        </td>
                    </tr>
                </thead>
        <tbody>
            @endforeach
        </tbody>
    </table>


    {{ $categories->links() }}


@endsection
