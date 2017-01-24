@extends('layouts.admin')

@section('content')
  <div class="container">
    <h3>Tools</h3>
    <div class="list-group">
      <a  class="list-group-item" href="{{route('programing_tools.boostrapping')}}"><i class="fa fa-code"></i> bootstrapping</a>
      <a  class="list-group-item" href="{{route('programing_tools.json2vuejs')}}"><i class="fa fa-code"></i> Json to html (vue)</a>

    </div>

  </div>


@endsection
