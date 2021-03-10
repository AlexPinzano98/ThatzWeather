<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Styles -->
    <link href="{{ asset('css/datos.css') }}" rel="stylesheet" type="text/css">
    <!-- Tipografia Muli Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Bootstrap 4 - CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- HEADER -->
    <div class="container" style="width: 618px;">
        <div class="abs-center row justify-content-center" >
        <img src="{{ asset('img/ThatzWeather.png') }}" alt="">
        <h2>¡Que la lluvia no te pare!</h2>
        </div>
    </div>
    <br><br><br><br><br>


    <!-- TEMPERATURAS DE LA CIUDAD -->
    <div class="temperaturas" style="text-align: center;">
        <!-- DATOS -->
        <div></div>
        <div class="row justify-content-center">
            <!-- CP Y CIUDAD -->
            <div class="col-3">
                <p style="margin-top: 30px;">Código Postal:<strong> {{$codigoPostal}} </strong> </p>
                <p>Ciuad<strong>  </strong></p>
            </div>

            <!-- BUSCADOR -->
            <div class="col-3" style="text-align: center;">
                <form method="POST" action="{{url('/filtrar')}}">
                {{csrf_field()}}
                    <i class="fas fa-search" style="margin-top: 60px;"></i><input type="number" name="codpos" placeholder="Código postal">
                    <button type='submit' class="buscador"> <p>BUSCAR</p> </button>
                </form>
            </div>
        </div>

        <!-- TEMPERATURAS -->
        <div>
            <!-- TEMPERATURA ACTUAL -->
            <div>
                <p>Ahora</p>
                <p>Font awesome</p>
                <p>{{$temps['current']['weather'][0]['main']}}</p>
                <p>{{$temps['current']['temp']}}ºC</p>
                <!-- HR EN VERTICAL -->
            </div>

            <!-- TEMPERATURA PRÓXIMAS HORAS -->
            <div style="color: white;">
                <!-- HACER UN FOR Y RECORRER LAS PRÓXIMAS 4 HORAS 0-3 -->
                <p>Próximas horas</p>

                @for ($i = 0; $i < 4; $i++)
                    <div style="background-color: black;">
                        <!-- PROIMOS 4 HORAS -->
                        <p>HORA</p>
                        <p>Font awesome</p>
                        <p>{{$temps['hourly'][$i]['temp']}}ºC </p>
                        <p>{{$temps['hourly'][$i]['weather'][0]['main']}}</p>
                    </div>
                @endfor

            </div>

            <!-- TEMPERATURA PRÓXIMOS 5 DIAS (carrussel) -->
            <div>
                <p>Próximos 5 días</p>
                @for ($i = 1; $i <= 5; $i++)
                    <div style="background-color: black;color: white;">
                        <!-- PROIMOS 4 HORAS -->
                        <p>HORA</p>
                        <p>Font awesome</p>
                        <p>{{$temps['daily'][$i]['temp']['day']}}ºC </p>
                        <p>{{$temps['daily'][$i]['weather'][0]['main']}}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- TOP 5 ZONAS MÁS FRIAS -->
    <div class="top5">
        <p>Top 5 de las zonas más frías según tus búsquedas</p>
        <div class="top">
            <h1>1.</h1>
            <p>-3º</p>
            <div class="top-city">
                <p>CP: 08901<br>
                Ciudad: Barcelona</p>
            </div>
        </div>
        <hr>
        <div class="top">
            <h1>1.</h1>
            <p>-3º</p>
            <div class="top-city">
                <p>CP: 08901<br>
                Ciudad: Barcelona</p>
            </div>
        </div>
        <hr>
        <div class="top">
            <h1>1.</h1>
            <p>-3º</p>
            <div class="top-city">
                <p>CP: 08901<br>
                Ciudad: Barcelona</p>
            </div>
        </div>
    </div>




    <!-- Bootstrap 4 - Optional JS - jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
