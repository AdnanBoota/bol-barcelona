{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Orders</h1>
@stop

@section('content')
<p>All the Orders</p>

<div class="container">

    <table class="data-table" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer E-mail</th>
                <th>Customer Phone</th>
                <th>Pickup Time</th>
                <th>Total Price</th>
                <!-- <th>Extra.</th> -->
                <th>Created At</th>
                <th>Updated At</th>
                <td>Order Details</td>
                <!-- <th>Edit</th> -->
                <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $order)

            <tr>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->customer_email}}</td>
                <td>{{$order->customer_phone}}</td>
                <td>{{$order->pickup_time}} Mins</td>
                <td>{{$order->total}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->updated_at->diffForHumans()}}</td>
                <!-- <td>

                    {{ Form::open([ 'method'  => 'show', 'route' => [ 'orders.destroy', $order->id ] ])}}
                    {{ Form::button('<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>', ['type' => 'submit','class' => 'btn btn-sm btn-info']) }}
                    {{ Form::close() }}
                </td> -->
                <td><a href="{{route('orders.show',$order->id)}}" style="margin-top: 5px;" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a></td>
                <td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone No#</th>
                <th>PickUp Time</th>
                <th>Total Price</th>
                <!-- <th>Extra.</th> -->
                <th>Created At</th>
                <th>Updated At</th>
                <td>Order Details</td>
                <!-- <th>Edit</th> -->
                <!-- <th>Delete</th> -->
            </tr>
        </tfoot>
    </table>
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