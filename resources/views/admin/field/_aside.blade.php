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
                                  @if ($Table->is_pivot == 1)
                                    <i class="fa fa-random"></i>

                                  @endif
                                  @if(count($Table->relationship()))
                                        <i class="fa fa-arrow-right"></i>
                                  @endif

                              </div>
                              <div class="col-md-6">
                                  @if(isset($Table->fields()->first()->id))
                                      {{$Table->name}}
                                  @else
                                    {{$Table->name}} <i class="label label-info">vide</i>
                                  @endif
                              </div>
                              <div class="col-md-2">

                                @if($Table->hasSeeder())
                                    seeder

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
                    <div class="panel-default">

                        {{-- @foreach($Table->relationship() as $relation)
                            @if(in_array($relation['laravel_name'] , ['MorphedByMany', 'belongsTo']))
                                <li class="list-group-item">
                                    <b>{{$relation['laravel_name']}}</b>
                                    <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $relation['to_model_id']])}}">
                                        {{$relation['to_model']}}
                                    </a>
                                </li>

                            @elseif(in_array($relation['laravel_name'] , ['hasMany', 'MorphToMany', 'belongsToMany']))
                                    <li class="list-group-item">
                                        <b>{{$relation['laravel_name']}}</b>
                                        <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $relation['to_model_id']])}}">
                                            {{$relation['to_model']}}
                                        </a>
                                    </li>

                            @endif
                        @endforeach --}}

                    </div>
                  </div>
                </div>


            @endforeach

            <a href="{{route('admin.devis.{devis}.admin.table.create', [$devis->id])}}"  class="btn btn-default btn-sm" ><i class="fa fa-plus"></i> Add Table</a>
</div>




</div>
