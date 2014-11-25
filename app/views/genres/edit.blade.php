<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit "{{{ $genre->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'editGenreForm', 'url' => 'api/genres/' . $genre->id, 'method' => 'post')) }}
        <table class="management">
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', 'Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', $genre->name, array('class' => 'form-control',
                          'placeholder' => 'The appellation of this genre. E.g.: Concert',
                          'required' => 'required', 'pattern' => '.{2,50}', 'title' => '2 to 50 characters',
                          'autofocus' => 'autofocus')); }}
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
      'form' => 'editGenreForm')); }}
</div>
