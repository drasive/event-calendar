<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Create Price Group</h4>
</div>
<div class="modal-body">
    {{ Form::open(array('id' => 'createPriceGroupForm', 'url' => 'api/price-groups', 'method' => 'put')) }}
        <table class="management">
            <tbody>
                <tr>
                    <td>
                        {{ Form::label('name', '*Name:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::text('name', '', array('class' => 'form-control',
                          'placeholder' => 'The type of people that belong in this price group. E.g.: Children.',
                          'required' => 'required', 'pattern' => '.{2,35}', 'title' => '2 to 35 characters')); }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::label('price', '*Price:', array('class' => 'form-label-inline')); }}
                    </td>
                    <td width="100%">
                        {{ Form::input('number', 'price', '', array('class' => 'form-control',
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
    {{ Form::submit('Create price group', array('class' => 'btn btn-success',
      'form' => 'createPriceGroupForm')); }}
</div>
