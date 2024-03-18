@extends('welcome')
@section('contenido')

<h1 class="text-center">Editar  Usuario</h1>
    <div class="d-flex justify-content-between ">
        <section class="secText" >
            <form action="/actualizar/{{$gestion->id}}" method="POST" class="formu">
                @csrf
                <label for="nombre"> *Nombre: </label><br>
                <input value="{{$gestion->nombre}}" type="text" name="nombre" id="nombre"  required><br><br>
                 <label for="correo"> *Correo electronico: </label><br>
                <input value="{{$gestion->correo}}" type="text" name="correo" id="correo"  required><br><br>
                <label for="contra"> contraseña: </label><br>
                <input value="{{$gestion->contra}}" type="password" name="contra" id="contra" ><br><br>
                <label for="rol"> Rol </label><br>
                <input value="{{$gestion->rol}}" type="text" name="rol" id="rol" ><br><br>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </section>
        <img src="{{ asset('imagen/editar.png') }}"  width="450" alt="...">
    </div>
@endsection