
@extends('layouts.admin')

@section('content')
    <h2>Seeting for bootstrapping</h2>
        {!! Form::open(['route' => ['admin.devis.{devis}.generate_bootstrapping',$devis->id], 'files' => false ,'class' => 'form-horizontal ']) !!}




                        <div class="form-group {{ $errors->has('insidee') ? 'has-error' : ''}}">
                            {!! Form::label('insidee', 'where do you want to generate the files for the app: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label >{!! Form::radio('export_mode', 'here',true, ['class' => '', 'id'=>'insidee_true']) !!} Here, in this App</label>
                                </div>
                                <div class="radio">
                                    <label>{!! Form::radio('export_mode', 'zip',false, ['class' => '', 'id'=>'insidee_false']) !!} Generate zip</label>
                                </div>
                                {!! $errors->first('insidee', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

<hr>

                          <div class="form-group {{ $errors->has('navigation_mode') ? 'has-error' : ''}}">
                              {!! Form::label('navigation_mode', 'What type of app do you want to generate ? ', ['class' => 'col-sm-3 control-label']) !!}
                              <div class="col-sm-6">
                                  <div class="radio">
                                      <label >{!! Form::radio('navigation_mode', 'vue_router',false, ['class' => '', 'id'=>'']) !!} Vue Router</label>
                                  </div>
                                  <div class="radio">
                                      <label>{!! Form::radio('navigation_mode', 'laravel_vue', true,['class' => '', 'id'=>'']) !!} Laravel + Vue components</label>
                                  </div>
                                  <div class="radio">
                                      <label>{!! Form::radio('navigation_mode', 'laravel_alone', false,['class' => '', 'id'=>'']) !!} Laravel alone</label>
                                  </div>
                                  {!! $errors->first('navigation_mode', '<p class="help-block">:message</p>') !!}
                              </div>
                          </div>


                          <div class="form-group {{ $errors->has('use_zoho_package') ? 'has-error' : ''}}">
                              {!! Form::label('use_zoho_package', 'Do you want to add Zoho crm Package ? ', ['class' => 'col-sm-3 control-label']) !!}

                              <div class="col-sm-6">
                                  <div class="radio">
                                      <label >{!! Form::radio('use_zoho_package', 1, $devis->is_app_integrates_zoho_package, ['class' => '', 'id'=>'']) !!} Oui, utiliser Zoho</label>
                                  </div>
                                  <div class="radio">
                                      <label>{!! Form::radio('use_zoho_package', 0, !$devis->is_app_integrates_zoho_package,['class' => '', 'id'=>'']) !!} Non</label>
                                  </div>

                                  {!! $errors->first('use_zoho_package', '<p class="help-block">:message</p>') !!}
                              </div>
                          </div>


                          <div class="form-group {{ $errors->has('zoho_package_namespace_id') ? 'has-error' : ''}}">
                              {!! Form::label('zoho_package_namespace_id', 'In wich namespace do we put the Zoho classes ? ', ['class' => 'col-sm-3 control-label']) !!}

                              <div class="col-sm-6">
                                  <div class="input">
                                      <label >{!! Form::text('zoho_package_namespace_id', 'Admin', ['class' => '', 'id'=>'']) !!} Zoho Namespace</label>
                                  </div>

                                  Ce namespace doit Exister !
                                  {!! $errors->first('zoho_package_namespace_id', '<p class="help-block">:message</p>') !!}
                              </div>
                          </div>


                <hr>




                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <center>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

                </center>


        {!! Form::close() !!}
@endsection


@section('footer_scripts')

@stop
