@extends('site.layout')

@section('title', 'Programme')
@section('description', 'All upcoming events for the Cultural Institution.')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Programme</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            @if (count($events) === 0)
            <p>                
                There currently are no upcoming events.<br />
                You can take a look at the past events in the <a href="archive">archive</a>.                              
            </p>
            @endif
            
            @if (count($events) > 0)  
                <div id="accordion">
                    @foreach ($events as $event)
                        @include('event', array('event' => $event))
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@stop
