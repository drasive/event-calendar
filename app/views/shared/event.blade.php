<h3>{{{ $event->name }}}</h3>
<div>
    <p>
        <a class="fancybox" href="http://placehold.it/500x500">
            <img src="http://placehold.it/150x150" alt="" />
        </a>
    </p>
    <p>{{{ $event->genre->name }}}, {{{ $event->duration }}} </p>
    <p>{{{ $event->description }}}</p>
    <p>{{{ $event->cast }}}</p>
    <p>Vorstellungen:
        @foreach ($event->shows as $show)
            {{{ $show->time }}} ({{{ $show->date }}}) |
        @endforeach
    </p>
    <p>Eintrittspreise:<br />
        @foreach ($event->price_groups as $price_group)
            {{{ $price_group->name }}}: Fr. {{{ $price_group->price }}}.-<br />
        @endforeach
    </p>
    <p>Links:<br />
        @foreach ($event->links as $link)
            <a href="{{{ $link->url }}}">
            @if ($link->name !== null)
                {{{ $link->name }}}
            @else
                {{{ $link->url }}}
            @endif
            </a><br />
        @endforeach
    </p>
</div>
