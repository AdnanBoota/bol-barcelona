@extends('master')
@section('style')
    <style>
        a {
            color: black;
        }

        .address_buttons:hover, .address_buttons:hover a, .address_buttons a:hover {
            background-color: #8E1069;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top:25%;">
            <div class="text-center">
                <img width="200px" height="130px" src="{{asset('images/logo_bol.png')}}"/>
            </div>
            <div style="margin-top:20px;font-size: 20px;color:white;"
                 class="col-sm-8 col-sm-offset-2 text-center">
                <div class="col-sm-5 col-sm-offset-1">
                    <div style="width:220px;border:2px solid #8E1069;display: inline-block;">
                        <div style="font-size:14px;background-color: #8E1069; padding:10px;">Böl Barcelona, Carrer
                            d'Enric
                            Granados,
                            44, 08008
                        </div>
                        <div class="address_buttons" style="height:70px;">
                            <a href="#"
                               style="letter-spacing: 3px;text-decoration: none;font-size: 25px;">ORDER FOR
                                PICKUP</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div style="width:220px;border:2px solid #8E1069;display: inline-block;margin-top:60px;">
                        <div class="address_buttons" style="height:70px;padding:0px">
                            <a style="letter-spacing: 3px;font-size: 25px;text-decoration: none;" href="https://deliveroo.es/es/menu/barcelona/lantiga-esquerra-de-leixample/bol-barcelona
">ORDER FOR CATERING</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection