<h1> {{ $Modo }} inmueble</h1>


@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
    @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
    @endforeach
</ul>

</div>
@endif

<div class="form-group">

    <label for="Nombre">  Nombre </label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset($inmueble->Nombre)?$inmueble->Nombre:old('Nombre') }}" id="Nombre">
    <br>

</div>

<div class="form-group">

<label for="Tipo">  Tipo </label>
<input class="form-control" type="text" name="Tipo" value="{{ isset($inmueble->Tipo)?$inmueble->Tipo:old('Tipo') }}" id="Tipo">
<br>
</div>

<div class="form-group">

<label for="Zonificacion">  Zonificacion </label>
<input class="form-control" type="text" name="Zonificacion" value="{{ isset($inmueble->Zonificacion)?$inmueble->Zonificacion:old('Zonificacion') }}" id="Zonificacion">
<br>

</div>

<label for="Condicion">  Condicion </label>
<input class="form-control" type="text" name="Condicion" value="{{ isset($inmueble->Condicion)?$inmueble->Condicion:old('Condicion') }}" id="Condicion">
<br>

<div class="form-group">

<label for="Tiempo_Alquiler">  Tiempo_Alquiler </label>
<input class="form-control" type="text" name="Tiempo_Alquiler" value="{{ isset($inmueble->Tiempo_Alquiler)?$inmueble->Tiempo_Alquiler : old('Tiempo_Alquiler') }}" id="Tiempo_Alquiler">
<br>

</div>

<div class="form-group">

<label for="Precio">  Precio </label>
<input class="form-control" type="text" name="Precio" value="{{ isset($inmueble->Precio)?$inmueble->Precio:old('Precio') }}" id="Precio">
<br>

</div>

<div class="form-group">

<label for="Mts2">  Mts2 </label>
<input class="form-control" type="text" name="Mts2" value="{{ isset($inmueble->Mts2)?$inmueble->Mts2:old('Mts2') }}" id="Mts2">
<br>

</div>

<div class="form-group">

<label for="Habitaciones">  Habitaciones </label>
<input class="form-control" type="text" name="Habitaciones" value="{{ isset($inmueble->Habitaciones)?$inmueble->Habitaciones:old('Habitaciones') }}" id="Habitaciones">
<br>

</div>

<div class="form-group">

<label for="Baños">  Baños </label>
<input class="form-control" type="text" name="Baños" value="{{ isset($inmueble->Baños)?$inmueble->Baños:old('Baños') }}" id="Baños">
<br>

</div>

<input class="btn btn-success" type="submit" value="{{ $Modo }} datos">

<a class="btn btn-primary" href="{{url('/inmuebles/')}}">Regresar</a>

<br>