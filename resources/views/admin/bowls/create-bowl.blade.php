{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .select2 {
        width: 100%;
    }
</style>
@section('content_header')
    <h1>Create Bowl</h1>
@stop

@section('content')
    <p>Add a new Bowl</p>
    <div class="container">
        <div class="row contact_form" style="margin-top:5%;">
            <div class="col-sm-8 col-sm-offset-2">
                @if(isset($record))
                    {{ Form::model($record, ['route' => ['bowls.update', $record->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'bowls.store']) }}
                @endif
                {{ csrf_field() }}
                {{--<div>--}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name', \Illuminate\Support\Facades\Input::old('name'),['class'=>'form-control','required'=>'required']) }}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Type</label>
                        {{Form::select('type',$listValues,\Illuminate\Support\Facades\Input::old('type'),['name'=>'type','class'=>'select2','required'=>'required'])}}
                    </div>
                </div>
                {{--</div>--}}
                <div class="clearfix"></div>
                <div class="clearfix col-sm-6">
                    <div class="form-group">
                        <label for="email">Price</label>
                        {{ Form::number('price',isset($record) ? $record->price:'0.00',['class'=>'form-control','step'=>'0.01','min'=>'0.00','required'=>'required']) }}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Specifications</label>
                        {{Form::select('specs',$specsValues,isset($record) ? json_decode($record->specs):null,['multiple'=>'true','name'=>'specs[]','class'=>'select2','required'=>'required'])}}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Toppings</label>
                        {{Form::select('ingredients',$ingredients,isset($record) ? $record->ingredients->pluck('id'):null,['multiple'=>'true','name'=>'ingredients[]','class'=>'select2','required'=>'required'])}}
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');
        $(document).ready(function () {
            $('.select2').select2({
                width: 'resolve'
            });
        });
    </script>
@stop