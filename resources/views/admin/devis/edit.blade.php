@extends('layouts.admin')

@section('content')

    <h1>Editer Devis</h1>
    <hr/>

    {!! Form::model($devis, [
        'method' => 'PATCH',
        'url' => ['admin/devis', $devis->id],
        'class' => 'form-horizontal'
    ]) !!}

    @include('admin/devis._form')


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
            @if($mode=='edit')
                <a href="{{route('pdf_propal', [$devis->id])}}" class="btn btn-warning">générer la propal en pdf</a>
            @endif
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

    @include('admin/devis._tables')

@endsection
