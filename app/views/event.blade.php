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