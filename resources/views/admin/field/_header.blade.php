@if(Auth::user()->id == 1)
    <div class="well text-right">
        {{-- <a href="/{{ucfirst($devis->app_name)}}" target="_blank" class="btn btn-info"><i class="fa fa-eye"></i> Visit the site</a> --}}

        <a href="{{route('admin.devis.{devis}.generate_bootstrapping_form', [$devis->id])}}" class="btn btn-info"><i class="fa fa-gear"></i> Generate migration</a>



        {{-- @if( ! $devis->tables()->whereName('permissions')->count())

            <a href="" class="btn btn-warning"><i class="fa fa-gear"></i> Add user_permissions module</a>


        @endif --}}



  </div>
@endif

<ol class="breadcrumb">
  <li><a href="{{route('admin.devis.edit', $devis->id)}}">{{$devis->number}} - {{$devis->name}}</a></li>
  <li><a href="{{route('admin.devis.{devis}.tables.fields.index', [$devis->id, $table->id])}}">{{$table->name}}</a></li>
</ol>

<center>
    <h2><a href="{{route('admin.devis.{devis}.admin.table.edit',[$devis->id, $table->id])}}">{{$table->name}}</a></h2>
</center>
