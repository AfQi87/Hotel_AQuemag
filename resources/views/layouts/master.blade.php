<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Carga de archivos css -->
        <link href="{{ url('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ url('/css/style.css')}}" rel="stylesheet" type="text/css">

        <title>Primer Proyecto Laravel Hotel</title>

    </head>
    <body background="img1.jpg">
       

        <!-- Barra de Navegacion  -->

        @include('layouts.navegation')

        <div class="container">
            @yield('content')
        </div>

        <!--Carga de archivos javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{url('/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
