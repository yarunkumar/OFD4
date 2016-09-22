@extends('app')
@section('content')
    <h1>Update Station</h1>
    {!! Form::model($station,['method' => 'PATCH','route'=>['stations.update',$station->id]]) !!}
    <div class="form-group">
        {!! Form::label('id', 'City Code(ID):') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
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
        {!! Form::label('updated_at', 'Updated At:') !!}
        {!! Form::text('updated_at',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        {!! Form::text('state',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
