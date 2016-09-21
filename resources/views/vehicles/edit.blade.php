@extends('app')
@section('content')
    <h1>Update Customer</h1>
    {!! Form::model($vehicle,['method' => 'PATCH','route'=>['vehicles.update',$vehicle->id]]) !!}
     <div class="form-group">
        {!! Form::label('van_no', 'Van No:') !!}
        {!! Form::text('van_no',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('make', 'Make') !!}
        {!! Form::text('make',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('model', 'Model') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
