@extends('layouts.templatePractica')
@section('title','Solicitud')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <fieldset>
          <legend>Formulario de Solicitud</legend>          
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Nombre">
            <small id="emailHelp" class="form-text text-muted">Nombre</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese sus Apellidos">
            <small id="emailHelp" class="form-text text-muted">Apellidos</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Número de Control</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Num de Control">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Género</label>
            <select class="form-select" id="exampleSelect1">
              <option>Masculino</option>
              <option>Femenino</option>        
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Semestre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semestre Cursando">
            <small id="emailHelp" class="form-text text-muted">Semestre</small>
          </div>
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Example select</label>
            <select class="form-select" id="exampleSelect1">
              <option>Sistemas Computacionales</option>
              <option>Ambiental</option>  
              <option>Electrónica</option>
              <option>Química</option>
              <option>Mecánica</option>
              <option>Bioquímica</option>
              <option>Industrial</option>
              <option>Mecáatronica</option>
              <option>Administración</option>
              <option>Gestión Empresarial</option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="start">Fecha de Nacimiento:</label>
            <input type="date" id="start" name="trip-start"
                   value="{{date("Y-m-d")}}"
                   min="1995-01-01" max="2021-06-30">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Domicilio</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aia-describedby="emailHelp" placeholder="Ingrese tu Domicilio">
            <small id="emailHelp" class="form-text text-muted">Domicilio</small>
          </div>
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Example select</label>
            <select class="form-select" id="exampleSelect1">
              <option>Ecónomica</option>
              <option>Alimentos</option>        
            </select>
          </div>
          <hr>
          <div class="form-group">
            <label for="formFile" class="form-label mt-4">Carta de Motivos</label>
            <input class="form-control" type="file" id="formFile">
            <small id="emailHelp" class="form-text text-muted">Archivo pdf</small>
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label mt-4">Identificación</label>
            <input class="form-control" type="file" id="formFile">
            <small id="emailHelp" class="form-text text-muted">Archivo pdf</small>
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label mt-4">Comprobante de Domicilio</label>
            <input class="form-control" type="file" id="formFile">
            <small id="emailHelp" class="form-text text-muted">Archivo pdf</small>
          </div>
        </fieldset>
    </form>
</body>
</html>
@endsection