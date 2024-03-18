@extends('welcome')
@section('contenido')

<h1 class="text-center">Creacion de Usuarios</h1>
<div class="d-flex justify-content-between ">
    <section class="secText"   >
            <form action="/crear" method="POST" class="formu">
                @csrf
                <br>
                 <label for="nombre"> *Nombre: </label><br>
                <input type="text" name="nombre" id="nombre"  required><br><br>
                <label for="rol"> Rol </label><br>
                <input type="text" name="rol" id="rol" ><br><br>
                <label for="correo"> *Correo electronico: </label><br>
                <input type="text" name="correo" id="correo"  required><br><br>
                <label for="contra"> Contraseña: </label><br>
                <input type="password" name="contra" id="contra" ><br><br>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>    
        </section>
    <img src="imagen/form.png"  width="450" alt="...">
</div>
@endsection