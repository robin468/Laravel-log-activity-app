@extends('template.html')

@section('content')
    <div class="container">
        <h1>Log Activity Lists</h1>
        <table class="table table-bordered">
            <tr>
                <th>log_name</th>
                <th>description</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>subject_type</th>
                <th>causer_type</th>
                <th>properties</th>
            </tr>
                @foreach($activity as $key => $value)
                    <tr>
                        <td>{{$value['log_name']}}</td>
                        <td>{{$value['description']}}</td>
                        <td>{{$value['created_at']}}</td>
                        <td>{{$value['updated_at']}}</td>
                        <td>{{$value['subject_type']}}</td>
                        <td>{{$value['causer_type']}}</td>
                        <td>{{$value['properties']}}</td>
                    </tr>
                @endforeach
        </table>

    </div>

@endsection
