<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Delete "{{{ $priceGroup->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'deletePriceGroupForm', 'url' => 'api/price-groups/' . $priceGroup->id, 'method' => 'delete')) }}
        <p>
            Are you sure you want to delete the price group "{{{ $priceGroup->name }}}"?<br />
            The deletion will happen immediately and can't be reversed.
        </p>
    {{ Form::close() }}
</div>
<div class="modal-footer">
    {{ Form::button('Cancel', array('class' => 'btn btn-default',
      'data-dismiss' => 'modal')); }}
    {{ Form::submit('Delete price group', array('class' => 'btn btn-danger',
      'form' => 'deletePriceGroupForm')); }}
</div>
