@extends('layouts.admin')

@section('content')

    <h1>Edit Task</h1>
    <hr/>

    @if($mode == 'create')
        {!! Form::open(['url' => 'admin/task', 'class' => 'form-horizontal']) !!}
    @elseif($mode == 'edit')
        {!! Form::model($task, [
                'method' => 'PATCH',
                'url' => ['admin/task', $task->id],
                'class' => 'form-horizontal'
            ]) !!}
    @endif

    @include('admin/task.create')




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