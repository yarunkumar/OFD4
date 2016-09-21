@extends('app')
@section('content')
    <h1>Create New Station</h1>
    {!! Form::open(['url' => 'stations']) !!}
    <div class="form-group">
        {!! Form::label('city_code', 'City Code:') !!}
        {!! Form::text('city_code',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('st_name', 'Street Name') !!}
        {!! Form::text('st_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('st_no', 'Street Number:') !!}
        {!! Form::text('st_no',null,['class'=>'form-control']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
