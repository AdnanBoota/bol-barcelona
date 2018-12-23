{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .select2 {
        width: 100%;
    }
</style>
@section('content_header')
    <h1>Create Voucher</h1>
@stop

@section('content')
    <p>Add a new Voucher</p>
    <div class="container">
        <div class="row contact_form" style="margin-top:5%;">
            <div class="col-sm-8 col-sm-offset-2">
                @if(isset($record))
                    {{ Form::model($record, ['route' => ['vouchers.update', $record->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'vouchers.store']) }}
                @endif
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name', \Illuminate\Support\Facades\Input::old('name'),['class'=>'form-control','required'=>'required']) }}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Value</label>
                        {{ Form::number('value',isset($record) ? $record->value:'0.00',['class'=>'form-control','step'=>'0.01','min'=>'0.00','required'=>'required']) }}
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Select DateRange</label>
                        {{ Form::text('daterange',isset($record) ? $record->start_date:'',['class'=>'form-control daterange','required'=>'required']) }}

                        {{ Form::hidden('start_date', '') }}
                        {{ Form::hidden('end_date', '') }}
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Description</label>
                        {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>5,'required'=>'required']) !!}
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <script> console.log('Hi!');
        var start_date = '{!! isset($record) ? $record->start_date :""!!}';
        var end_date = '{!! isset($record) ?$record->end_date:"" !!}';

        $(document).ready(function () {
            $('.select2').select2({
                width: 'resolve'
            });
        });

        $(function () {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                startDate: (start_date != '') ? moment(start_date) : moment(),
                endDate: (end_date != '') ? moment(end_date) : moment(),
            }, function (start, end, label) {
                $('input[name="start_date"]').val(moment(start).format("YYYY-MM-DD HH:mm:ss"));
                $('input[name="end_date"]').val(moment(end).format("YYYY-MM-DD HH:mm:ss"));
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>
@stop