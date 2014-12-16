<h3>{{{ $event->name }}} {{{ date('d.m.Y', strtotime($event->firstShow()->date)) }}} ({{{ ($event->genre->name) }}})</h3>
<div>
    <div class="row">
        <div class="event col-sm-7 col-md-8">            
            <p class="event-description">
                @if (!is_null($event->description) && $event->description !== '')
                    {{{ $event->description }}}
                @else
                    This event has no description.
                @endif
            </p>
            <p class="event-cast">
                @if (!is_null($event->cast) && $event->cast !== '')
                    <i>Cast: {{{ $event->cast }}}</i>
                @else
                    <i>Cast: -</i>
                @endif
            </p>
            
            <h4 class="inline-block">Shows</h4> <span class="title-addition">({{{ date('H:i', strtotime($event->duration)) }}} hours each)</span>
            <p>
                @foreach ($event->shows as $show)
                    {{{ date('l, d. F', strtotime($show->date)) }}} at {{{ date('H:i', strtotime($show->time)) }}}
                    <br />
                @endforeach
            </p>
            
            @if (count($event->price_groups) > 0)
                <h4>Entrance Fees</h4>
                <p>
                    @foreach ($event->price_groups as $price_group)
                        {{{ $price_group->name }}}: Fr. {{{ $price_group->price }}}<br />
                    @endforeach
                </p>
            @endif
            
            @if (count($event->links) > 0)
                <h4>Further Information</h4>
                <p>
                    @foreach ($event->links as $link)
                        <a href="{{{ $link->url }}}" target="_blank">
                            @if (!is_null($link->name) && $link->name !== '')
                                {{{ $link->name }}}
                            @else
                                {{{ $link->url }}}
                            @endif
                        </a>
                        <br />
                    @endforeach
                </p>
            @endif
        </div>
        
        @if (!is_null($event->image_path))
            <div class="text-center col-sm-5 col-md-4">
                <a class="fancybox event-image" href="images/uploads/{{ $event->image_path }}"
                  title="{{{ $event->name }}}">
                    <img src="images/uploads/{{ $event->image_thumbnail_path }}" />
                </a>
                
                <p>{{{ $event->image_description }}}</p>
            </div>
        @endif
    </div>
</div>
