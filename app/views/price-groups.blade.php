@extends('site.default-layout')

@section('title', 'Manage Price Groups')
@section('description', 'Manage the event price groups for the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Price Groups</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
            @if (count($priceGroups) === 0)
            <p>
                There are no price groups yet.<br />
                <br />
				<a class="btn btn-success" data-backdrop="static"
                  href="price-groups/create" data-toggle="modal" data-target="#createModal">
                  Create Price Group</a>
            </p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($priceGroups as $priceGroup)
                                <tr>
                                    <td width="70%">{{{ $priceGroup->name }}}</td>
									<td width="15%">{{{ $priceGroup->price }}}</td>
                                    <td>
                                        <a title="Edit price group &quot;{{{ $priceGroup->name }}}&quot;" data-backdrop="static"
                                          href="price-groups/edit/{{ $priceGroup->id }}" data-toggle="modal" data-target="#editModal">
                                            <span class="fa fa-pencil fa-fw"></span></a>
                                    </td>
                                    <td>
                                        @if (count($priceGroup->events) > 0)
                                            <a title="This price group is associated with {{{ count($priceGroup->events) }}} event(s) and therefore can't be deleted"
                                              disabled="disabled"  style="color: grey;">
                                              <span class="fa fa-trash fa-fw"></span></a>
                                        @else
                                            <a title="Delete price group &quot;{{{ $priceGroup->name }}}&quot;" data-backdrop="static"
                                              href="price-groups/delete/{{ $priceGroup->id }}" data-toggle="modal" data-target="#deleteModal">
                                              <span class="fa fa-trash fa-fw"></span></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <a class="btn btn-success pull-right" data-backdrop="static"
                  href="price-groups/create" data-toggle="modal" data-target="#createModal">
                  Create Price Group</a>
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
