{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vouchers</h1>
@stop

@section('content')
    <p>All the Vouchers</p>

    <div class="container">
        <a href="{{url('admin/vouchers/create')}}" style="float: right;" class="btn btn-primary">Add
            Voucher</a><br><br><br>
        <table class="data-table" class="display" style="width:100%;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->name}}</td>
                    <td>{{$record->value}}</td>
                    <td>{{$record->description}}</td>
                    <td>{{$record->start_date}}</td>
                    <td>{{$record->end_date}}</td>
                    <td>-</td>
                    <td><a href="{{route('vouchers.edit',$record->id)}}" style="margin-top: 5px;"
                           class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-edit"
                                                                aria-hidden="true"></span></a></td>
                    <td>
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'vouchers.destroy', $record->id ] ])}}
                        {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['type' => 'submit','class' => 'btn btn-sm btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
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

        $(document).ready(function () {
            $('.data-table').dataTable({
                "order": [[3, "desc"]],

            });
        });

    </script>
@stop