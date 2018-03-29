@extends('welcome')
@section('content')

    {!! Form::open(['url' => '/add_other_points', 'method' => 'POST', 'class' => 'form-horizontal', 'style' => 'margin:40px;']) !!}

    @foreach($persons as $person)
        <label><input type="checkbox" name="my_checkbox[]" value="{{$person->name}}"> {{$person->name}}</label><br>
    @endforeach
    <br>
    {!! Form::submit('Add Points',['class' => 'btn btn-success', 'style' => 'margin-left:32px;']) !!}

    {!! Form::close() !!}

@endsection
