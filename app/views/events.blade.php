@extends('site.default-layout')

@section('title', 'Manage Events')
@section('description', 'Manage the events for the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Events</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
            @if (count($events) === 0)
            <p>
                There are no events yet.<br />
                <br />
                @if (count($genres) === 0)
                    There needs to be at least one genre in order to create an event.<br />
                    <a class="btn btn-success" href="genres">Manage Genres</a>
                @else
                    <a class="btn btn-success" data-backdrop="static"
                      href="events/create" data-toggle="modal" data-target="#createModal">
                      Create Event</a>
                @endif
            </p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th class="right-align">First Show</th>
                            <th class="right-align">Shows</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($events as $event)
                            <tr>
                                <td width="55%">{{{ $event->name }}}</td>
                                <td width="25%" class="right-align">
                                    @if (count($event->shows) > 0)
                                        {{{ date('d.m.Y', strtotime($event->firstShow()->date)) }}}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td width="20%" class="right-align">{{{ count($event->shows) }}} show(s)</td>
                                <td>
                                    <a title="Edit event &quot;{{{ $event->name }}}&quot;" data-backdrop="static"
                                      href="events/edit/{{ $event->id }}" data-toggle="modal" data-target="#editModal">
                                        <span class="fa fa-pencil fa-fw"></span></a>
                                </td>
                                <td>
                                    <a title="Delete event &quot;{{{ $event->name }}}&quot;" data-backdrop="static"
                                      href="events/delete/{{ $event->id }}" data-toggle="modal" data-target="#deleteModal">
                                      <span class="fa fa-trash fa-fw"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                
                <a class="btn btn-success pull-right" data-backdrop="static"
                  href="events/create" data-toggle="modal" data-target="#createModal">
                  Create Event</a>
            @endif
        </div>
    </div>
    
    <div id="createModal" class="modal modal-remote modal-wide fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="editModal" class="modal modal-remote modal-wide fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="deleteModal" class="modal modal-remote fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="js/common.js"></script>
    <script src="js/modals.js"></script>
    <script src="js/manage-event.js"></script>
@stop
