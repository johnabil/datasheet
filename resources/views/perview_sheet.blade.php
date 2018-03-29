@extends('welcome')
@section('content')

    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Points</th>
        </tr>
        </thead>

        <tbody>
        @foreach($persons as $person)
            <tr>
                <td>{{$person->name}}</td>
                <td style="background-color: #2ab27b;">{{$person->points}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
