<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOME</title>
    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <!-- Tipografia Muli Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <!-- Bootstrap 4 - CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>




    <div class="container" style="width: 618px;">
        <div class="abs-center row justify-content-center" >
            <img src="{{ asset('img/ThatzWeather.png') }}" alt="">

            <h2>Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</h2>

            <form method="POST" action="{{url('/filtrar')}}">
                {{csrf_field()}} <!-- Para protegernos de ataques CSRF
                Cross-site request forgery o falsificación de petición en sitios cruzados -->
                <input type="number" name="codpos" placeholder="Introduce el código postal"><br>

                <button type='submit' class="buscador"> <p>BUSCAR</p> </button>
            </form>

            <h2>¡Que la lluvia no te pare!</h2>
        </div>
    </div>





    <!-- Bootstrap 4 - Optional JS - jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
