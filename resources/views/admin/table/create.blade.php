@extends('layouts.admin')

@section('content')

    <h1>Create New Table</h1>
    <hr/>


    {{-- Form::open(['url' => 'admin/table', 'class' => 'form-horizontal']) --}}

    {!! Form::open(['route' => ['admin.devis.{devis}.admin.table.store', $devis->id], 'class' => 'form-horizontal']) !!}
    
    
    @include('admin/table._form')


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