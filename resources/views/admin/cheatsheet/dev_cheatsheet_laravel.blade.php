@extends('layouts.admin')

@section('content')

<div class="container">

  <h1>Laravel</h1>
  <hr>
  <br>

  <div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources/views/admin/cheatsheet/dev_cheatsheet_laravel</div>

  <hr>
  <?php
  //$open = '{{'; // marche pas
  $close = '}}';
  ?>


  <h2>select list</h2>
  <pre>
      $contacts = Contact::select('id',  DB::raw('CONCAT(first_name, " ", last_name) as full_name'))->orderBy('last_name', 'asc')->lists('full_name', 'id');
       - ou -
      $clients = Client::lists('email', 'id');
  </pre>




  <h2>asset for site</h2>
  <pre>{{ '{{' }} asset('/') {{$close}}  </pre>


  <hr>
  <h2>bug</h2>
  <p>noter les bug en commentaire :</p>
  <ul>
    <li>#bug#</li>
    <li>#V2#</li>
  </ul>


  <br>
  <hr>
  <br>


  <h2>Crud generator</h2>
  <pre>
      php artisan crud:generate Pointage --fields=" date:date, devis_id:integer, dbase:string ,minutes:integer, type:string" --namespace Admin --route-group=admin --view-path=admin
  </pre>
  <a href="https://github.com/appzcoder/crud-generator">Liste des fields</a>

  <br>
  <hr>
  <br>


  <h2>Flash</h2>
  <div class="row">
    <div class="col-md-6">

      <h3>config  PHP </h3>
      <pre>Flash::success('item added successfully')</pre>
    </div>
    <div class="col-md-6">

      <h3>config  Javascript </h3>
      <p>package : <a href="https://github.com/andywer/laravel-js-localization">andywer/laravel-js-localization</a></p>
      <pre> $.notify({ message: 'qsdqsdqsd'},{ type: 'success'});</pre>
    </div>
  </div>




  <hr>
  <h2>Routes</h2>
  <pre>Route::resource('admin/facture', 'Admin\FactureController');</pre>
  <pre>Route::get('admin/devis/{id}/pdf_devis', ['as'=>'pdf_devis', 'uses'=>'AdminDevisController@pdf_devis'] );</pre>
  <pre>Route::put('api/fields/{field}', function(AppField $field){
      //dd($field,Request::all());
      if($field->update(Request::all())){
        return 'ok';
      };
    });</pre>


  <hr>
  <h2>Config</h2>
  <div class="row">
    <div class="col-md-6">

      <h3>config  PHP </h3>
      <pre>{ { Config::get('inlinr.config.site') {{$close}}</pre>
    </div>
    <div class="col-md-6">

      <h3>config  Javascript </h3>
      <p>package : <a href="https://github.com/andywer/laravel-js-localization">andywer/laravel-js-localization</a></p>
      <ul>
        <li>config/js-localisation => ajouter la key a "config"  </li>
        <li><pre>php artisan js-localization:refresh</pre></li>
      </ul>
      <p>pour consulter l'adresse ou sont les config : http://{SITE}.com/js-localization/config</p>

      <p>Pour l'utiliser (javascript):</p>
      <pre>document.write( Config.get('inlinr.preferences.span') );</pre>
    </div>
  </div>



  <hr>
  <h2>LANG </h2>
  <div class="row">
    <div class="col-md-6">

        <h3>PHP</h3>
        <pre>Lang::get('inlinr/page.sucess_created');</pre>
        <br>- OU - <br>
        <pre>@lang('inlinr/page.sucess_created')</pre>
    </div>
    <div class="col-md-6">

        <h3>javascript</h3>
        <p>package : <a href="https://github.com/andywer/laravel-js-localization">andywer/laravel-js-localization</a></p>
        <p><b>Ajout</b></p>
        <ul>
          <li>config/js-localisation => ajouter la key a "config"  </li>
          <li><pre>php artisan js-localization:refresh</pre></li>
        </ul>
        <p>pour consulter l'adresse ou sont les traductions : http://{SITE}.com/js-localization/messages</p><br>
        <p><b>Ajout</b></p>
        <pre>document.write( Lang.get('inlinr/page.deleteDescription') );</pre><br><br>
        <pre>avec variable : Lang.get('inlinr/block.add', {'nb':'1'})   ///   'add'   => 'Add <b>:nb</b> block',</pre>

    </div>
  </div>




  <hr>
  <h2>LOGS</h2>
  <pre>
      cd -->to project
      cd /storage/logs
      tail -f laravel.log

  </pre>





  <hr>
  <h2>token</h2>
  pour JS : <pre>_token: '<?= csrf_token() ?>',  </pre><br><br>
  pour formulaires : <pre>Form::token()</pre>




  <hr>
  <h2>response - notify</h2>
  <h4>PHP (appelé en ajax)</h4>
  <pre>

  ---<br>
  return response(['msg' => $message, 'status' => 'error', 'ref'=>'no_contact_provider_selected']);</pre>
  <h4>JS - VUE</h4>
  <div class="row">
    <div class="col-md-6">
  declaration dans data :
  <pre>
    alert : {show:false,type:'', important:true ,content:'' },
  </pre>

      //method (ici ready)
      <pre>


                        this.$http.get(this.route_list).then(function (response) {

                              if (response.data.status == 'error') {
                                this.alert = {show:true,type:'error',important:true,content:response.data.msg }
                                this.displayComponent = false
                                if (response.data.ref == 'no_contact_provider_selected') {
                                  this.displaySelectProvider = true
                                }
                              }

                              this.fieldList = response.data
                              this.mainLoader.show=false;


                            }, function (response) {

                                // error callback
                            });


      </pre>
    </div>
    <div class="col-md-6">
      <pre>
        //template :


        //data :
        alert : {show:false,type:'',content:'' },
      </pre>
    </div>
  </div>

  <h4>JS - jquery notify</h4>
  <pre>$.notify({ message: response.msg},{ type: response.status});</pre>





  <hr>
  <h2>Dates</h2>
  <pre>
    if (new DateTime < new DateTime('2016-01-22 23:59:59')) { //->modify('+1 day')
      ---<div class="alert" <i class="fa fa-exclamation-circle fa-2x"></i> message a afficher jusqu a une certaine date </div>---
    }
    </pre>

  <hr>
  <h2>Modèles</h2>



      <h4>update</h4>
      <p>ajouter FILLABLES</p>
      <pre>
            $field = AppField::find(5);
            $field->update(Request::all());
      </pre>

      <h4>save</h4>
      <pre>
            $field = AppField::find(5);

            $field-><i>xxxxx</i> = $request-><i>xxxxx</i>;
            $field-><i>yyyyy</i> = $request-><i>yyyyy</i>;
            $field-><i>zzzzz</i> = $request-><i>zzzzz</i>;

            $field->save();
      </pre>

      <h4>Créer une liste : </h4>

  <p>créer une liste déroulante à partir d'un modèle ou radio</p>
    <pre>$items = Items::all(['id', 'name']); </pre><br>
    ou<br>
    <pre>$items = Items::lists('name', 'id');</pre><br>
    ou<br>
    <pre>$items = Items::where('active', true)->orderBy('name')->lists('name', 'id'); </pre><br>


  <hr>
  <h2>Migrations</h2>
  <pre>
    php artisan migrate:refresh --seed
  </pre>
  <br><br>

  <hr>
  <h2>Seeds</h2>
  <pre>
    DB::table('providers')->insert([
                                      'name' => 'office365',
                                      'is_task_manager'=>1,
                                      'is_contact_manager'=>1,
                                      'is_mail_manager'=>1,
                                      'is_calendar_manager'=>1,
                                      'created_at'=>date("Y-m-d H:i:s")
                                 ]);
  </pre>
  <br><br>


  <br>
  <hr>
  <h2>seed with factory</h2>
  <p>Dans le fichier seed</p>
  <pre>
  public function run()
  {
  <b>
      factory(AppUser::class, 50)->create()->each(function($u) {
          $u->posts()->save(factory(AppPost::class)->make());
      });
  </b>
  }
  </pre>


  <h2>Facotry & Faker</h2>

    lien Github :
    <a href="https://github.com/fzaninotto/Faker">fzaninotto/Faker</a>

    <p>Pour créer des Fake dans la bonne lang (à mettre au dessus du return) : <pre>$faker = FakerFactory::create('fr_FR');</pre> </p>
    <i>ou ('fr_BE')...</i><br><br>
  <pre>
      $faker = FakerFactory::create('fr_BE');
        return [
            'surname' => $faker->firstName,
            'name' => $faker->lastName,
            'email' => $faker->email,
            'birthdate'=> $faker->dateTimeThisCentury,
            'password' => bcrypt('organit'),
            'remember_token' => str_random(10),
            'phone'=>$faker->phoneNumber,
            'address' => $faker->streetAddress,
            'zip' => rand(00000,99999),
            'city' => $faker->city,
            'country' => array_rand(['Belgique']),
            'country'=>$faker->country,
        ];
  </pre>
  <br>
  <pre>factory(AppUser::class, 5)->create();</pre>
  <p><i>L'ideal est de l'excecuter dans PHP TINKER</i></p>


  <h2>Request</h2>
  <p>Ajouter un élément à request</p>
  <pre>
    $request->request->add(['logo_extension' => $extension]);
  </pre>
  <p>enlever un élément à request</p>
  <pre>
    $request->remove("Contacts");
  </pre>


  <h2>upload</h2>
  <h5>html</h5>
  <pre>
    <form id="link" name="link" value="categories" method="POST"  @submit.prevent="prevent()" enctype="multipart/form-data">
             <div class="form-group">
                 <label class="col-sm-2 control-label" for="name">
                     Category Name:
                 </label>
                 <input type="text" name="name" id="name" class="form-control" v-model="newInput.name">
             </div>
             <div class="form-group">
                 <label for="image" class="col-sm-2 control-label">
                     Category Image:
                 </label>
                 <img src="#" v-show="newInput.image" class="organisation_logo img-thumbnail" style="height:150px" />


                 <input type="file" name="image" id="image" class="form-control" v-model="newInput.image">
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-primary" @click.stop.prevent="onSubmitForm">
                     Submit
                 </button>
             </div>
         </form>
  </pre>
  <h5>php</h5>
  <pre>
      $files = glob(base_path() . '/public/uploads/clients/'.$client_id.'.*'); // get all file names
      foreach($files as $file){ // iterate files
        if(is_file($file))
          unlink($file); // delete file
      }


      $imageName = $request->file('image')->getClientOriginalName();
      $extension = File::extension($imageName);

        $request->file('image')->move(
            base_path() . '/public/uploads/clients', $client_id.'.'.$extension
        );

        $request->request->add(['logo_extension' => $extension]);

        $request->user()->client()->update($request->all());
  </pre>



  <h2>Enchainnement de requetes</h2>
  <pre>

    public function index(Request $request)
    {
       $bug = (new Bug)->newQuery();
       if ($request->has('user')) {
            $bug->where('user_id', $request->user);
       }
       ... add more

        return $bug->get();
    }


  </pre>



  <h2>Excel</h2>
  <pre>
      Excel::create('Filename', function($excel) {

          // Set the title
          //$excel->setTitle('Our new awesome title');

          // Chain the setters
          $excel->setCreator('Maatwebsite');

          // Call them separately
          //$excel->setDescription('A demonstration to change the file properties');

          $excel->sheet('Sheetname1', function($sheet) {

                  $sheet->setOrientation('landscape');

                  //$sheet->fromArray(array(
                    //         array('data1', 'data2'),
                      //       array('data3', 'data4')
                       //  ));

                  $model = AppUser::all();
                  $sheet->fromModel($model);

                  $sheet->setStyle(array(
                      'font' => array(
                          'name'      =>  'Calibri',
                          'size'      =>  15,
                          'bold'      =>  true,
                      )
                  ));

                  $sheet->mergeCells('A1:E1');

                  $sheet->cells('A7:E7', function($cells) {

                      // manipulate the range of cells
                    $cells->setBackground('#red');
                  });
          });

      })->download('xlsx');
  </pre>



  <pre>
      Ajouter Recap sur les migrations
              (les pb que j'ai eu)


      Ajouter
              Expliaction de comment utiliser les CSS et GULP (affectations par space)


      </pre>

  </div>
    @endsection
