
@section('header_scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css" rel="stylesheet" />
@endsection

.




            <div class="form-group {{ $errors->has('projectList') ? 'has-error' : ''}}">
                {!! Form::label('projectList', 'Projects: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('projectList[]', $project_list,$selectedProjects, ['class' => 'form-control select2', 'id'=>'projectList', 'multiple']) !!}
                    {!! $errors->first('projectList', '<p class="help-block">:message</p>') !!}
                </div>
            </div>




            <div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
                {!! Form::label('number', 'Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('validated_by_contact') ? 'has-error' : ''}}">
                {!! Form::label('validated_by_contact', 'Validated By Contact: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('validated_by_contact',$contacts, null, ['class' => 'form-control select2', 'id'=>'contactList']) !!}
                    {!! $errors->first('validated_by_contact', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
                {!! Form::label('client_id', 'Client Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('client_id',$clients, null, ['class' => 'form-control select2', 'id'=>'clientList']) !!}
                    {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
                {!! Form::label('content', 'Content: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('amount_HT') ? 'has-error' : ''}}">
                {!! Form::label('amount_HT', 'Amount Ht: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amount_HT', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('amount_HT', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('amount_TTC') ? 'has-error' : ''}}">
                {!! Form::label('amount_TTC', 'Amount Ttc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('amount_TTC', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('amount_TTC', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('inputed_month') ? 'has-error' : ''}}">
                {!! Form::label('inputed_month', 'Inputed Month: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('inputed_month', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('inputed_month', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



            <div class="form-group {{ $errors->has('is_registered') ? 'has-error' : ''}}">
                {!! Form::label('is_registered', 'Is Registered: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::checkbox('is_registered', 1,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('is_registered', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('is_fully_paid') ? 'has-error' : ''}}">
                {!! Form::label('is_fully_paid', 'Is Fully Paid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::checkbox('is_fully_paid', 1,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('is_fully_paid', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



            <div class="form-group {{ $errors->has('gg_drive_link_devis') ? 'has-error' : ''}}">
                {!! Form::label('gg_drive_link_devis', 'Gg Drive Link Devis: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('gg_drive_link_devis', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('gg_drive_link_devis', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(function(){

            $('.select2').select2()
            // $('#projectList').select2()
            // $('#contactList').select2()
            // $('#clientList').select2()

            $( "input[type=date]" ).datepicker();

        })
    </script>
@endsection
