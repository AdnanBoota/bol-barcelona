{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .select2 {
        width: 100%;
    }
</style>
@section('content_header')
    <h1>Create Custom Bowl Ingredient</h1>
@stop

@section('content')
    <p>Add a new Custom Bowl Ingredient</p>
    <div class="container">
        <div class="row contact_form" style="margin-top:5%;">
            <div class="col-sm-8 col-sm-offset-2">
                @if(isset($record))
                    {{ Form::model($record, ['route' => ['custom-ingredients.update', $record->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'custom-ingredients.store']) }}
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
                        <label for="email">Category</label>
                        {{Form::select('category',$ingredValues,isset($record) ? $record->category:null,['name'=>'category','class'=>'select2','required'=>'required'])}}
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Price</label>
                        {{ Form::number('price',isset($record) ? $record->price:'0.00',['class'=>'form-control','step'=>'0.01','min'=>'0.00','required'=>'required']) }}
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Qty. Free</label>
                        {{ Form::number('qty_free',isset($record) ? $record->qty_free:'1',['class'=>'form-control','step'=>'1','min'=>'0','required'=>'required']) }}
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