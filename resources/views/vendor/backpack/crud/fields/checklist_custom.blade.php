<!-- select2 -->
<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')
    <?php
        $entity_model = $crud->getModel();
        $field['value'] = call_user_func($field['value'], $crud->entry) ?? [];
        $options = $field['options'] ?? []
    ?>

    <div class="row">
        @foreach ($options as $key => $value)
            <div class="col-sm-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"
                               name="{{ $field['name'] }}[]"
                               value="{{ $key }}"

                               @if(isset($field['value']) && in_array($key, $field['value']))
                                    checked = "checked"
                                @endif > {!! $value !!}
                    </label>
                </div>
            </div>
        @endforeach
    </div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>
