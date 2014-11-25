<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit "{{{ $event->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'editEventForm', 'url' => 'api/events/' . $event->id, 'method' => 'post')) }}
        <table class="management">
            <tbody>
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
                          'placeholder' => 'The image for this event.')); }}
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
            </tbody>
        </table>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    {{ Form::button('Cancel', array('class' => 'btn btn-default',
      'data-dismiss' => 'modal')); }}
    {{ Form::submit('Save changes', array('class' => 'btn btn-primary',
      'form' => 'editEventForm')); }}
</div>
