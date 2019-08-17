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

.red-tooltip + .tooltip > .tooltip-inner {
background-color: #8E1069;
}

ul {
padding: 10px;
list-style-type: none;
text-align: left;
/*display: block*/
}

ul li {
display: block;
color: black;

font-size: 18px;
}

.voucher_div input, .voucher_div span button {
height: 40px;
border-radius: 0px;
border: 1px solid #8E1069;
}

.voucher_div input:focus {
border-color: rgba(142, 16, 105, 0.53);
box-shadow: 0 1px 1px rgba(142, 16, 105, 0.075) inset, 0 0 4px rgba(142, 16, 105, 0.6);
outline: 0 none;
}

.voucher_div .input-group-addon {
background-color: transparent;
border: none;
font-size: 14px;
font-weight: bold;
}

.summary_total {
font-size: 16px;
font-weight: bold;
background: black;
padding: 12px;
color: white;
margin-top: 10px;
}

.content_blocks {
margin-top: 15px;
padding: 0px;
font-size: 16px;
}

.content_blocks div {
padding: 10px;
}

.content_blocks div .blocks_main_content {
border: 1px solid #8E1069;
height: 420px;
}

.minutes_block {
display: inline-block;
}

.minutes_selector {
border-radius: 18px;
display: block;
}

.contact_form_elements .form-group {
padding-top: 0px;
padding-bottom: 0px;
margin-bottom: 8px;
}

.contact_form_elements .form-group input {
border-radius: 0px;
}

.contact_form_elements .form-group span {
font-size: 13px;
}

.contact_form_elements .form-group input:focus {
border-color: rgba(142, 16, 105, 0.53);
box-shadow: 0 1px 1px rgba(142, 16, 105, 0.075) inset, 0 0 4px rgba(142, 16, 105, 0.6);
outline: 0 none;
}

.footer_text li {
font-size: 12px;
}

.footer_text input {
border-radius: 0px;
border: 1px solid black;
}
.voucher_success{
position: relative;
float: right;
width: 654px;
z-index: 3;
height: 41px;
padding: 9px;
font-size: 18px;
color: white;
background: #8E1069;
top: 5px;
}
.minutes_selected{
background:pink;
}
.pickup_time{
margin-left:20px;
border-radius:50%;
}
.pickup_time.active{
color: #111;
background-color: #ffffff;
border-color: #b6b6b6;
}
.pickup_time.active:hover{
color: #111;
background-color: #ffffff;
border-color: #b6b6b6;
}
.pickup_time:hover,.pickup_time.focus{
color: #111;
background-color: #ffffff;
border-color: #b6b6b6;
}
.pickup_min{
margin-left: 13px;
margin-right: 15px;
}

</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 top_navigation" style="text-align: left">
            <div><img src="https://via.placeholder.com/35x28" /></div>
        </div>

        <div class="col-sm-3 col-sm-offset-6" style="text-align: right">
            <h1 style="text-decoration:underline;font-weight: bold ">CHECKOUT</h1>

        </div>
    </div>
    <hr>
    <div class="clearfix row">
        <ul>
            @foreach($cart_items as $item)
            <li>{{$item->name}} <span style="float: right">€ {{$item->price}}</span></li>
            @endforeach
        </ul>
    </div>
    <hr>


    <div class="col-sm-7 col-sm-offset-5 voucher_div" style="padding: 0px;">
        <form action="/voucher_validation" method="post">
            {{ csrf_field() }}
            <div class="input-group">
                <span class="input-group-addon">Voucher Code:</span>
                <input type="text" name="voucher_code" class="form-control voucher_input" placeholder="Enter your code here for validation">
                <span class="input-group-btn">
                    <button class="btn btn-default" name="submit_voucher" type="submit">SUBMIT</button>
                </span>
            </div>
        </form>
    </div>
    @if(session()->has('success'))
    @section('script')
    <script>
        var total_final = $('.total_cart_price').text();
        var voucher_final = $('.voucher_minus').text();
        $('.total_cart_price').text('Your Final Payment: ' + total_final);
        $('.voucher_success').append('Coupen of ' + voucher_final + '€  has been applied Successfully!');
        toastr.success('Voucher verified Successfully!');
    </script>
    @endsection
    <div class="col-sm-7 col-sm-offset-5 voucher_success" role="alert">
        <span class="voucher_minus hidden">{{ session()->get('success') }}</span>
    </div>
    @endif
    @if(session()->has('error'))
    @section('script')
    <script>
        toastr.error('Invalid Coupen or Coupen has been Expired!');
        $('.voucher_input').focus();
    </script>
    @endsection
    @endif

    <!-- <div class="clearfix"></div> -->

    <div class="col-sm-12 summary_total">
        <div class="col-sm-4">TOTAL:</div>
        <div class="col-sm-4" style="text-align: center">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}} ARTICLE</div>
        <div class="col-sm-4 total_cart_price" value={{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} style="text-align: right">€ {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</div>
    </div>
    <div class="clearfix"></div>
    <form action="/redsys_payment" method="post">
        <div class="col-sm-12 content_blocks">
            <div style="padding-left: 0px; text-align: center; overflow:hidden;" class="col-sm-4">
                <div class="blocks_main_content" style="padding-top:20px">
                    <span style="text-decoration: underline">PICK-UP ADDRESS</span><br><br><br>
                    <span><b>STORE:</b> Bol Barcelona</span><br><br>
                    <span style="text-decoration: underline">PICK-UP TIME</span><br>
                    <span style="font-size: 12px">Get your final pick-up time after payment succeeded</span><br>

                    <div class="minutes_block">
                        <div data-toggle="buttons" style="margin-right:15px;margin-bottom: 0px;padding-bottom: 0px;;">
                            <label class="btn pickup_time">
                                <input type="radio" name="pick_time" class="btn minutes_selector" value="5" class="sr-only" required>05
                            </label>
                            <label class="btn  pickup_time">
                                <input type="radio" name="pick_time" class="btn minutes_selector" value="10" class="sr-only" required>10
                            </label>
                            <label class="btn  pickup_time">
                                <input type="radio" name="pick_time" class="btn minutes_selector" value="15" class="sr-only" required>15
                            </label>
                            <label class="btn  pickup_time">
                                <input type="radio" name="pick_time" class="btn minutes_selector" value="30" class="sr-only" required>30
                            </label>
                        </div>
                        <div data-toggle="buttons" style="margin-left:9px;margin-top: 0px;padding-top: 0px;">
                            <span class="pickup_min">MIN.</span>
                            <span class="pickup_min">MIN.</span>
                            <span class="pickup_min">MIN.</span>
                            <span class="pickup_min">MIN.</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="input-group bootstrap-timepicker timepicker">
                    <input data-provide="timepicker" id="timepicker1" type="text" class="form-control input-small">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                </div> -->
            </div>

            <div class="col-sm-4 ">
                <div class="blocks_main_content" style=" text-align: center;padding-top:20px">
                    <span style="text-decoration: underline">CONTACT-DETAILS</span><br><br><br>
                    <div class="row contact_form_elements">
                        <div class="form-group" style="text-align: left">
                            <span>FIRST NAME</span>
                            <input required type="text" name="first_name" class="form-control" id="first_name">
                        </div>
                        <div class="form-group" style="text-align: left">
                            <span>LAST NAME</span>
                            <input required type="text" class="form-control" id="last_name">
                        </div>
                        <div class="form-group" style="text-align: left">
                            <span>TELEPHONE</span>
                            <input required type="tel" pattern="\d{3}\d{3}\d{3}$" placeholder="123456789" name="phone" class="form-control" id="telephone">
                        </div>
                        <div class="form-group" style="text-align: left">
                            <span>E-MAIL</span>
                            <input required name="e_mail" type="email" class="form-control" id="email">
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-right: 0px;" class="col-sm-4">
                <div class="blocks_main_content" style="padding-top:20px;text-align: center">
                    <span style="text-decoration: underline">PAYMENT</span><br><br><br>
                    <hr>
                    <div style="text-align: left">WIREDCARD</div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="padding-left: 0px;padding-right: 0px;">
            <ul class="footer_text">
                <li><input type="checkbox"> I accept the terms and
                    conditions and privacy policy
                </li>
                <li><input type="checkbox"> I would like to receive the newsletter and be informed about news.</li>
            </ul>
            {{ csrf_field() }}
            <input type="hidden" class="form-control" id="amount" name="amount" value={{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}>
            <input type="submit" style="float: right; width:120px" class="btn btm-sm btn-primary btn-block" value="BUY NOW" name="submitPayment">
    </form>
    <!-- <button class="btn btm-sm" style="float: right">BUY NOW</button> -->
</div>

</div>

@endsection
@section('script')
<script>
    var bowl_price, current_total;
    var assets_url = '{!! asset('images / ') !!}';

    $('[data-toggle="tooltip"]').tooltip();

    $(".popup_open").click(function() {
        //            alert('coming here');
        console.log($(this).parent().data('val'));
        var items = $(this).parent().data('val');
        bowl_price = $(this).parent().data('price');
        current_total = 0;
        var items_html = '';
        $.each(items, function(key, value) {
            items_html += '<li class="single_item_ingred" data-val="' + value.price + '"><a class="btn btn-sm btn-primary add_remove"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> <span class="item_text">' + value.name + '</span> <span class="item_price">' + value.price + '€ ' + ingredImages(value.specs) + '</span></li>';
            //                alert(key + ": " + value);
        });
        $('.modal-body').find('ul').html(items_html);
        $('.modal_price').html($(this).parent().find('.item_price').html());
        $('#myModal').modal('show');
    });
    $(".minutes_selector").on('click', function(event) {
        event.stopPropagation();
        event.stopImmediatePropagation();
        $('.button').not(this).removeClass('buttonactive'); // remove buttonactive from the others
        $(this).toggleClass('buttonactive'); // toggle current clicked element
        console.log('i am clicked');
    });
    $(document).on('click', '.single_item_ingred', function(event) {
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

    $(".toggle_nav_icons").click(function() {
        //            alert('hola');
        $(this).parent().parent().find('span').toggle(200);
    });

    $(".bucket_cart_link_toggle").click(function() {
        $(".bucket_cart").toggle(300);
        //            $(".bucket_cart,.my_order_text").toggle(300);
        //            $(".bucket_cart_parent").css('width', '200px');
    });

    $(document).on('click', 'a[href^="#"]', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });


    function ingredImages(names) {
        var html = '';
        $.each(JSON.parse(names), function(key, value) {
            html += '<a class="link_tooltip" data-toggle="tooltip" title="' + value + '"> <img width="10px" src="' + assets_url + '/nav-' + (key + 1) + '.svg"/></a>';
        });
        return html;
    }
</script>
@endsection