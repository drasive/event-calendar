@extends('site.default-layout')

@section('title', 'Manage Genres')
@section('description', 'Manage the event genres for the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Genres</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
            @if (count($genres) === 0)
            <p>
                There are no genres yet.<br />
                <br />
				<a class="btn btn-success" data-backdrop="static"
                  href="genres/create" data-toggle="modal" data-target="#createModal">
                  Create Genre</a>
            </p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($genres as $genre)
                            <tr>
                                <td width="100%">{{{ $genre->name }}}</td>
                                <td>
                                    <a title="Edit genre &quot;{{{ $genre->name }}}&quot;" data-backdrop="static"
                                         href="genres/edit/{{ $genre->id }}" data-toggle="modal" data-target="#editModal">
                                        <span class="fa fa-pencil fa-fw"></span></a>
                                </td>
                                <td>
                                    @if (count($genre->events) > 0)
                                        <a title="This genre is associated with {{{ count($genre->events) }}} event(s) and therefore can't be deleted"
                                          disabled="disabled"  style="color: grey;">
                                          <span class="fa fa-trash fa-fw"></span></a>
                                    @else
                                        <a title="Delete genre &quot;{{{ $genre->name }}}&quot;" data-backdrop="static"
                                          href="genres/delete/{{ $genre->id }}" data-toggle="modal" data-target="#deleteModal">
                                          <span class="fa fa-trash fa-fw"></span></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                
                <a class="btn btn-success pull-right" data-backdrop="static"
                  href="genres/create" data-toggle="modal" data-target="#createModal">
                  Create Genre</a>
            @endif
        </div>
    </div>
    
    <div id="createModal" class="modal modal-remote fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="editModal" class="modal modal-remote fade" tabindex="-1" role="dialog">
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
@stop
