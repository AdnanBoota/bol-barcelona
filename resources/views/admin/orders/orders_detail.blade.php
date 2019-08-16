{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .list-group-flush {
        position: relative;
        display: block;
        margin-top: 14px;
        background-color: #fff;
        width: 50%;
        overflow: hidden;
        float: left;
        margin: 0px;
        border-bottom: 2px solid;
    }

    .top-head {
        padding-left: 16px;
        padding-top: 15px;
        padding-bottom: 8px;
    }
</style>
@section('content_header')
<h1>Orders</h1>
@stop

@section('content')
<p>All the Orders</p>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                @foreach($data as $order)
                @php
                $toppings = preg_split("/[,]/",$order->extras);
                $quantities = preg_split("/[,]/",$order->quantity);

                @endphp

                <ul class="list-group list-group-flush">
                    <li class="top-head"><strong>{{$order->name}}</strong></li>
                    @if(empty($toppings[0]))
                    @else
                    <li class="top-head"><strong>Extra Toppings</strong></li>
                    @foreach($toppings as $topping)
                    <li class="list-group-item">{{$topping}}</li>
                    @endforeach
                    @endif
                </ul>

                <ul class="list-group list-group-flush">
                    <li class="top-head" style="text-align:right; padding-right:15px"><strong>Price Per Bowl: {{$order->price}}€</strong></li>
                    @if(empty($quantities[0]))
                    @else
                    <li class="top-head"><strong>Quantity</strong></li>
                    @foreach($quantities as $quantity)
                    <li style="" class="list-group-item">{{$quantity}}</li>
                    @endforeach
                    @endif
                </ul>

                @endforeach
                @foreach($total as $total)
                <h4 style="float:right">Total Price: {{$total->total}}€</h1>
                    @endforeach
            </div>

        </div>
    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.data-table').dataTable({
            "order": [
                [3, "desc"]
            ],

        });
    });
</script>
@stop