
<div class="col-md-4">
    <h3>Fields</h3>
    <div class="list-group">
        @foreach($fieldList as $Field)

            <li class="list-group-item ">
                @if($field->id == $Field->id)
                        {{$Field->name}} (<i>{{$Field->type->name or ''}}</i>)
                        <i class="fa fa-arrow-right"></i>
                @else
                    <a href="{{route('admin.devis.{devis}.tables.fields.edit', [$devis->id, $table->id, $Field])}}" >
                        {{$Field->name}} (<i>{{$Field->type->name or ''}}</i>)
                    </a>
                 @endif
            </li>
        @endforeach
        <a href="{{route('admin.devis.{devis}.tables.fields.create', [$devis->id, $table->id])}}">Add field</a>
    </div>
</div>
