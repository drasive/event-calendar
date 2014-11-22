<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Create Event</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'createEventForm', 'url' => 'api/events', 'method' => 'put', 'files' => true)) }}
        <table class="management">
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', 'Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of this event. E.g.: Christmas concert',
                          'autofocus' => 'autofocus')); }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::label('genre', 'Genre:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::select('genre', $genreList, null, array('class' => 'form-control')); }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{ Form::label('description', 'Description:'); }}
                        {{ Form::textarea('description', '', array('class' => 'form-control',
                          'placeholder' => 'The description of this event.')); }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::label('duration', 'Duration:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('duration', '', array('class' => 'form-control',
                          'placeholder' => 'The total duration of this event. E.g.: 02:30 (2 hours and 30 minutes)')); }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{ Form::label('cast', 'Cast:'); }}
                        {{ Form::textarea('cast', '', array('class' => 'form-control',
                          'placeholder' => 'The cast for this event.')); }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::label('image', 'Image:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::file('image', array('class' => 'form-control',
                          'placeholder' => 'The image for this event.')); }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{ Form::label('image-description', 'Image description:'); }}
                        {{ Form::textarea('image-description', '', array('class' => 'form-control',
                          'placeholder' => 'The description of the selected image.')); }}
                    </td>
                </tr>
            </tbody>
        </table>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    {{ Form::button('Cancel', array('class' => 'btn btn-default',
      'data-dismiss' => 'modal')); }}
    {{ Form::submit('Create event', array('class' => 'btn btn-success',
      'form' => 'createEventForm')); }}
</div>
