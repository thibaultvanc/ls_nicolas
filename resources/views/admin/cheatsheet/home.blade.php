@extends('layouts.admin')

@section('content')

<div class="container">
  <h3>Cheat Sheet</h3>
  <div class="list-group">
    <a  class="list-group-item" href="{{route('dev_cheatsheet_laravel')}}"><i class="fa fa-code"></i> laravel</a>
    <a  class="list-group-item" href="{{route('dev_cheatsheet_git')}}"><i class="fa fa-code-fork"></i> Git</a>
    <a  class="list-group-item" href="{{route('dev_cheatsheet_javascript')}}"><i class="fa fa-codepen"></i> javascript</a>
    <a  class="list-group-item" href="{{route('dev_cheatsheet_HTML_CSS')}}"><i class="fa fa-html5"></i>CSS</a>
    <a  class="list-group-item" href="{{route('dev_cheatsheet_Vue')}}"><i class="fa fa-vimeo"></i> Vue</a>
  </div>

</div>


@endsection
