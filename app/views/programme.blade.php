@extends('site.layout')

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
                Es gibt zur Zeit keine bevorstehenden Veranstaltungen.<br />
                Sie können sich die vergangenen Veranstaltungen im <a href="archive">Archiv</a> ansehen.                              
            </p>
            @endif
            
            @if (count($events) > 0)  
                <div id="accordion">
                    @foreach ($events as $event)
                    <h3>{{{ $event->Name }}}</h3>
                    <div>
                        <p>{{{ $event->genre->Name }}}, {{{ $event->Duration }}} </p>
                        <p>{{{ $event->Description }}}</p>
                        <p>{{{ $event->Cast }}}</p>
                        <p>Vorstellungen:
                           @foreach ($event->shows as $show)
                               {{{ $show->Time }}} ({{{ $show->Date }}}) |
                           @endforeach
                        </p>
                        <p>Eintrittspreise:<br />
                           @foreach ($event->priceGroups as $priceGroup)
                               {{{ $priceGroup->Name }}}: Fr. {{{ $priceGroup->Price }}}.-<br />
                           @endforeach
                        </p>
                        <p>Links:<br />
                           @foreach ($event->links as $link)
                               <a href="{{{ $link->URL }}}">
                               @if ($link->Name !== null)
                                   {{{ $link->Name }}}
                               @else
                                   {{{ $link->URL }}}
                               @endif
                               </a><br />
                           @endforeach
                        </p>
                    </div>
                    @endforeach            
                </div>
            @endif
        </div>
    </div>
@stop
