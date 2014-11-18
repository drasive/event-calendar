<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit Genre</h4>
</div>
<div class="modal-body">
    <form id="editGenre" action="genres/update/{{ $genre->id }}" method="post">
        <table>
            <td><label class="form-label-inline" for="name">Name:&nbsp;</label></td>
            <td width="100%"><input id="name" name="name" class="form-control"
              type="text" placeholder="The name of the genre" value="{{ $genre->name }}" autofocus></td>
        </table>
	</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    <button id="submit" type="submit" class="btn btn-primary" form="editGenre">Save changes</button>
</div>
