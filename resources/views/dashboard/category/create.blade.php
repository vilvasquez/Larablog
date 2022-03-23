@extends('dashboard.master')

@section('content')



<div class="container">

@include('dashboard.partials.validation-error')


<form action="{{route("category.store",$category->id)}}" method="POST">
@include('dashboard.category._form')
</form>

</div>
@endsection
