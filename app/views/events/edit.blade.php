<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit "{{{ $event->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'editEventForm', 'url' => 'api/events/' . $event->id, 'method' => 'post',  'files' => true)) }}
        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#event" data-toggle="tab" role="tab" >Event</a></li>
              <li role="presentation"><a href="#shows" data-toggle="tab" role="tab" >Shows</a></li>
              <li role="presentation"><a href="#links" data-toggle="tab" role="tab" >Links</a></li>
            </ul>
        
            <div class="tab-content">
                <div class="tab-pane fade in active" id="event">
                    <h3>Event</h3>
                    <table class="management">
                        <tr>
                            <td>
                                {{ Form::label('name', 'Name:', array('class' => 'form-label-inline')); }}
                            </td>
                            <td width="100%">
                                {{ Form::text('name', $event->name, array('class' => 'form-control',
                                  'placeholder' => 'The appellation of this event. E.g.: Christmas concert',
                                  'required' => 'required', 'pattern' => '.{2,150}', 'title' => '2 to 150 characters',
                                  'autofocus' => 'autofocus')); }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::label('genre', 'Genre:', array('class' => 'form-label-inline')); }}
                            </td>
                            <td width="100%">
                                {{ Form::select('genre', $genreList, $event->genre_id, array('class' => 'form-control')); }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{ Form::label('description', 'Description:'); }}
                                {{ Form::textarea('description', $event->description, array('class' => 'form-control',
                                  'placeholder' => 'The description of this event.',
                                  'required' => 'required', 'pattern' => '.{12,500}', 'title' => '12 to 500 characters')); }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::label('duration', 'Duration:', array('class' => 'form-label-inline')); }}
                            </td>
                            <td width="100%">
                                {{ Form::input('time', 'duration', $event->duration, array('class' => 'form-control',
                                  'placeholder' => 'The duration of each show of this event. E.g.: 02:30 (2 hours and 30 minutes)',
                                  'required' => 'required', 'title' => '00:00 to 23:59')); }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{ Form::label('cast', 'Cast:'); }}
                                {{ Form::textarea('cast', $event->cast, array('class' => 'form-control',
                                  'placeholder' => 'The cast for this event.',
                                  'pattern' => '.{0,500}', 'title' => 'Maximum 500 characters')); }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::label('image', 'Image:', array('class' => 'form-label-inline')); }}
                            </td>
                            <td width="100%">
                                {{ Form::file('image', array('class' => 'form-control',
                                  'placeholder' => 'The image for this event.',
                                  'accept' => 'image/*')); }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{ Form::label('image-description', 'Image description:'); }}
                                {{ Form::textarea('image-description', $event->image_description, array('class' => 'form-control',
                                  'placeholder' => 'The description of the selected image.',
                                  'pattern' => '.{0,250}', 'title' => 'Maximum 250 characters')); }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane fade" id="shows">
                    <h3>Shows</h3>
                    
                </div>
                <div class="tab-pane fade" id="links">
                    <h3>Links</h3>
                    <div class="table-responsive">
                        <table class="table table-striped management" width="100%">
                            <tr>
                                <th>URL</th>
                                <th>Name</th>
                            </tr>
                            <tr>
                                <td width="70%" class="margin-right">
                                    <input id="url_1" name="url_1" type="url" class="form-control"
                                      placeholder="The URL of the link. E.g.: http://www.gibm.ch"
                                      required="required" pattern=".{5,255}" title="A valid URL">
                                </td>
                                <td width="30%">
                                    <input id="name_1" name="name_1" type="text" class="form-control"
                                      placeholder="The name of the link. E.g.: www.gibm.ch"
                                      pattern=".{0,50}" title="Maximum 50 characters">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    {{ Form::button('Cancel', array('class' => 'btn btn-default',
      'data-dismiss' => 'modal')); }}
    {{ Form::submit('Save changes', array('class' => 'btn btn-primary',
      'form' => 'editEventForm')); }}
</div>
