@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Results:</h1>

        @include('layouts.partials.errors')
        Thank you {{ $email }} The result of the sorting is:
        @forelse($results as $key => $value)
            <p>{{{ $value->id . ", " . $value->firstname . ', ' . $value->lastname }}}</p>
        @empty
            <p>File is empty</p>
        @endforelse

    </div>
</div>
@stop