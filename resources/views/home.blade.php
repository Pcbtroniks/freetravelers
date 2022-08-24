@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Añadir un nuevo evento</h1>

    @include('layout._partials.alert-success')
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title h1">Formulario de registro de evento</div>

        <br>
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Start Date  --}}
        <div class="form-group">

            <label for="start_date">Fecha de Inicio</label>

            <div class="input-group has-validation">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-solid fa-calendar"></i></span>
                </div>
                <input name="start_date" value="00-00-0000" id="start_date" data-date-format="dd-mm-yyyy" data-date="22-08-2022" type="text" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una fecha valida.
                </div>
            </div>

        </div>

        {{-- end Date  --}}
        <div class="form-group">

            <label for="end_date">Fecha de Finalización</label>

            <div class="input-group has-validation">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-solid fa-calendar"></i></span>
                </div>
                <input name="end_date" value="00-00-0000" id="end_date" data-date-format="dd-mm-yyyy" data-date="22-08-2022" type="text" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una fecha valida.
                </div>
            </div>

        </div>


        {{-- Title --}}
        <div class="form-group">
            <label for="title">Titulo del evento</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="eventName">
        </div>

        {{-- Description --}}
        <div class="form-group">
            <label for="title">Descripción</label>
            <input type="text" name="description" class="form-control" id="description" aria-describedby="description">
        </div>

        {{-- Location --}}
        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" name="location" class="form-control" id="localtion" aria-describedby="location">
        </div>

        {{-- File --}}
        <div class="input-group is-invalid">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="cover" name="cover" id="cover" required>
              <label class="custom-file-label" for="cover">Seleccionar la portada del evento...</label>
            </div>
            <div class="input-group-append">
               {{-- <button class="btn btn-outline-secondary" type="button">Button</button> --}}
            </div>
        </div>

        {{-- submit --}}
        <div class="input-group is-invalid my-3">

            <button class="btn btn-outline-secondary" type="submit">Agregar</button>
        
        </div>
        
    </form>
        
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="./vendor/datepicker/datepicker.css">
@stop

@section('js')

    <script src="./vendor/datepicker/datepicker.js"></script>
    <script>
        $('#start_date').datepicker()
        .on('changeDate', function(e) {
            $('#end_date').val(e.date)
        });
        $('#end_date').datepicker()
        .on('changeDate', function(e) {

        });
    </script>

    <script> console.log('Hi!'); </script>
@stop