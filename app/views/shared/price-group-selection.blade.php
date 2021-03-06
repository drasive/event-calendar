@if (count($priceGroups) > 1)
    <div class="price-group-selection" role="group">
        Price Groups:
        @foreach ($priceGroups as $index => $priceGroup)
            <input type="checkbox" name="price-group[]" value="{{ $priceGroup->id }}"
              @if (in_array($priceGroup->id, $priceGroupsUsed))
                  checked="checked"
              @endif
              >&nbsp;{{{ $priceGroup->name }}} (Fr. {{{ $priceGroup->price }}})</input>&nbsp;&nbsp;
        @endforeach
    </div>
@endif
