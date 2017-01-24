@extends('layouts.admin')

@section('content')



{{-- {{dd($errors)}} --}}


    <h1>Create New Namespace</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/'.$devis->id.'/namespace', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dbase_code') ? 'has-error' : ''}}">
                {!! Form::label('theme_id', 'Theme: ',['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                      {!! Form::select('theme_id', $themeList,null, ['class' => 'form-control', 'placeholder'=>'Choose the theme']) !!}
                    {{-- {!! $errors->first('dbase_code', '<p class="help-block">:message</p>') !!} --}}
                </div>
            </div>

            <input type="hidden" name="devis_id" value="{{$devis->id}}">



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
