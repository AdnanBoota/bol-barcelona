<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bol Barcelona - {{ucfirst(str_replace('-', ' ', $title))}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        font-family: 'Roboto';
        font-size: 24px;
    }

    p {
        font-size: 14px;
    }

    footer a, footer a:link, footer a:hover, footer a:visited, footer a:active {
        color: white;
        text-decoration: none;
        margin-left: 1%;
        font-size: 15px;
    }
</style>

@yield('style')
<body>

<img width="100%" height="100%" src="{{asset('images/background.jpg')}}"/>
{{-- <div style="margin-bottom:100px;"></div> --}}

<footer class=" footer"
        style="bottom: 0px;position:fixed;background-color: #8E1069;width:100%;color:white;height:40px;">
    <div class="container">
    <div style="text-align:right">
        <a target="_blank" href="https://www.facebook.com/bolbarcelona/"><i style="font-size:20px" class="fa fa-facebook"></i></a>
        <a target="_blank" href="https://www.google.com/maps/place/B%C3%B6l/@41.3911103,2.1581842,15z/data=!4m2!3m1!1s0x0:0x1a8924658979c82f?sa=X&ved=2ahUKEwj85Ke766rhAhUM8uAKHQJOCbUQ_BIwCnoECAoQCA">
            <i style="font-size:20px" class="fa fa-google"></i></a>
        <a target="_blank" href="https://foursquare.com/v/bol/5ac4914697cf5a20fca091a8"><i style="font-size:20px" class="fa fa-foursquare"></i></a>
        <a target="_blank" href="https://www.tripadvisor.co.za/LocationPhotoDirectLink-g187497-d14079130-i318795334-Bol-Barcelona_Catalonia.html"><i style="font-size:20px" class="fa fa-tripadvisor"></i></a>
        <a target="_blank" href="https://www.instagram.com/bolbarcelona/"><i style="font-size:20px" class="fa fa-instagram"></i></a>
    </div>
    </div>
</footer>

@yield('script')
</body>
</html>
