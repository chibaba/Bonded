@extends('layouts.app')
@section('content')

<h1>contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    //
{!! Form::close() !!}
@endsection