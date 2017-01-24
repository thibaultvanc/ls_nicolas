@extends('layouts.admin')

@section('header_scripts')
    <style>
    .action_table{
            /*background-color: transparent;
            position:relative;
            top:-30px*/
    }
    </style>
@endsection

@section('content')
    @include('admin/field._header')
    <h5>Edit Field</h5>
    <hr>

    <div class="row">
        @include('admin.field._aside')
        @include('admin.field._aside_fieldList')

        <div class="col-md-4">
            {!! Form::model($field, [
                'method' => 'PATCH',
                'route' => ['admin.devis.{devis}.tables.fields.update', $devis->id,$table->id,$field->id],
                'class' => 'form-horizontal'
            ]) !!}
{{-- {{ Form::open(array('route' => array('admin.devis.{devis}.tables.fields.store', $devis->id, $table->id), 'class' => 'form-horizontal' )) }} --}}
            @include('admin/field._form')


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
        </div>
    </div>

@endsection
