<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bol Barcelona - {{ucfirst(str_replace('-', ' ', $title))}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    footer a, footer a:link, footer a:hover, footer a:visited, footer a:active {
        color: white;
        text-decoration: none;
        margin-left: 2%;
        font-size: 15px;
    }
</style>
<body>

<div class="container">
    @if($title!='home')
        <div class="text-center" style="margin-top:20px"><img width="75px" src="{{asset('images/logo_small.png')}}"/></div>
    @endif
    @yield('content')
</div>

<footer class=" footer"
        style="bottom: 0px;position:absolute;background-color: #8E1069;width:100%;color:white;height:40px;">
    <div class="container text-center" style="margin-top: 9px;">
        <a href="{{url('/home')}}">HOME</a>
        <a href="{{url('/menu')}}">MENU</a>
        <a href="{{url('/restaurants')}}">RESTAURANTS</a>
        <a href="{{url('/gallery')}}">GALLERY</a>
        <a href="{{url('/order-online')}}">ORDER ONLINE</a>
        <a href="{{url('/catering')}}">CATERING</a>
        <a href="{{url('/manifesto')}}">MANIFESTO</a>
        <a href="{{url('/contact')}}">CONTACT</a>
        <a href="{{url('/privacy')}}">PRIVACY</a>
    </div>


</footer>
</body>
</html>
