 <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>


             <div class="form-group {{ $errors->has('field_type_id') ? 'has-error' : ''}}">
                {!! Form::label('field_type_id', 'Type: ', ['class' => 'control-label']) !!}
                    {!! Form::select('field_type_id', $fieldTypeList, null,['class' => 'form-control']) !!}
                    {!! $errors->first('field_type_id', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('label') ? 'has-error' : ''}}">
                {!! Form::label('label', 'label: ', ['class' => 'control-label']) !!}
                    {!! Form::text('label', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
            </div>



             <div class="form-group {{ $errors->has('placeholder') ? 'has-error' : ''}}">
                {!! Form::label('placeholder', 'placeholder: ', ['class' => 'control-label']) !!}
                    {!! Form::text('placeholder', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('placeholder', '<p class="help-block">:message</p>') !!}
            </div>

             <div class="form-group {{ $errors->has('laravel_validation_rules') ? 'has-error' : ''}}">
                {!! Form::label('laravel_validation_rules', 'laravel_validation_rules: ', ['class' => 'control-label']) !!}
                    {!! Form::textarea('laravel_validation_rules', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('laravel_validation_rules', '<p class="help-block">:message</p>') !!}
            </div>



             <div class="form-group {{ $errors->has('faker_method') ? 'has-error' : ''}}">
                {!! Form::label('faker_method', 'faker_method: ', ['class' => 'control-label']) !!}
                    {!! Form::select('faker_method', $fakerList, null,['class' => 'form-control']) !!}
                    {!! $errors->first('faker_method', '<p class="help-block">:message</p>') !!}
            </div>



            {{-- <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
                {!! Form::label('type', 'Type: ', ['class' => 'control-label']) !!}
                    {!! Form::text('type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div> --}}



            <div class="form-group {{ $errors->has('is_primary') ? 'has-error' : ''}}">
                {!! Form::label('is_primary', 'Is primary: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_primary', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_primary', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_primary', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_incrementable') ? 'has-error' : ''}}">
                {!! Form::label('is_incrementable', 'Is incrementable: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_incrementable', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_incrementable', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_incrementable', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_nullable') ? 'has-error' : ''}}">
                {!! Form::label('is_nullable', 'Is nullable: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_nullable', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_nullable', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_nullable', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_unique') ? 'has-error' : ''}}">
                {!! Form::label('is_unique', 'Is Unique: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_unique', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_unique', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_unique', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_fillable') ? 'has-error' : ''}}">
                {!! Form::label('is_fillable', 'Is Fillable: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_fillable', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_fillable', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_fillable', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_unsigned') ? 'has-error' : ''}}">
                {!! Form::label('is_unsigned', 'Is Unsigned: ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_unsigned', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_unsigned', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_unsigned', '<p class="help-block">:message</p>') !!}
            </div>


            <div class="form-group {{ $errors->has('is_index') ? 'has-error' : ''}}">
                {!! Form::label('is_index', 'Is Index (util ?): ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_index', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_index', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_index', '<p class="help-block">:message</p>') !!}
            </div>



        <hr>

            <div class="form-group {{ $errors->has('is_required') ? 'has-error' : ''}}">
                {!! Form::label('is_required', 'is_required ', ['class' => 'control-label']) !!}
                            <label class="radio-inline">{!! Form::radio('is_required', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                            <label class="radio-inline">{!! Form::radio('is_required', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_required', '<p class="help-block">:message</p>') !!}
            </div>



            <div class="form-group {{ $errors->has('is_on_index_view') ? 'has-error' : ''}}">
                {!! Form::label('is_on_index_view', 'is_on_index_view ', ['class' => 'control-label']) !!}
                            <label class="radio-inline">{!! Form::radio('is_on_index_view', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                            <label class="radio-inline">{!! Form::radio('is_on_index_view', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_index_view', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('is_on_foreign_label') ? 'has-error' : ''}}">
                {!! Form::label('is_on_foreign_label', 'is_on_foreign_label', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_on_foreign_label', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_on_foreign_label', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_foreign_label', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('is_on_edit_form') ? 'has-error' : ''}}">
                {!! Form::label('is_on_edit_form', 'is_on_edit_form', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_on_edit_form', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_on_edit_form', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_edit_form', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('is_on_create_form') ? 'has-error' : ''}}">
                {!! Form::label('is_on_create_form', 'is_on_create_form ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_on_create_form', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_on_create_form', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_create_form', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('is_on_mini_form') ? 'has-error' : ''}}">
                {!! Form::label('is_on_mini_form', 'is_on_mini_form ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_on_mini_form', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_on_mini_form', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_mini_form', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('is_on_item_view') ? 'has-error' : ''}}">
                {!! Form::label('is_on_item_view', 'is_on_item_view ', ['class' => 'control-label']) !!}
                        <label class="radio-inline">{!! Form::radio('is_on_item_view', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        <label class="radio-inline">{!! Form::radio('is_on_item_view', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                    {!! $errors->first('is_on_item_view', '<p class="help-block">:message</p>') !!}
            </div>







            <div class="form-group {{ $errors->has('order') ? 'has-error' : ''}}">
                {!! Form::label('order', 'order: ', ['class' => 'control-label']) !!}
                    {!! Form::number('order', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('order', '<p class="help-block">:message</p>') !!}
            </div>
