


             {!! Form::hidden('devis_id', $devis->id) !!}

            <div class="form-group {{ $errors->has('namespace_id') ? 'has-error' : ''}}">
                {!! Form::label('namespace_id', 'Namespace: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('namespace_id', $namespaceList, null,['class' => 'form-control']) !!}
                    {!! $errors->first('namespace_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <a href="{{ url('/admin/'.$devis->id.'/namespace')}}">
              <i class="fa fa-plus"></i>
              Add namespaces
            </a>


            <div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
                {!! Form::label('model', 'Model: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('model', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            @if($mode=='edit')
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    {!! Form::label('name', 'Table name: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('is_menu') ? 'has-error' : ''}}">
                    {!! Form::label('is_menu', 'Is is menu: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <div class="radio">
                            <label >{!! Form::radio('is_menu', 1, ['class' => '', 'id'=>'is_menu_true']) !!} Oui</label>
                        </div>
                        <div class="radio">
                            <label>{!! Form::radio('is_menu', 0, ['class' => '', 'id'=>'is_menu_false']) !!} Non</label>
                        </div>
                        {!! $errors->first('is_menu', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('is_api') ? 'has-error' : ''}}">
                    {!! Form::label('is_api', 'Is is API: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <div class="radio">
                            <label >{!! Form::radio('is_api', 1, ['class' => '', 'id'=>'is_api_true']) !!} Oui</label>
                        </div>
                        <div class="radio">
                            <label>{!! Form::radio('is_api', 0, ['class' => '', 'id'=>'is_api_false']) !!} Non</label>
                        </div>
                        {!! $errors->first('is_api', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('is_settings') ? 'has-error' : ''}}">
                    {!! Form::label('is_settings', 'Is is Settings: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <div class="radio">
                            <label >{!! Form::radio('is_settings', 1, ['class' => '', 'id'=>'is_settings_true']) !!} Oui</label>
                        </div>
                        <div class="radio">
                            <label>{!! Form::radio('is_settings', 0, ['class' => '', 'id'=>'is_settings_false']) !!} Non</label>
                        </div>
                        {!! $errors->first('is_settings', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


            @endif
