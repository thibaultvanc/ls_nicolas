
<div class="row">
    <div class="col-md-8">
        <h4>sidebar_list</h4>
    </div>
    <div class="col-md-4">
        <button class="btn btn-sm pull-right" type="button" data-toggle="collapse" data-target="#modules_sidebar_list" aria-expanded="false" aria-controls="modules_sidebar_list">
         <i class="fa fa-code"></i> Voir le code
        </button>
    </div>
</div>


@include('admin.cheatsheet.modules.sidebar_list.code', ['mode'=>'exe'])







<div class="collapse" id="modules_sidebar_list">
  <div class="well">
      <xmp>@include('admin.cheatsheet.modules.sidebar_list.code', ['mode'=>'read'])</xmp>



  </div>
</div>
