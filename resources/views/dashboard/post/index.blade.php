@extends('dashboard.master')

@section('content')
    <a class="btn btn-success mt-3 mb-3" href="{{ route('posts.create') }}">
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
                Categoria
            </td>
            <td>
                Posteado
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
            @foreach ($posts as $post)
                <thead>
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->category_id}}
                        </td>
                        <td>
                            {{ $post->posted }}
                        </td>
                        <td>
                            {{ $post->created_at->format('d-m-Y') }}
                        </td>
                        <td>
                            {{ $post->updated_at->format('d-m-Y') }}
                        </td>
                        <td>
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            <a class="btn btn-success mt-3 mb-3" href="{{ route('posts.show', $post->id) }}"> VER </a>
                            <a class="btn btn-success mt-3 mb-3" href="{{ route('posts.edit', $post->id) }}"> Actualizar </a>
                                @method('DELETE')
                                 @csrf
                            <button type="submit" data-toggle="modal" data-target="#deleteModal"
                                data-id="{{ $post->id }}" class="btn btn-danger"  onclick="return confirm('estas seguro de borrarlo')">Eliminar</button>
                               </form>

                        </td>
                    </tr>
                </thead>
        <tbody>
            @endforeach
        </tbody>
    </table>


    {{ $posts->links() }}


@endsection
