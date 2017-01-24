    

    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}} type">
        {!! Form::label('type', 'Type: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            <label class="checkbox-inline particulier">
            pariculier    
            {!! Form::radio('type', 'particulier'); !!}
            </label>
            <label class="checkbox-inline pro">
            Pro    
            {!! Form::radio('type', 'pro'); !!}
            </label>
            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
        </div>
    </div>





    <div class="row proPart" style="display: none">
            <div class="col-md-6" >

                <div class="pro-form">
                    <div class="form-group {{ $errors->has('firm_name') ? 'has-error' : ''}}">
                        {!! Form::label('firm_name', 'firm_name: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('firm_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('firm_name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('firm_statut') ? 'has-error' : ''}}">
                        {!! Form::label('firm_statut', 'firm_statut', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('firm_statut', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('firm_statut', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('responsable') ? 'has-error' : ''}}">
                        {!! Form::label('responsable', 'Responsable: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('responsable', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="particulier-form">
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
                </div>

            </div>
        </div>    




  





            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
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






            @section('footer_scripts')
            <script type="text/javascript">
                $(function(){
                    var type = '{{$client->type or ''}}'

                    if (type=='particulier') {
                        showParticulier()
                    }
                    else if(type=='pro'){
                        showPro()
                    }

                    $('label.particulier').click(function(){
                        showParticulier()
                    })
                    $('label.pro').click(function(){
                        showPro()
                    })
                })


                function showParticulier() {
                    $('.proPart').show()
                    $('.particulier-form').show()
                    $('.pro-form').hide()

                    $(".pro-form input").val('')
                }

                function showPro(){
                    $('.proPart').show()
                    $('.pro-form').show()
                    $('.particulier-form').hide()
                    $(".particulier-form input").val('')
                }

            </script>
            @stop