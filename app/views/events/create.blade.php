<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Create Event</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'createEventForm', 'url' => 'api/events', 'method' => 'put')) }}
        <table>
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', 'Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of the genre. E.g.: Concert',
                          'autofocus' => 'autofocus')); }}
                    </td>
                </tr>
				<tr>
                    <td colspan="2">
                        {{ Form::label('description', 'Description:'); }}
						{{ Form::text('description', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of the genre. E.g.: Concert',
                          'autofocus' => 'autofocus')); }}
                    </td>
                </tr>
				<tr>
                    <td>
                        {{ Form::label('duration', 'Duration:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('duration', '', array('class' => 'form-control',
                          'placeholder' => 'The total duration of this event. E.g.: Concert')); }}
                    </td>
                </tr>
				<tr>
                    <td colspan="2">
                        {{ Form::label('cast', 'Cast:'); }}
						{{ Form::text('cast', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of the genre. E.g.: Concert')); }}
                    </td>
                </tr>
				<tr>
                    <td>
                        {{ Form::label('image', 'Image:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('image', '', array('class' => 'form-control',
                          'placeholder' => 'The total duration of this event. E.g.: Concert')); }}
                    </td>
                </tr>
				<tr>
                    <td colspan="2">
                        {{ Form::label('image-description', 'Image description:'); }}
						{{ Form::text('image-description', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of the genre. E.g.: Concert')); }}
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
