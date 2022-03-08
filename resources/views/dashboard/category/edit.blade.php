@extends('dashboard.master')

@section('content')


@include('dashboard.partials.validation-error')


<form action="{{route("posts.update",$post->id)}}" method="POST">
 @method('PUT')
@include('dashboard.post._form')
</form>

@endsection
