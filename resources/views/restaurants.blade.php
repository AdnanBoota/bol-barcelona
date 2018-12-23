@extends('master')
@section('style')
    <style>
        body {
            background-image: url("{{ asset('/images/rest.png')}}");
            /*background-position: center;*/
            background-repeat: no-repeat;
            background-size: cover;
            /*height: 100%;*/
        }

        ul {
            list-style-type: none;
        }

        ul li {
            font-size: 12px;
            text-decoration: none;
        }

        span {
            font-size: 14px;
            display: block;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold  ">LOCATIONS</h1>
                <div style="width: 250px;float: left;text-align: right">
                    <h3>BARCELONA</h3>
                    <span>Böl Barcelona <b>Carrer d'Enric Granados</b>, 44, 08008</span>
                    <br><span><b>Horario</b></span>
                    <ul>
                        <li>Lu - Vi : 9:00 - 16:00</li>
                        <li>Sa - Do : 10:00 - 16:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{--<img style="float: right" height="800px" width="400px" src="{{asset('images/restaurants.png')}}">--}}
    {{--<div>restaurants</div>--}}
@endsection