@extends('master')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        {{--body {--}}
            {{--background-image: url("{{ asset('/images/order-online.jpg')}}");--}}
            {{--/*background-position: center;*/--}}
            {{--background-repeat: no-repeat;--}}
            {{--background-size: cover;--}}
            {{--/*height: 100%;*/--}}
        {{--}--}}

        .address_buttons a {
            color: #8E1069;
        }

        .card_product {
            margin: 10px;
            width: 320px;
            /*border: 1px solid black;*/
            /*width: 25%;*/
        }

        .card_product a {
            font-size: 20px;
            color: #8E1069;
            text-decoration: none;
        }

        .card_product span {
            float: right;
            font-size: 18px;
            font-style: italic;
            line-height: 35px;
            /*display: inline-block;*/

        }

        .top_navigation div {
            display: inline-block;
            margin-right: 8px;
            font-size: 14px;
            text-align: center;
            border-bottom: 3px solid #8E1069;
        }

        .top_navigation div:active, .top_navigation div a:active {

        }

        .top_navigation div a {
            text-decoration: none;
            color: black;
            text-align: center;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #9c9c9c;
            margin: 5px 0;
            padding: 0;
        }

        .line_breaker {
            width: 100%;
            height: 20px;
            border-bottom: 1px solid #9c9c9c;
            text-align: center;
            margin: 20px 0px 50px 0px;
        }

        .line_breaker span {
            letter-spacing: 2px;
            font-size: 16px;
            background-color: white;
            padding: 0 10px;
        }

        .line_breaker p {
            font-size: 12px;
            color: #8E1069;
            /*font-style: italic;*/
        }

        .btn {
            border: 1px solid #8E1069;
            border-radius: 0px;
            background-color: #8E1069;
            color: white;
        }

        .btn:hover {
            background-color: white;
            color: #8E1069;
        }

        .modal-content {
            border-radius: 0px;
        }

        .modal-dialog {
            width: 800px;
        }

        .modal-body ul {
            padding: 5px;
            font-size: 16px;
        }

        .modal-body ul li {
            text-transform: uppercase;
            list-style-type: none;
            border-bottom: 1px solid #cbcbcb;
            padding: 10px;
        }

        .modal-body ul li .item_price {
            float: right;
        }

        .modal-body ul li .item_text {
            /*float: left;*/
            padding-left: 20px;
        }

        .modal-body ul li a {
            border-radius: 15px;
        }

        .modal-body ul li a span {
            font-size: 10px;
        }

        .ingred_selected {
            background-color: rgba(145, 18, 108, 0.18);
        }

        .top_ingred_icons ul {
            list-style-type: none;
        }

        .top_ingred_icons ul li {
            display: inline-block;
            font-size: 12px;
        }

        .top_ingred_icons ul li span {
            display: none;
        }

        .top_ingred_icons ul li a {
            text-decoration: none;
            color: #8E1069;
            cursor: pointer;
        }

        .tooltip-arrow,
        .red-tooltip + .tooltip > .tooltip-inner {
            background-color: #8E1069;
        }

        .basket__countnumber {
            background: #8e1069;
            display: inline-block;
            position: absolute;
            width: 1.6rem;
            height: 1.6rem;
            border-radius: 1.25rem;
            text-align: center;
            left: 11.3rem;
            top: 1.3rem;
            font-size: 1.1rem;
        }

        .bucket_cart_parent {
            width: 300px;
            float: right;
            padding: 0px;
            margin-right: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 16px;
            height: 50px;
            background-color: black;
            color: white;
            /*padding:5px;*/
        }

        .bucket_cart {
            width: 300px;
            text-align: center;
            background-color: rgb(224, 224, 224);
            min-height: 100px;
            margin-top: 12px;
            padding-bottom: 10px;
        }

        .bucket_cart ul {
            padding: 10px;
            list-style-type: none;
            text-align: left;
            /*display: block*/
        }

        .bucket_cart ul li {
            display: block;
            color: black;

            font-size: 18px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 top_navigation" style="text-align: left">
                @foreach($bowls as $key => $bowl_group)
                    <div><a href="#{{$key}}"><img src="https://via.placeholder.com/35x28"/><br>{{$key}}</a></div>
                    {{--<div><a href="#signature-bols"><img src="https://via.placeholder.com/35x28"/><br>SALADS</a></div>--}}
                    {{--<div><a href="#"><img src="https://via.placeholder.com/35x28"/><br>WRAP</a></div>--}}
                    {{--<div><a href="#"><img src="https://via.placeholder.com/35x28"/><br>OTHER</a></div>--}}
                @endforeach
            </div>

            <div class="col-sm-3 col-sm-offset-6" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold ">PICKUP</h1>
                <div style="width: 330px;float: right">
                    <p>Preorder, pick up and enjoy at home or on the road.
                    </p>

                </div>
            </div>
        </div>
        <hr>
        <div class="clearfix row top_ingred_icons">
            <div class="col-sm-8">
                <ul>
                    <li><img width="10px" src="{{asset('images/nav-1.svg')}}"/> <span>VEGAN</span></li>
                    <li><img width="10px" src="{{asset('images/nav-2.svg')}}"/> <span>GLUTEN FREE</span></li>
                    <li><img width="10px" src="{{asset('images/nav-3.svg')}}"/> <span>LACTOSE FREEVERSIONS OF ALL DISHES ARE
                    AVAILABLE UPON REQUEST</span>
                    </li>
                    <li><a class="toggle_nav_icons">+ INFO</a></li>
                </ul>
            </div>
            <div class="bucket_cart_parent">
                <div style="padding-left: 10px;padding-right: 10px;">
                    <a class="bucket_cart_link_toggle" style="cursor: pointer;text-decoration: none;color:white;">
                        <i class="fa fa-angle-double-right" style="font-size:32px"></i>
                    </a>
                    <span style="float:right;position: relative"><span class="my_order_text">MY ORDER</span> <img
                                width="35px" style="margin-left:10px;margin-right:10px;"
                                src="{{asset('images/basket.svg')}}"/>
                    <span class="basket__countnumber"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">1</font></font></span>
                <span style="padding-top:5px;float: right; padding-right:5px;">5,85 €</span></span>
                </div>
                <div class="bucket_cart">
                    <ul>
                        <li>item-1</li>
                        <li>item-2</li>
                    </ul>
                    <hr style="margin:10px;">
                    <a class="btn btn-primary">CHECK OUT</a>
                </div>
            </div>
            {{--<div class="clearfix"></div>--}}


        </div>

        <hr>

        <div class="container">
            @foreach($bowls as $key => $bowl_group)
                <div class="row" id="{{$key}}">
                    <div class="line_breaker">
                        <span>{{typesList($key)}}</span>
                        <p>MANY DISHES CAN BE MADE VEGAN, GLUTEN-FREE AND LACTOSE FREE</p>
                    </div>
                    @foreach($bowl_group as $bowl)
                        <div class="col-sm-offset-1 col-sm-3 card_product"
                             data-val="{{json_encode($bowl->ingredients)}}" data-price="{{$bowl->price}}">
                            <img class="popup_open"
                                 src="https://via.placeholder.com/300x225"/>
                            <h3>{{$bowl->name}}</h3>
                            <p>{{$bowl->description}}</p>
                            <a href="#">+ ADD TO CART</a>
                            <span class="item_price">€ {{$bowl->price}}</span>
                        </div>
                    @endforeach

                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="font-size: 36px;" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center" style="text-decoration: underline">TOP UP YOUR DISH</h3>
                    <p style="margin-top:10px;font-size: 14px;" class="text-center">Choose as many top ups as you
                        want!</p>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>2</li>
                        <li>4</li>
                    </ul>
                    <p>SPECIAL INSTRUCTIONS</p>
                    <textarea
                            placeholder="Enter your special instructions here. All dishes can be made vegan, gluten-free and lactose free"
                            style="border-radius: 0px;border: 1px solid #8E1069" required class="form-control"
                            rows="5" id="comment"></textarea>
                </div>
                <div class="modal-footer">
                    <div style="float: left;font-size: 18px;">
                        <b>TOTAL DISH: </b><span class="modal_price">12,45</span>
                    </div>
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    <button type="submit" class="btn btn-dark">ADD TO CART</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        var bowl_price, current_total;
        var assets_url = '{!! asset('images/') !!}';

        $('[data-toggle="tooltip"]').tooltip();

        $(".popup_open").click(function () {
//            alert('coming here');
            console.log($(this).parent().data('val'));
            var items = $(this).parent().data('val');
            bowl_price = $(this).parent().data('price');
            current_total = 0;
            var items_html = '';
            $.each(items, function (key, value) {
                items_html += '<li class="single_item_ingred" data-val="' + value.price + '"><a class="btn btn-sm btn-primary add_remove"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> <span class="item_text">' + value.name + '</span> <span class="item_price">' + value.price + '€ ' + ingredImages(value.specs) + '</span></li>';
//                alert(key + ": " + value);
            });
            $('.modal-body').find('ul').html(items_html);
            $('.modal_price').html($(this).parent().find('.item_price').html());
            $('#myModal').modal('show');
        });

        $(document).on('click', '.single_item_ingred', function (event) {
//            alert('coming here');
            var current_item_price = $(this).data('val');
            $(this).toggleClass('ingred_selected'); //added class

            if ($(this).hasClass('ingred_selected')) {
                $(this).find('.add_remove').html('<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>');
                if (current_total == 0) {
                    current_total = parseFloat(current_item_price) + parseFloat(bowl_price);
                } else {
                    current_total = parseFloat(current_item_price) + parseFloat(current_total);
                }
                $('.modal_price').html('€ ' + current_total.toFixed(2));
            } else {
                $(this).find('.add_remove').html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>');
//                sub_total = current_total - current_item_price;
                current_total = current_total - current_item_price;
                $('.modal_price').html('€ ' + current_total.toFixed(2));
            }

        });

        $(".toggle_nav_icons").click(function () {
//            alert('hola');
            $(this).parent().parent().find('span').toggle(200);
        });

        $(".bucket_cart_link_toggle").click(function () {
            $(".bucket_cart").toggle(300);
//            $(".bucket_cart,.my_order_text").toggle(300);
//            $(".bucket_cart_parent").css('width', '200px');
        });

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 800);
        });


        function ingredImages(names) {
            var html = '';
            $.each(JSON.parse(names), function (key, value) {
                html += '<a class="link_tooltip" data-toggle="tooltip" title="' + value + '"> <img width="10px" src="' + assets_url + '/nav-' + (key + 1) + '.svg"/></a>';
            });
            return html;
        }

    </script>
@endsection