@extends('app')

@section('content')
    <h1>Vehicle</h1>
    <a href="{{url('/vehicles/create')}}" class="btn btn-success">Create Station</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Van No</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year Vehicle</th>
            <th>Type</th>
            <th>City Code</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
               <td>{{ $vehicle->van_no }}</td>
                <td>{{ $vehicle->make }}</td>
                <td>{{ $vehicle->model }}</td>
                 <td>{{ $vehicle->year_vehicle }}</td>
                  <td>{{ $vehicle->type }}</td>
                   <td>{{ $vehicle->city_code }}</td>
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
