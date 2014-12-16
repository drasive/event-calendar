@extends('site.default-layout')

@section('title', 'Archive')
@section('description', 'All past events of the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header inline-block">Archive</h1>
            @if ($eventCountUnfiltered != count($events))
                <span class="title-addition">({{{count($events) }}}/ {{{ $eventCountUnfiltered }}})</span>
            @endif
        </div>
    </div>
    
    <div class="text-center">
        @include('shared.genre-filter')
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            @if (count($events) === 0)
            <p>                
                There are no past events at this time.<br />
                You can take a look at the upcoming events in the <a href="programme">programme</a>.                              
            </p>
            @endif
            
            @if (count($events) > 0)  
                <div class="accordion">
                    @foreach ($events as $event)
                        @include('shared.event')
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
    <script src="js/common.js"></script>
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="js/images.js"></script>
@stop
