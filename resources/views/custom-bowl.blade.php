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

        .nav-tabs {
            border: none;
            text-align: center;
        }

        .nav-tabs > li > a {
            color: black;
            padding-left: 50px;
            padding-right: 50px;
            border: 0px;
            border-radius: 0px;
            /*border-top: 2px solid grey;*/
        }

        .nav-tabs > li {
            float: none;
            display: inline-block;
            zoom: 1;
            border: 0px;
            border-radius: 0px;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            background-color: #8E1069;
            color: white;
            border: 0px;
            border-top: 5px solid transparent;
            border-radius: 0px;

        }

        .nav-tabs > li.active:not > a {

        }

        .tabs_div_content {
            display: inline-block;
            padding: 10px;
        }

        .custom_menu_tabs {
            display: flex;
        }

        .custom_menu_tabs li {
            /*width: 25%;*/
            flex: auto;
        }

        .custom_menu_tabs li:active a {
            border-top: 5px solid lightgray;
        }

        .custom_menu_tabs li a {
            font-weight: bold;
            /*padding: 5px 20px;*/
            font-size: 20px;
            border-top: 5px solid lightgray;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .custom_menu_tabs li a:hover {
            /*border-top: none;*/
            /*padding-top:5px;*/
            /*border-top: 5px solid lightgray;*/
            /*padding-top: 5px;*/
            /*padding-bottom: 0px;*/
            /*margin-top: 0px;*/
            /*margin-bottom: 0px;*/

        }

        .custom_menu_tabs li a span {
            font-size: 12px;

            font-weight: normal;
            display: block;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            {{--<div class="col-sm-3 top_navigation" style="text-align: left">--}}

            {{--</div>--}}
            <div class="col-sm-2" style="font-size:14px;padding:0px;float:left;background-color:  grey;">
                <div style="padding: 10px;">
                    <h4>YOUR DISH CONTAINS:</h4>
                    <ul style="list-style-type: none;">
                        <li>123</li>
                        <li>43</li>
                    </ul>
                </div>
                <div style="background-color: #8E1069;color:white;padding: 5px;">TOTAL DISH: 8,9eu</div>
            </div>

            <div class="col-sm-4 col-sm-offset-6" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold ">YOUR OWN BOWL</h1>
            </div>

        </div>
        <hr>

        <ul class="nav nav-tabs custom_menu_tabs">
            <li class="active"><a data-toggle="tab" href="#home">1. MAIN COMPONENTS<span>WAHLE 5</span></a>
            </li>
            <li class=""><a data-toggle="tab" href="#menu1">2. TUNER<span>WAHLE 4</span></a></li>
            <li class=""><a data-toggle="tab" href="#menu2">3. DRESSING<span>WAHLE 1</span></a></li>
            <li class=""><a data-toggle="tab" href="#menu3">4. TOP-UPS<span>EXTRA</span></a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>MAIN COMPONENTS</h3>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
            </div>
            <div id="menu1" class="tab-pane fade tabs_content">
                <h3>TUNER</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>

                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
            </div>
            <div id="menu2" class="tab-pane fade tabs_content">
                <h3>DRESSING</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>

                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
            </div>
            <div id="menu3" class="tab-pane fade tabs_content">
                <h3>TOP-UPS</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo.</p>

                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
                <div class="tabs_div_content"><img src="https://via.placeholder.com/225x275"/></div>
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