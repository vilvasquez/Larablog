@extends('dashboard.master')

@section('content')



<div class="container">

@include('dashboard.partials.validation-error')


<form action="{{route("posts.store",$post->id)}}" method="POST">
@include('dashboard.post._form')
</form>

</div>
@endsection
