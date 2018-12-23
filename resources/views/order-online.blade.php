@extends('master')
@section('style')
    <style>
        body {
            background-image: url("{{ asset('/images/order-online.jpg')}}");
            /*background-position: center;*/
            background-repeat: no-repeat;
            background-size: cover;
            /*height: 100%;*/
        }

        .delivero_link {
            color: #8E1069;
            text-decoration: underline;

        }

        .delivero_link:hover {
            color: #8E1069;
            background-color: #ebebeb;
        }

        .address_buttons a {
            color: #8E1069;
        }

        .address_buttons:hover, .address_buttons:hover a, .address_buttons a:hover {
            background-color: #8E1069;
            color: white;

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold ">PICKUP</h1>
                <div style="width: 330px;float: right">
                    <p>Preorder, pick up and enjoy at home or on the road.
                    </p>
                    <div>
                        <div style="width:120px;border:2px solid #8E1069;display: inline-block;margin-top:20px;text-align: center">
                            <div class="address_buttons" style="height:65px;">
                                <a style="font-weight:bold;display:block;letter-spacing: 3px;font-size: 22px;text-decoration: none;"
                                   href="{{url('order-online-pickup')}}">CHOOSE
                                    MENU</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <div style="width: 330px;float: right">
                    <h1 style="text-decoration:underline;font-weight: bold ">DELIVERY</h1>
                    <p>Stay home, our partner will deliver your food.</p>
                    <a class="delivero_link" style="font-size: 14px;display: block;"
                       target="_blank"
                       href="https://deliveroo.es/es/menu/barcelona/lantiga-esquerra-de-leixample/bol-barcelona">
                        Deliveroo - Barcelona - Carrer d'Enric Granados, 44
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection