@extends('layouts.admin')

@section('content')





    @include('admin/field._header')
    <h4>Create New Field <span class="label label-info"></span></h4>
    <hr/>
    <div class="row">
        @include('admin.field._aside')
        @include('admin.field._aside_fieldList')

        <div class="col-md-4">
            {{ Form::open(array('route' => array('admin.devis.{devis}.tables.fields.store', $devis->id, $table->id), 'class' => '' )) }}


                       @include('admin/field._form')


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
        </div>
    </div>




@endsection
