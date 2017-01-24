@extends('layouts.admin')

@section('content')

    <h1>Edit Contact</h1>
    <hr/>

    {!! Form::model($contact, [
        'method' => 'PATCH',
        'url' => ['admin/contact', $contact->id],
        'class' => 'form-horizontal'
    ]) !!}

                 @include('admin.contact._form')


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