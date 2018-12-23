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
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <h1 style="text-decoration:underline;">CATERING - THE BÖL WAY</h1>
                <div style="width: 330px;float: right">
                    <p>Office Catering | Company Gatherings | Evening Events
                    </p>
                    <p>We do everything from 20 packed lunches to 500+ company events.
                        Simply email us under <a style="color: #8E1069;" href="mailto:catering@bolbarcelona.com">catering@bolbarcelona.com</a>
                        for
                        more information.</p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-3 col-sm-offset-9" style="text-align: right">
                <div style="width: 300px;float: right">
                    <a target="_blank" href="{{url('file?name=catering')}}"><img width="80px" class="menu_logo"
                                                                                 src="{{asset('images/menu2.svg')}}"/></a>
                    <h2 style="">CATERNG MENU</h2>
                </div>
            </div>
        </div>
    </div>
@endsection