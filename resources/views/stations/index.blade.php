@extends('app')

@section('content')
    <h1>Station</h1>
    <a href="{{url('/stations/create')}}" class="btn btn-success">Create Station</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th> City Code</th>
            <th>Street Name</th>
            <th>Street No</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stations as $station)
            <tr>
                <td>{{ $station->id }}</td>
                <td>{{ $station->st_name }}</td>
                <td>{{ $station->st_no }}</td>
                <td>{{ $station->created_at }}</td>
                <td>{{ $station->updated_at }}</td>
                <td><a href="{{url('stations',$station->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('stations.edit',$station->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['stations.destroy', $station->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    


@endsection
