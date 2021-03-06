<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit "{{{ $priceGroup->name }}}"</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'editPriceGroupForm', 'url' => 'api/price-groups/' . $priceGroup->id, 'method' => 'post')) }}
        <table class="management">
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', '*Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', $priceGroup->name, array('class' => 'form-control',
                          'placeholder' => 'The type of people that belong in this price group. E.g.: Children.',
                          'required' => 'required', 'pattern' => '.{2,35}', 'maxlength' => '35', 'title' => '2 to 35 characters')); }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::label('price', '*Price:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::input('number', 'price', $priceGroup->price, array('class' => 'form-control',
                          'placeholder' => 'The admission charge for this group of people. E.g.: 19,95',
                          'min' => '0', 'max' => '999999,99', 'step' => '0.05',
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
      'form' => 'editPriceGroupForm')); }}
</div>
