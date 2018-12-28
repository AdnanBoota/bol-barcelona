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
            width: 400px;
        }

        .modal-body ul {
            padding: 5px;
            font-size: 12px;
        }

        .modal-body ul li {
            text-transform: uppercase;
            padding: 2px;
            font-weight: bold;
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
            width: 225px;
            height: 250px;
            display: inline-block;
            padding: 10px;

            text-align: center;
            margin: 15px;
            cursor: pointer;
        }

        .single_prod {
            border: 2px solid lightgrey;
        }

        .single_prod_selected {
            border: 2px solid #8E1069;
        }

        .tabs_div_content img {
            margin-top: 10px;
        }

        .tabs_div_content .prod_name {
            font-size: 18px;
            display: block;
            margin-top: 10px;
            text-transform: uppercase;
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

        .cross_button {
            text-align: right;
            color: white;
            float: right;
        }

        .cross_button:hover {
            color: #8E1069;
        }

        .cart_item_selected {
            border: 1px solid black;
            background-color: #212121;
            color: white;
            padding-right: 5px;
            padding-left: 5px;
            text-transform: uppercase;
        }

        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }

        .cart_set {
            top: 0;
            /*right: 100;*/
            /*width: 100%;*/
            z-index: 9999 !important;
        }

        .cart_set + .container-fluid {
            padding-top: 100px;
        }

        .affix + .container-fluid {
            padding-top: 70px;
        }

        .cart_item_list, .summary_ul {
            list-style-type: none;
            padding: 0px;
        }

        .cart_item_list li {
            margin-top: 5px;
        }

        .top_cart_add_button {
            background-color: black;
            border: black;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div data-spy="cart_set" data-offset-top="150" class=""
                     style="font-size:14px;padding:0px;float:left;background-color:  lightgrey;margin-left:15px;">
                    <div style="padding: 10px;">
                        <h4>YOUR DISH CONTAINS:</h4>
                        <ul class="cart_item_list"></ul>
                    </div>
                    <div style="background-color: #8E1069;color:white;padding: 5px;text-align: center">TOTAL DISH:
                        <span style="font-weight: bold">8,9  €</span>
                    </div>
                    <div style="text-align: center;margin: 10px;">
                        <button class="btn btn-sm top_cart_add_button">ADD TO CART</button>
                    </div>
                </div>
            </div>


            <div class="col-sm-4 col-sm-offset-6" style="text-align: right">
                <h1 style="text-decoration:underline;font-weight: bold ">YOUR OWN BOWL</h1>
            </div>
        </div>

        <hr>

        <ul class="nav nav-tabs custom_menu_tabs" data-spy="affix" data-offset-top="150">
            @foreach($ingreds as $key => $ingred)
                <li class="{{$loop->first==1 ? 'active':''}}"><a style="text-transform: uppercase" data-toggle="tab"
                                                                 href="#{{$key}}">1. {{customIngredientCategory($key)}}
                        <span> {{$loop->first}}WAHLE 5</span></a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach($ingreds as $key=>$ingred)
                <div id="{{$key}}" class="tab-pane fade {{$loop->first==1 ? 'in active':''}} tabs_content">
                    <h3 style="text-transform: uppercase">{{customIngredientCategory($key)}}</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>

                    @foreach($ingred as $record)
                        <div class="tabs_div_content single_prod"
                             data-value="{{$record->id}}" data-category="{{$record->category}}">
                            <span style=" text-align: right;font-size:14px;color:grey;display: block">{{$record->description}}</span>
                            <img src="https://via.placeholder.com/125x125"/>
                            <span class="prod_name">{{$record->name}}</span>
                            <button style="float: right;display: block;margin-top:10px;"
                                    class="btn btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                            </button>
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
                    <h3 class="modal-title text-center" style="text-decoration: underline">REMARK</h3>
                    <p style="margin-top:10px;font-size: 14px;" class="text-center">You have the following items:</p>
                </div>
                <div class="modal-body">
                    <ul class="summary_ul">
                        <li>2. MAIN COMPONENTS: 5/5</li>
                        <li>TUNER: 4/4</li>
                        <li> 4. DRESSING: 1/1</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">ADD TO CART</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>

        $('.top_cart_add_button').click(function () {

            var category, count_obj = {};
            $('.cart_item_list li[data-category]').each(function (i, el) {
                category = $(el).data('category');
                if (count_obj.hasOwnProperty(category)) {
                    count_obj[category] += 1;
                } else {
                    count_obj[category] = 1;
                }
            });

            $('.summary_ul').html('');

            for (var key in count_obj) {
                $('.summary_ul').append('<li>' + key + ' : ' + count_obj[key] + '</li>');
            }

            $('#myModal').modal('show');
        });

        $(document).on('click', '.cross_button', function (event) {
            var closest_div = $(".tabs_content").find('.tabs_div_content[data-value="' + $(this).parent().data('value') + '"]');
            closest_div.toggleClass('single_prod single_prod_selected');
            closest_div.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
            $(this).parent().remove();
        });

        $(".tabs_div_content").click(function () {
            $(this).find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
            $(this).toggleClass('single_prod single_prod_selected');
            // console.log($(this).find('.glyphicon').hasClass('glyphicon-minus'));
            if ($(this).find('.glyphicon').hasClass('glyphicon-minus') == true) {
                var li_html = '<li data-category="' + $(this).data('category') + '" data-value="' + $(this).data('value') + '" class="cart_item_selected">' + $(this).find('.prod_name').text() + ' <a href="#" class="cross_button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>';
                $('.cart_item_list').append(li_html);
            } else {
                console.log('removing item');
                $('.cart_item_list').find("li[data-value='" + $(this).data('value') + "']").remove();
            }
        });

    </script>
@endsection