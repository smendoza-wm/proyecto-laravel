@extends('layout')
    @section('content')
        <div id="fmAgregar" > 
            <form enctype="multipart/form-data" method="Post" action="contactos/agregar" class="fmAddCont">
                Nombre: <input type="text" name="nombre" required> </input><br>
                E-mail: <input type="text" name="email" required> </input><br>
                Tel. fijo: <input type="text" name="tel" required> </input><br>
                Celular: <input type="text" name="cel" required> </input><br>
                Dirección <input type="text" name="dir" required> </input><br>
                Agregar una imagen: <input type="file" name="foto" id="foto"></input><br>
                <input type="submit" value="Agregar contacto" required> </input>

            </form>
            <div class="messages"> </div>
        </div>
    @endsection