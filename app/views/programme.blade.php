@extends('site.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Programme</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            Content<br />
            <br />
			Existing genres:
			<ul>
            @foreach ($genres as $genre)
                <li>{{ $genre->name }}</li>
            @endforeach
			<ul>
        </div>
    </div>
@stop
