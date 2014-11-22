<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Create Genre</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'createGenreForm', 'url' => 'api/genres', 'method' => 'put')) }}
        <table class="management">
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', 'Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', '', array('class' => 'form-control',
                          'placeholder' => 'The appellation of this genre. E.g.: Concert',
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
    {{ Form::submit('Create genre', array('class' => 'btn btn-success',
      'form' => 'createGenreForm')); }}
</div>
