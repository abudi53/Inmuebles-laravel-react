@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/inmuebles/'.$inmueble->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('inmuebles.form', ['Modo'=>'Editar']);

</form>

</div>
@endsection
