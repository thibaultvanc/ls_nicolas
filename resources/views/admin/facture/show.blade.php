@extends('layouts.admin')

@section('content')

    <h1>Facture</h1>


     <crud table_id="{{$facture->id}}" route_list="/api/facture" route_action="/api/facture" ></crud>    




    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Number</th><th>Date</th><th>Validated By Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $facture->id }}</td> <td> {{ $facture->number }} </td><td> {{ $facture->date }} </td><td> {{ $facture->validated_by_contact }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $facture->id }}
@endsection