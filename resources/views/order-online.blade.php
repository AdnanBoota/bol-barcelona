@extends('master')

@section('title', 'Home')

@section('content')
    <div class="row" style="margin-top:25%;">
        <div class="text-center">
            <img width="200px" height="130px" src="{{asset('images/logo_bol.png')}}"/>
        </div>
        <div style="margin-top:20px;font-size: 20px;color:white;"
             class="col-sm-8 col-sm-offset-2 text-center">
            <div style="width:250px;border:1px solid black;display: inline-block;margin-right:20px">
                <div style="background-color: #8E1069; padding:10px;">Böl Barcelona, Carrer d'Enric Granados,
                    44, 08008
                </div>
                <div style="height:50px;">
                    <a href="#" style="color:black;text-decoration: none;font-size: 24px;vertical-align: middle">Order
                        for
                        Pickup</a>

                </div>
            </div>
            <div style="background-color: #8E1069;display: inline-block;"><a
                        style="color:white;text-decoration: none;padding:10px;" href="https://deliveroo.es/es/menu/barcelona/lantiga-esquerra-de-leixample/bol-barcelona
">Order for Catering</a></div>
        </div>
    </div>
@endsection