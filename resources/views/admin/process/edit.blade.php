@extends('layouts.admin')

@section('content')

    <h1>Edit Process</h1>
    <hr/>

    @if($mode == 'create')
        {!! Form::open(['url' => 'admin/process', 'class' => 'form-horizontal']) !!}
    @elseif($mode == 'edit')
        {!! Form::model($process, [
                'method' => 'PATCH',
                'url' => ['admin/process', $process->id],
                'class' => 'form-horizontal'
            ]) !!}
    @endif

    @include('admin/process.create')




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