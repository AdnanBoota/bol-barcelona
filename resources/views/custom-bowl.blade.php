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
height: auto;
display: inline-block;
padding: 10px 0px 0px 0px;
border: 2px solid lightgrey;
text-align: center;
margin: 15px;
cursor: pointer;
}
.tabs_div_content:hover{
border:2px solid #8E1069;
}
.single_prod_btns {
height: 52px;
position: relative;
padding: 3px 10px 5px 10px;
overflow: hidden;
margin: 1px;
}
.single_prod_btns>*{
border-radius: 20px;
}
.single_prod_btns :focus ,.single_prod_btns :active{
outline:none !important;
}
.single_prod_btns_selected{
background: #f3e5f8;
z-index: 2;
}
.single_prod_price{
background: #090909;
top: 13px;
position: absolute;
right: 10px;
color: white;
font-size: 15px;
z-index: -1;
width: 64px;
padding: 4px 2px 5px 23px;
}
.single_prod_selected {
border: 2px solid #8E1069;
z-index: 1;
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
.items_check{
margin-left:20px;
}
.alert.warning {
background-color: #bc9ab2;
position: absolute;
right: 0px;
color: white;}
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" style="text-align: center">
            <h1 style="text-decoration:underline;font-weight: bold ">YOUR OWN BOWL</h1>
        </div>
    </div>

    <hr>

    <ul class="nav nav-tabs custom_menu_tabs" data-spy="affix" data-offset-top="150">
        @php($counter=0)
        @foreach($ingreds as $key => $ingred)
        @php($counter=$counter+1)
        <li class="{{$loop->first==1 ? 'active':''}}"><a style="text-transform: uppercase" data-toggle="tab" href="#{{$key}}">{{$counter}} {{customIngredientCategory($key)}}
            </a>
            <!-- <span> {{$loop->first}}WAHLE 5</span> -->
        </li>
        @endforeach
    </ul>

    <div class="tab-content">

        @foreach($ingreds as $key=>$ingred)
        <div id="{{$key}}" class="col-sm-9 tab-pane fade {{$loop->first==1 ? 'in active':''}} tabs_content">
            <h3 style="text-transform: uppercase">{{customIngredientCategory($key)}}</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>

            @foreach($ingred as $record)
            <div data-value="{{$record->id}}" class="tabs_div_content">
                <div class="single_prod_add" data-qty-price="{{$record->price}}" data-free-qty="{{$record->qty_free}}" prod_count="0" data-value="{{$record->id}}" data-category="{{$record->category}}">
                    <span style=" text-align: right;font-size:14px;color:grey;display: block">{{$record->description}}</span>
                    <img style="width:125px;height:115px;" src="{{URL::asset('/images/ingredients/'.$record->images.'.jpg')}}" alt="https://via.placeholder.com/125x125" />
                    <span class="prod_name" data-value="{{$record->id}}">{{$record->name}}</span>
                </div>
                <div data-value="{{$record->id}}" class="single_prod_btns">
                    @if($record->qty_free == 0)
                    <button style="float: right;display: block;margin-top:10px;margin-right:39px" data-qty-price="{{$record->price}}" data-free-qty="{{$record->qty_free}}" prod_count="0" data-value="{{$record->id}}" class="single_prod_add add_item btn btn-sm">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button><span data-value="{{$record->id}}" class="single_prod_price"> {{$record->price}}</span>

                    @else
                    <button style="float: right;display: block;margin-top:10px;" data-qty-price="{{$record->price}}" data-free-qty="{{$record->qty_free}}" prod_count="0" data-value="{{$record->id}}" class="single_prod_add add_item btn btn-sm">

                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button><span data-value="{{$record->id}}" class="single_prod_price hidden"> {{$record->price}}</span>
                    @endif
                    <button style="float: left;display: block;margin-top:10px;" data-value="{{$record->id}}" class=" btn btn-sm minus_item hidden"><span class="glyphicon glyphicon-minus" aria-hidden="false"></span>
                    </button>

                </div>

            </div>

            @endforeach

        </div>
        @endforeach
        <div class="col-sm-3" style="position: fixed;right: 0px;">

            <div data-spy="cart_set" data-offset-top="150" class="" style="font-size:14px;padding:0px;float:left;background-color:lightgrey;width:100%;width:98%;margin: 15px 4px 4px 4px;">
                <div style="padding: 20px;">
                    <h4>YOUR DISH CONTAINS:</h4>
                    <span class='no_component'>
                        <h5><i>No components picked</i></h5>
                    </span>
                    <ul class="cart_item_list"></ul>
                </div>
                <div style="background-color: #8E1069;color:white;padding: 5px;text-align: center">TOTAL DISH:
                    <span class="total_cutom_bowl_price" value="8.9" style="font-weight: bold">8,9€</span>
                </div>
                <div style="text-align: center;margin: 10px;">
                    <button class="btn btn-sm top_cart_add_button">ADD TO CART</button>
                </div>
            </div>

        </div>

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
                <button type="submit" class="btn btn-dark final_checkout">Check Out</button>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
    var base_url = '{!! url('/') !!}';
    console.log(base_url);
    var prod_count;
    var total_custom_bowl_price;
    var selected_pro_count = '';
    var current_custom_bowl = 'My Custom Bowl';
    var cart_details = {};

    var custom_bowl = {
        id: 1,
        name: 'My Custom Bowl',
        price: '',
        total: '',
        pickup_time: '',
        items: {},
        text: ''
    };
    $('.top_cart_add_button').click(function() {

        var category, categories = {};
        var items_per_category = [];
        var count = 0;
        $('.cart_item_list li[data-category]').each(function(i, el) {

            category = $(el).data('category');
            console.log($(el));
            if (categories.hasOwnProperty(category)) {
                var items_per_category = [];
                categories[category] += '<span class="items_check">-' + $(el).text() + '<br></span>';

            } else {
                categories[category] = '<span class="items_check">-' + $(el).text() + '<br></span>';

            }
        });

        // console.log(categories);
        // console.log(items_per_category);
        if ($.isEmptyObject(categories)) {
            toastr.error('No Item has been selected!');
        } else {
            console.log(items_per_category);
            $('.summary_ul').html('');

            for (var key in categories) {
                $('.summary_ul').append('<li><span style="font-size:14px">' + key + ' : </span><br>' + categories[key] + '</li>');
            }

            $('#myModal').modal('show');
        }

    });

    $(".single_prod_add").on("click", function() {
        prod_add($(this).data('value'));
    });

    $('.minus_item').on('click', function() {
        prod_minus($(this).data('value'));
    });


    function prod_add(id) {

        $('.no_component').addClass('hidden');
        $('.single_prod_btns[data-value=' + id + ']').addClass('single_prod_btns_selected');
        $('.tabs_div_content[data-value=' + id + ']').addClass('single_prod_selected');
        var single_item = $('.single_prod_add[data-value=' + id + ']');
        var free_quantity = single_item.attr('data-free-qty');
        var free_quantity_price = single_item.attr('data-qty-price');
        var cart_total_price = $('.total_cutom_bowl_price').attr('value');
        $('.minus_item[data-value=' + id + ']').removeClass('hidden');
        var count_item = single_item.attr('prod_count');
        var current_item_quantity = single_item.attr('prod_count', ++count_item);
        var current_item_name = single_item.find('.prod_name').text();
        // console.log(cart_details[custom_bowl]);
        custom_bowl['items'][id] = {
            name: current_item_name,
            quantity: count_item
        };
        var count_item_value = '<span class="cart_selected_count' + id + '" style="vertical-align: sub;font-size: 18px;font-weight: bold;color: #8e1069;">' + single_item.attr('prod_count') + 'X</span>'
        $('.cart_selected_count' + id).remove();
        $('.single_prod_btns[data-value=' + id + ']').append(count_item_value);
        if (count_item == 1) {
            var li_html = '<li data-free-qty="' + single_item.data('free-qty') + '" data-qty-price="' + single_item.data('qty-price') + '" data-category="' + single_item.data('category') +
                '" data-value="' + single_item.data('value') + '" class="cart_item_selected">' + single_item.find('.prod_name').text() + '<span class="cart_div_count' + id + '" style="float:left; padding-right:7px">' + single_item.attr('prod_count') + 'X</span><a href="#" class="remove_selected_prod cross_button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>';
            $('.cart_item_list').append(li_html);
        } else {
            $('.cart_div_count' + id).text(single_item.attr('prod_count') + 'X');
        }

        if (count_item > free_quantity) {
            total_custom_bowl_price = parseFloat(cart_total_price) + parseFloat(free_quantity_price);
            $('.total_cutom_bowl_price').attr('value', total_custom_bowl_price);
            $('.total_cutom_bowl_price').html(total_custom_bowl_price.toFixed(2) + ' €');
        }
        if (count_item == free_quantity) {
            $('.single_prod_price[data-value=' + id + ']').removeClass('hidden');
            $('.add_item[data-value=' + id + ']').css('margin-right', '39px');
        }
    };

    function prod_minus(id) {
        console.log($('.cart_item_list').length);

        var current_prod_count = $('.single_prod_add[data-value=' + id + ']').attr('prod_count');
        // console.log(current_prod_count);

        if (current_prod_count == 1) {
            $('.minus_item[data-value=' + id + ']').addClass('hidden');
            $('.cart_selected_count' + id).remove();
            $('.cart_item_selected[data-value=' + id + ']').remove();
            $('.single_prod_add[data-value=' + id + ']').attr('prod_count', 0);
            $('.minus_item[data-value=' + id + ']').parent().removeClass('single_prod_btns_selected');
            $('.tabs_div_content[data-value=' + id + ']').removeClass('single_prod_selected');
            delete custom_bowl['items'][id];
            if ($('.single_prod_add[data-value=' + id + ']').attr('data-free-qty') == 0) {
                var free_quantity_price = $('.single_prod_add[data-value=' + id + ']').attr('data-qty-price');
                var cart_total_price = $('.total_cutom_bowl_price').attr('value');
                total_custom_bowl_price = parseFloat(cart_total_price) - parseFloat(free_quantity_price);
                $('.total_cutom_bowl_price').attr('value', total_custom_bowl_price);
                $('.total_cutom_bowl_price').html(total_custom_bowl_price.toFixed(2) + ' €');

            } else {
                $('.single_prod_price[data-value=' + id + ']').addClass('hidden');
                $('.add_item[data-value=' + id + ']').css('margin-right', '0px');
            }

        } else {
            var single_item = $('.single_prod_add[data-value=' + id + ']').attr('prod_count', --current_prod_count);
            var free_quantity = single_item.attr('data-free-qty');
            var free_quantity_price = single_item.attr('data-qty-price');
            var cart_total_price = $('.total_cutom_bowl_price').attr('value');
            var current_item_name = single_item.find('.prod_name').text();
            custom_bowl['items'][id] = {
                name: current_item_name,
                quantity: current_prod_count
            };
         
            // console.log('free_quantity::' + free_quantity + ' price::' + free_quantity_price + ' cart_total::' + cart_total_price);
            var count_item_value = '<span class="cart_selected_count' + id + '"style="vertical-align: sub;font-size: 18px;font-weight: bold;color: #8e1069;">' + single_item.attr('prod_count') + 'X</span>'
            $('.cart_selected_count' + id).remove();
            $('.single_prod_btns[data-value= ' + id + ']').append(count_item_value);
            $('.cart_item_selected[data-value=' + id + ']').children('.cart_div_count' + id).text(single_item.attr('prod_count'));
            if (++current_prod_count > free_quantity) {
                total_custom_bowl_price = parseFloat(cart_total_price) - parseFloat(free_quantity_price);
                $('.total_cutom_bowl_price').attr('value', total_custom_bowl_price);
                $('.total_cutom_bowl_price').html(total_custom_bowl_price.toFixed(2) + ' €');
            }
            if (current_prod_count <= free_quantity) {
                $('.single_prod_price[data-value=' + id + ']').addClass('hidden');
                $('.add_item[data-value=' + id + ']').css('margin-right', '0px');
            }
        }
    }

    $(document).on('click', '.remove_selected_prod', function(event) {
        var id = $(this).parent().data('value');
        var selected_prod_quantity = $('.cart_div_count' + id).text().slice(0, -1);
        var _quantity = $(this).parent().data('free-qty');
        var _quantity_price = $(this).parent().data('qty-price');
        var total_cart_value = $('.total_cutom_bowl_price').attr('value');
        console.log(selected_prod_quantity);
        console.log(_quantity);

        if (selected_prod_quantity > _quantity) {
            var minus_cart_price = selected_prod_quantity - _quantity;
            minus_cart_price = parseFloat(minus_cart_price * _quantity_price);
            var update_cart_value = total_cart_value - minus_cart_price;
            $('.total_cutom_bowl_price').attr('value', update_cart_value);
            $('.total_cutom_bowl_price').html(update_cart_value.toFixed(2) + ' €');
        }
        $('.minus_item[data-value=' + id + ']').parent().removeClass('single_prod_btns_selected');
        $('.tabs_div_content[data-value=' + id + ']').removeClass('single_prod_selected');
        $(this).parent().remove();
        $('.minus_item[data-value=' + id + ']').addClass('hidden');
        $('.cart_selected_count' + id).remove();
        $('.cart_item_selected[data-value=' + id + ']').remove();
        $('.single_prod_add[data-value=' + id + ']').attr('prod_count', 0);
        if (_quantity == 0) {

        } else {
            $('.add_item[data-value=' + id + ']').css('margin-right', '0px');
            $('.single_prod_price[data-value=' + id + ']').addClass('hidden');
        }
    });


    $('.final_checkout').click(function() {
        var cart_total_price = $('.total_cutom_bowl_price').attr('value');
        custom_bowl['price'] = cart_total_price;
        custom_bowl['total'] = cart_total_price;
        cart_details[current_custom_bowl] = custom_bowl;
        document.location.href = base_url + "/checkout?items=" + encodeURIComponent(JSON.stringify(cart_details));
    });
</script>
@endsection