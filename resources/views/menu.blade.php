@extends('master')

@section('style')
    <style>
        body {
            background-image: url("{{ asset('/images/menu_bg.jpg')}}");
            /*background-position: center;*/
            background-repeat: no-repeat;
            background-size: cover;
            /*height: 100%;*/
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold  ">MENU</h1>
                <div style="width: 100px;float: right">
                    <p>go to full pdf
                        click on the icon below
                    </p>
                    <p>
                        Our entire menu
                        is available
                        for take-away
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <div style="width: 200px;float: right">
                    <a target="_blank" href="{{url('file?name=MENU_ES')}}"><img width="80px" class="menu_logo"
                                                                                src="{{asset('images/menu2.svg')}}"/></a>
                    <h2 style="font-weight: bold ">DE MENU</h2>
                </div>
            </div>
        </div>
    </div>
@endsection