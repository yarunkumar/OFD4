@extends('app')

@section('content')
    <h1>Gps Units</h1>
    <a href="{{url('/gps_units/create')}}" class="btn btn-success">Create Station</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th> G IDr</th>
            <th>GPS Protocol</th>
            <th>Model</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($gps_units as $gps_unit)
            <tr>
                <td>{{ $gps_unit->gid }}</td>
                <td>{{ $gps_unit->gps_protocol }}</td>
                <td>{{ $gps_unit->model }}</td>
                <td><a href="{{url('vehicles',$vehicle->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('vehicles.edit',$vehicle->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['vehicles.destroy', $vehicle->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    


@endsection
