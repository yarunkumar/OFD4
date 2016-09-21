@extends('app')
@section('content')

    <h1>Station </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>City Code</td>
                <td><?php echo ($station['id']); ?></td>
            </tr>
            <tr>
                <td>Street Name</td>
                <td><?php echo ($station['st_name']); ?></td>
            </tr>
            <tr>
                <td>Street Number</td>
                <td><?php echo ($station['st_no']); ?></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td><?php echo ($station['created_at']); ?></td>
            </tr>
             <tr>
                <td>Updated At</td>
                <td><?php echo ($station['updated_at']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>


    

@stop
