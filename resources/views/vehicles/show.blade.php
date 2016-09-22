@extends('app')
@section('content')

    <h1>Vehicle</h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Van No</td>
                <td><?php echo ($vehicle['id']); ?></td>
            </tr>
            <tr>
                <td>Make</td>
                <td><?php echo ($vehicle['make']); ?></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><?php echo ($vehicle['model']); ?></td>
            </tr>
            <tr>
                <td>Year Vehicle </td>
                <td><?php echo ($vehicle['year_vehicle']); ?></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><?php echo ($vehicle['type']); ?></td>
            </tr> 
            </tbody>
        </table>
    </div>


@stop
