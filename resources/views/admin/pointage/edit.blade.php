@extends('layouts.admin')

@section('content')

    <h1>Edit Pointage</h1>
    <hr/>

    @if($mode == 'create')
        {!! Form::open(['url' => 'admin/pointage', 'class' => 'form-horizontal']) !!}
    @elseif($mode == 'edit')
        {!! Form::model($pointage, [
                'method' => 'PATCH',
                'url' => ['admin/pointage', $pointage->id],
                'class' => 'form-horizontal'
            ]) !!}
    @endif

    @include('admin/pointage.create')




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