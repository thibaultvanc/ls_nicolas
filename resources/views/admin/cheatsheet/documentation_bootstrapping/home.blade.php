




            resources/views/admin/cheatsheet/modules/horizontal_accordion/code.blade.php
            resourcesiewsadmincheatsheethorizontal_accordiondoc.blade.php


///////////////




<h4>module.js</h4>
<a href="">Doc vendor en ligne</a>




@include('admin.cheatsheet.module.horizontal_accordion.code', ['mode'=>'exe'])





<button class="btn btn-sm pull-right" type="button" data-toggle="collapse" data-target="#module_horizontal_accordion" aria-expanded="false" aria-controls="module_horizontal_accordion">
 <i class="fa fa-code"></i> Voir le code
</button>

<div class="collapse" id="module_horizontal_accordion">
  <div class="well">
      <xmp>@include('admin.cheatsheet.javascript.module.code', ['mode'=>'read'])</xmp>



  </div>
</div>





@extends('layouts.admin')

@section('content')



    <div class="row">

      <!-- Navigation Buttons -->
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked" id="myTabs">
          <li class="active"><a href="#home" data-toggle="pill">Home</a></li>
          <li><a href="#profile" data-toggle="pill">Profile</a></li>
          <li><a href="#messages" data-toggle="pill">Messages</a></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane active" id="home">Home</div>
          <div class="tab-pane" id="profile">Profile</div>
          <div class="tab-pane" id="messages">Messages</div>
        </div>
      </div>

    </div>





<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#running_bootstrapping" aria-controls="running_bootstrapping" role="tab" data-toggle="tab">running_bootstrapping</a></li>
    <li role="presentation"><a href="#laravel_packages" aria-controls="laravel_packages" role="tab" data-toggle="tab">laravel_packages</a></li>
    <li role="presentation"><a href="#vue_components" aria-controls="vue_components" role="tab" data-toggle="tab">vue_components</a></li>
    <li role="presentation"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">general</a></li>
    <li role="presentation"><a href="#composants" aria-controls="composants" role="tab" data-toggle="tab">composants</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="running_bootstrapping">
        Home documentation_bootstrapping

        <bootstrapping></bootstrapping>

    </div>
    <div role="tabpanel" class="tab-pane" id="laravel_packages">
        <br><br>
        <div class="row">
            <div class="col-md-2">

                <div class="list-group">
                    <a class="list-group-item active" >Packages</a>
                    <a class="list-group-item">features</a>
                    <a class="list-group-item">cheatsheet</a>
                </div>
            </div>
            <div class="col-md-10">


            </div>
        </div>


        <div class="row">
            <!-- tabs left -->
             <div class="tabbable ">
               <ul class="nav nav-tabs">
                 <li><a href="#packages" data-toggle="tab">Packages</a></li>
                 <li class="active"><a href="#features" data-toggle="tab">features</a></li>
                 <li><a href="#cheatsheet" data-toggle="tab">cheatsheet</a></li>
               </ul>
               <div class="tab-content">

                    <div class="tab-pane active" id="packages">

                        <pre>
                            Flash::
                            et alertes avec value

                            HTML::
                            pour les formulaires principalement

                        </pre>

                    </div>
                    <div class="tab-pane" id="features">
                            <pre>
                                Gestion des permissions
                                ---> reccuperer le script sur crm

                                gestion des langues






                                Comment activer le social login // comment Ajouter





                                Comment faire fonctionner la page contact par default

                                </pre>



                    </div>
                    <div class="tab-pane" id="cheatsheet">
                        <div style="width:auto">
                            @include('admin.cheatsheet.dev_cheatsheet_laravel')

                        </div>

                    </div>


               </div>
             </div>
             <!-- /tabs -->
            <div class="col-md-10"></div>
        </div>


    </div>

    <div role="tabpanel" class="tab-pane" id="vue_components">
        @include('admin.cheatsheet.module.horizontal_accordion.doc')
        <pre>
                    gestions des composants vue et explication 1 par 1
                    -> mettre des exemple en ligne fonctionnel (visibles par les utilisateurs et clients)
            </pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="general">
                    <pre>
                        gestion des bugs
                        ---> reccuperer le script sur crm


                        Explication pour les themes
                        -> mettre un PRE pour afficher le MODELE


                        comment utiliser les spaces. par
                        Ajoter des spaces (Ajouter un midleware)


                        Comment utiliser les routes // routes.php   // api.php

                        comment ecrir les controllers pour API




                        Comment mettre le site sur forge
                    </pre>



    </div>
    <div role="tabpanel" class="tab-pane" id="composants">


            <h2>test</h2>
            @include('admin.cheatsheet.javascript.test.doc')

            <h2>clipboard</h2>
            @include('admin.cheatsheet.javascript.clipboard.doc')


    </div>

  </div>

</div>







@endsection
