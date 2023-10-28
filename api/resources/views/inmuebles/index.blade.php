@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
       {{ Session::get('Mensaje')}}
</div>
@endif





<a href="{{url('/inmuebles/create')}}" class="btn btn-success">Registrar nuevo inmueble</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Precio Total</th>
            <th>Zonificacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $inmuebles as $inmueble )
        <tr>
            <td>{{ $inmueble->id }}</td>
            <td>{{ $inmueble->Nombre }}</td>
            <td>{{ $inmueble->Precio }}</td>
            <td>{{ ($inmueble->Precio) * ($inmueble->Mts2) }}</td>
            <td>{{ $inmueble->Zonificacion }}</td>
            <td>
                <a href="{{ url('/inmuebles/'.$inmueble->id.'/edit') }}" class="btn btn-warning">
                Editar

            </a>
             |

            <form action="{{ url('/inmuebles/'.$inmueble->id ) }}" class="d-inline" method="post">  
            @csrf

            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection