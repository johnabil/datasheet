@extends('odas')
@section('content')

    <div style="max-width: 500px;margin: auto;">

        {{ Form::open(array('url' => '/add_person_form', 'method' => 'post')) }}

        echo Form::text('username');

        {{ Form::close() }}
    </div>

@endsection