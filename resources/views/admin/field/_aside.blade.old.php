<div class="col-md-4">






    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($tableList as $key=>$Table)
                <div class="panel @if($table->id == $Table->id) panel-success @else panel-default  @endif ">
                  <div class="panel-heading" role="tab" id="heading_{{$Table->name}}">
                    <h4 class="panel-title">
                      <a class="collapsed text-default" style="@if($table->id == $Table->id) color:white  @endif"  role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$Table->name}}" aria-expanded="false" aria-controls="{{$Table->name}}">
                          <div class="row">
                              <div class="col-md-2">
                                  {{-- {{dd($Table->relationship())}} --}}
                                  @if(count($Table->relationship()))
                                        <i class="fa fa-random"></i>
                                  @endif

                              </div>
                              <div class="col-md-8">
                                  @if(isset($Table->fields()->first()->id))
                                      {{$Table->name}}
                                  @else
                                    {{$Table->name}} <i class="label label-info">vide</i>
                                  @endif
                              </div>
                              <div class="col-md-2">
                                  <div class="action_table">
                                      <a href="{{route('admin.devis.{devis}.admin.table.edit',[$devis->id, $Table->id])}}" style="@if($table->id == $Table->id) color:white  @endif"><span class="fa fa-edit"></span></a>
                                  </div>

                              </div>
                          </div>

                      </a>
                    </h4>
                  </div>
                  <div id="{{$Table->name}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_{{$Table->name}}">
                    <div class="list-group">
                        @foreach($Table->fields as $Field)

                            <li class="list-group-item ">
                                <a href="{{route('admin.devis.{devis}.tables.fields.edit', [$devis->id, $Table->id, $Field])}}" >
                                    {{$Field->name}} (<i>{{$Field->type->name or ''}}</i>)
                                </a>
                            </li>
                        @endforeach
                        <a href="{{route('admin.devis.{devis}.tables.fields.create', [$devis->id, $table->id])}}" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add field</a>
                    </div>
                  </div>
                </div>


            @endforeach

            <a href="{{route('admin.devis.{devis}.admin.table.create', [$devis->id])}}"  class="btn btn-default btn-sm" ><i class="fa fa-plus"></i> Add Table</a>
</div>




</div>
