@extends('site.default-layout')

@section('title', 'Programme')
@section('description', 'All upcoming events of the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Programme</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            @if (count($events) === 0)
            <p>                
                There are no upcoming events at this time.<br />
                You can take a look at the past events in the <a href="archive">archive</a>.                              
            </p>
            @endif
            
            @if (count($events) > 0)  
                <div class="accordion">
                    @foreach ($events as $event)
                        @include('shared.event', array('event' => $event))
                    @endforeach
                </div>
            @endif
            
            <div class="text-center">
               {{ $paginator->links(); }}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="js/events.js"></script>
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="js/images.js"></script>
@stop
