@extends('app')
@section('content')
    <h1>Create New Vehicle</h1>
    {!! Form::open(['url' => 'vehicles']) !!}
    
    <div class="form-group">
        {!! Form::select('city_code', $stations) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('make', 'Make') !!}
        {!! Form::text('make',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('model', 'Model') !!}
        {!! Form::text('model',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year_vehicle', 'Year Vehicle:') !!}
        {!! Form::text('year_vehicle',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city_code', 'City Code:') !!}
        {!! Form::text('city_code',null,['class'=>'form-control']) !!}
    </div>  


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
