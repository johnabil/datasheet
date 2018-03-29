@extends('welcome')
@section('content')

    <br><br><br><br><br><br>
    <div style="max-width: 500px;margin: auto; background-color: lightblue; border-style: solid;">

        {!! Form::open(['url' => '/add_person', 'method' => 'post', 'class' => 'form-horizontal', 'style' => 'margin:40px;']) !!}

        {!! Form::label('personlbl','Name') !!}
        {!! Form::text('name','',['class' => 'form-control']) !!}<br>
        {!! Form::label('pointslbl','Points') !!}
        {!! Form::text('points','',['class' => 'form-control']) !!}<br>
        {!! Form::submit('Add Name',['class' => 'btn btn-success', 'style' => 'margin-left:32px;']) !!}

        {!! Form::close() !!}
    </div>

@endsection