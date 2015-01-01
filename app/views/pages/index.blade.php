@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Upload!</h1>

        @include('layouts.partials.errors')

        {{ Form::open(['route' => 'pages.store','files'=>true]) }}

        <div class="form-group">
            {{ Form::label('email', 'Enter email:') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('file', 'Select file:') }}
            {{ Form::file('file', '', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
        </div>

        {{ Form::close() }}
    </div>
</div>
@stop