{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .select2 {
        width: 100%;
    }
</style>
@section('content_header')
    <h1>Create Ingredient</h1>
@stop

@section('content')
    <p>Add a new Ingredient</p>
    <div class="container">
        <div class="row contact_form" style="margin-top:5%;">
            <div class="col-sm-8 col-sm-offset-2">
                @if(isset($record))
                    {{ Form::model($record, ['route' => ['ingredients.update', $record->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'ingredients.store']) }}
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
                        <label for="email">Price</label>
                        {{ Form::number('price',isset($record) ? $record->price:'0.00',['class'=>'form-control','step'=>'0.01','min'=>'0.00','required'=>'required']) }}
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Specifications</label>
                        {{Form::select('specs',$specsValues,isset($record) ? json_decode($record->specs):null,['multiple'=>'true','name'=>'specs[]','class'=>'select2','required'=>'required'])}}
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