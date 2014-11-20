<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Delete "{{{ $genre->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'deleteGenreForm', 'url' => 'api/genres/' . $genre->id, 'method' => 'delete')) }}
        <p>
            Are you sure you want to delete the genre "{{{ $genre->name }}}"?<br />
            The deletion will happen immediately and can't be reversed.
        </p>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    {{ Form::button('Cancel', array('class' => 'btn btn-default',
      'data-dismiss' => 'modal')); }}
    {{ Form::submit('Delete genre', array('class' => 'btn btn-danger',
      'form' => 'deleteGenreForm')); }}
</div>
