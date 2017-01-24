   
   @section('header_scripts')
       <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
       <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css" rel="stylesheet" />
   @endsection            

   .
 


     <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                {!! Form::label('first_name', 'First Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                {!! Form::label('last_name', 'Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           <!-- 
            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
                {!! Form::label('client_id', 'Client Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('client_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>-->

            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
                {!! Form::label('client_id', 'Client Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('client_id',$clients, null, ['class' => 'form-control', 'id'=>'clientList']) !!}
                    {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    <a  class="btn btn-success btn-sm" href="{{route('admin.client.create')}}" target="_blank">Créer un noubeau Client</a>
                </div>
            </div>





            <div class="form-group {{ $errors->has('is_commercial') ? 'has-error' : ''}}">
                {!! Form::label('is_commercial', 'Is Commercial: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('is_commercial', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('is_commercial', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('is_commercial', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            


            <div class="form-group {{ $errors->has('comm_1') ? 'has-error' : ''}}">
                {!! Form::label('comm_1', 'Comm 1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('comm_1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('comm_1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('comm_2') ? 'has-error' : ''}}">
                {!! Form::label('comm_2', 'Comm 2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('comm_2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('comm_2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                {!! Form::label('phone', 'Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone2') ? 'has-error' : ''}}">
                {!! Form::label('phone2', 'Phone2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                {!! Form::label('address', 'Address: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('zip') ? 'has-error' : ''}}">
                {!! Form::label('zip', 'Zip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
                {!! Form::label('city', 'City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {!! Form::label('country', 'Country: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('country', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('remember_token') ? 'has-error' : ''}}">
                {!! Form::label('remember_token', 'Remember Token: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('remember_token', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('is_admin') ? 'has-error' : ''}}">
                    {!! Form::label('is_admin', 'Is Admin: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <div class="checkbox">
                            <label>{!! Form::radio('is_admin', '1') !!} Yes</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('is_admin', '0', true) !!} No</label>
                        </div>
                           {!! $errors->first('is_admin', '<p class="help-block">:message</p>') !!}
                    </div>
            </div>







           

         


@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(function(){


            $('select').select2({
                   tags:false,
                   ajax:{
                             dataType:'json',
                             url: '{{route('ajax_seed_client')}}', 
                             delay:250,
                             /* data :function(params){
                                return{
                                    q: params.term
                                }
                             },*/
                             processResults: function(data){
                                return {results: data}
                             }
                             
                        }
            });
                    





            $( "input[type=date]" ).datepicker();






            
            
            
            
        })
    </script>
@endsection  