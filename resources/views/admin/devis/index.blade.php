@extends('layouts.admin')

@section('content')



      @can('manage_larastrap')
          qsdq
      @endCan



    <input type="text" name="tes" x-webkit-speech>

    <h1>Devis</h1>

    @if(Auth::user()->id == 1)
        <a href="{{ url('admin/devis/create') }}" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i> Ajouter un devis</a>
    @endif

    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Esperence</th>
                    <th>contact</th>
                    <th>Client</th>
                    <th>amount_HT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($devis as $item)

                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ route('admin.devis.edit', $item->id) }}">{{ $item->number }}</a></td>
                    <td>{{ $item->esperence }}</td>
                    <td>{{ $item->contact_id }}</td>
                    <td>{{ $item->client->last_name or '' }}</td>
                    <td>{{ $item->amount_HT }}</td>
                    <td>

                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              @if(Auth::user()->id == 1)

                                <li><a href="{{ url('admin/devis/' . $item->id . '/edit') }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a></li>


                                <li><a href="{{route('admin.devis.edit',[$item->id])}}#pointages"><i class="fa fa-clock-o"></i> Liste des pointages</a></li>
                                <li><a href="{{route('pdf_dossier_interne',[$item->id])}}"><i class="fa fa-file-pdf-o"></i> pdf_dossier_interne</a></li>
                                <li><a href="{{route('pdf_devis',[$item->id])}}"><i class="fa fa-file-pdf-o"></i> pdf_devis</a></li>
                                <li><a href="{{route('pdf_propal',[$item->id])}}"><i class="fa fa-file-pdf-o"></i> pdf_propal</a></li>
                            <li role="separator" class="divider"></li>
                                <li>
                                    @if($item->tables()->count() > 0)
                                        <a href="{{ route('admin.devis.{devis}.tables.fields.create',[$item->id,$item->tables()->first()->id] ) }}"><i class="fa fa-database"></i> Larastrap</a>
                                    @else
                                        <a href="{{ route('admin.devis.{devis}.admin.table.create',[$item->id] ) }}"><i class="fa fa-database"></i> Larastrap - Create Tables</a>
                                    @endif
                                    <?php

                                     ?>
                                </li>
                                <li><a href="{{route('admin.run_bootstrapping',[$item->id])}}"><i class="fa fa-terminal"></i> run bootstrapping</a></li>
                            <li role="separator" class="divider"></li>
                                <li>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['admin/devis', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    <i class="fa fa-trash"></i>
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                                </li>
                            @else
                                @if($item->tables()->count() > 0)
                                    <a href="{{ route('admin.devis.{devis}.tables.fields.create',[$item->id,$item->tables()->first()->id] ) }}"><i class="fa fa-database"></i> Model Management</a>
                                @else
                                    <a href="{{ route('admin.devis.{devis}.admin.table.create',[$item->id] ) }}"><i class="fa fa-database"></i> Create Tables</a>
                                @endif
                            @endif
                          </ul>
                        </div>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $devis->render() !!} </div>
    </div>

@endsection
