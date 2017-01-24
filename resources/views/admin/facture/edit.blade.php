@extends('layouts.admin')

@section('content')

    <h1>Edit Facture</h1>
    <hr/>

    {!! Form::model($facture, [
        'method' => 'PATCH',
        'url' => ['admin/facture', $facture->id],
        'class' => 'form-horizontal'
    ]) !!}



    @include('admin.facture._form')

<!--
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
                    {!! Form::number('validated_by_contact', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('validated_by_contact', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
                {!! Form::label('client_id', 'Client Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('client_id', null, ['class' => 'form-control']) !!}
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
                    {!! Form::number('is_registered', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('is_registered', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('is_fully_paid') ? 'has-error' : ''}}">
                {!! Form::label('is_fully_paid', 'Is Fully Paid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('is_fully_paid', null, ['class' => 'form-control']) !!}
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
    -->

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection