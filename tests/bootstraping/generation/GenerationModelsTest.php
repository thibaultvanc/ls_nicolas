<?php


use App\Table;
use App\Field;
use App\Devis;
use App\Theme;
use App\Client;
use Carbon\Carbon;
use App\_Namespace;
use App\Relationship;
use Illuminate\Http\Request;
use Organit\bootstrapping\CreateModels;
use Organit\bootstrapping\CreateMigrations;
use Organit\bootstrapping\PrepareUploadDirectory;
use Organit\bootstrapping\CreateFaker;
use Organit\bootstrapping\CreateControllers;
use Organit\bootstrapping\CreateRoutes;
use Organit\bootstrapping\CreateLaravelViews;
use Organit\bootstrapping\CreateVue;
use Organit\bootstrapping\CreateMenu;
use Organit\bootstrapping\CreateMiddlewares;
use Organit\bootstrapping\CreateLanguageFiles;
use Illuminate\Foundation\Testing\DatabaseTransactions;


/**
 *
 */
class GenerationModelsTest extends TestCase
{
    use DatabaseTransactions;



    protected $client;
    protected $devis;
    protected $theme;
    protected $space;
    protected $table1;
    protected $table2;



    public function setUp()
    {


        Parent::setUp();




    }
      /** @test */
    public function tearDown()
    {




      $this->devis=Devis::find(2);


      $export_mode="zip";




      // dd(\Config::get('zoho_larastrap_package_conf.relationships'));

      $finder = collect(\Config::get('zoho_larastrap_package_conf.relationships'));


      // $a = $finder->where('from_table_name', 'accounts');
      // // $finder->filter(function ($elem) {
      // //         return
      // //               // $elem->from_table_name == ''
      // //               // && $elem->to_table_name == ''
      // //               //&&
      // //               $elem['laravel_name'] == 'hasMany'
      // //               // &&$elem->from_field_name == ''
      // //                 // && $elem->method='';
      // //                 ;
      // // });
      //
      // dd($a);



        $this->devis->update(['is_app_integrates_zoho_package'=> 1]);


        if ($this->devis->is_app_integrates_zoho_package) {
          $response = (new \Organit\bootstrapping\Apis\Crm\Zoho\GenerationHelpers($this->devis, false, ['use_zoho_package'=>$this->devis->is_app_integrates_zoho_package]))->seedsDataStrucure();

          echo('-------------------------------------------------------------------------------------------------<br>');
          echo('Zoho configuration imprted in Database!, let\'s see if the configuration generate a good code ...<br> ');
          echo('-------------------------------------------------------------------------------------------------<br>');
        }

          $this->needToSetUp = false;
          // $this->client = Client::create(['first_name'=>'123', 'last_name'=>'1234','email'=>'123@azzz.com']);
          // $this->devis = Devis::create(['client_id'=>$this->client->id, 'app_name'=>'Mandarine']);
          // $this->theme = Theme::create(['name'=>'123']);
          // $this->space = $this->devis->namespaces()->create(['name'=>'space', 'theme_id'=>$this->theme->id]);
          // $this->table1 = $this->devis->tables()->create(['namespace_id'=>$this->space->id, 'name'=>'mproducts', 'model'=>'Mproduct']);
          // $this->table2 = $this->devis->tables()->create(['namespace_id'=>$this->space->id, 'name'=>'mfacture', 'model'=>'Mfacture']);

          (new PrepareUploadDirectory($this->devis, true, Request::create('','GET',['export_mode'=>$export_mode, 'navigation_mode'=>'laravel_vue'])))->ClearTheMigrationFile();


          $tasks = [
              PrepareUploadDirectory::class,
              CreateControllers::class,
              CreateMigrations::class,
              CreateModels::class,
              CreateMiddlewares::class,
              CreateLanguageFiles::class,
              CreateVue::class,
              CreateLaravelViews::class,
              CreateMenu::class,
              CreateRoutes::class,
              // CreateFaker::class,//last
              // CreateUnitTest::class,
              ];
          foreach ($tasks as $task) {
              $response = (new $task($this->devis, true, Request::create('','GET',['export_mode'=>$export_mode, 'navigation_mode'=>'laravel_vue']) ))->handle();
          }



        dd('__HERE__');
        // $response = (new PrepareUploadDirectory($this->devis, true))->ClearTablesCreated();
        // $response = (new PrepareUploadDirectory($this->devis, true))->ClearTheMigrationFile();


        // (new PrepareUploadDirectory($this->devis, true))->removeExistingProject();

        // parent::tearDown();
    }








    /** @test */
    public function it_creates_routes_for_each_element()
    {
        // dd('\Route::getRoutes()',\Route::getRoutes() );

        $routeCollection = \Route::getRoutes();
        $mask = "|%5.5s |%-60.60s | %-50.50s | %-80.80s | %10.10s |\n";


        $collect = collect();
        printf($mask, 'Method', 'path', 'name', 'action', 'reponse');

        foreach ($routeCollection as $value) {

            if (starts_with($value->getPath(),$this->devis->app_name) || starts_with($value->getPath(),'api/'.$this->devis->app_name)) {
                $collect->push(['method'=>$value->getMethods()[0], 'path'=> $value->getPath(), 'name'=>$value->getName(), 'action'=>$value->getActionName() ]);
            }
        }

        foreach ($collect as $key => $value) {
            // printf($mask, $value['method'],$value['path'], $value['name'], $value['action'], '');
        }

        //test get routes
        //
        // foreach($collect->where('method','GET') as $route){
        //
        //
        //     $response = $this->call('GET', env('SITE_URL').$route['path']); ////env dans phpunit.xml
        //     $this->assertEquals(200, $response->status(),  $route['path'] . " did not return a 200");
        // }


        foreach($collect->where('method','GET') as $route){

            // $text = '{This} is a / test [string], eat my shorts.';
            $variables = preg_match_all("/\{([^\]]*)\}/", $route['path'], $matches);

            // preg_match_all("/\[([^\]]*)\]/", $text, $matches);
            // var_dump('-----------------');
            // var_dump($matches[1]);
            // var_dump('-----------------');

            $callingPath = env('SITE_URL').'/'.$route['path'];
            $response = $this->call('GET', $callingPath);

            // if ( $route['path'] == 'api/Picaflor/products/{product}/composedByProducts') {
            //     dd('calling',env('SITE_URL').$route['path'] );
            //     dd('api/Picaflor/products/{product}/composedByProducts','$response',$response );
            //
            // }
            printf($mask, $route['method'],$route['path'], $route['name'], $route['action'], $response->status());



            //*https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP*//
            #screencode#2016-12-02 09-43-43.mp4#
            //$this->assertContains($response->status(), [200,302], $route['path'] . " did not return a 200 or 302(redirection) but a " . $response->status() . ' on calling url : '.$callingPath );
        }


        // dd(' );




echo "\n";


    }






    /** @test */
    public function it_creates_a_working_model_foreach_table()
    {
        #v2# function non fully completed
        foreach ($this->devis->tables()->where('model', '<>','')->get() as $table) {

            //$methodList = $table->methodList();

            // dd('$methodList',$methodList );

            $class = $table->modelNamespaceClass();
            // var_dump($clss)
            $model = (new $class);


            $model::truncate();
            $fake  = factory($table->modelNamespaceClass())->create();
            // dd('$fake',$fake );


            $this->assertCount(1,$model::all());

            foreach ($table->relationship() as $relation) {

                // var_dump('*************');

                if ($relation['laravel_name'] == 'belongsToMany') {

                    $itemToAttach = factory($table->modelNamespaceClass())->create();


                    $countRaws_before = $fake->{$relation['methodName']}->count();
                    // echo "---<$countRaws_before>---";

                    $fake->{$relation['methodName']}()->attach($itemToAttach);

                    $countRaws_after = $fake->fresh()->{$relation['methodName']}->count();
                    // echo "--->$countRaws_after<---";



                    $this->assertEquals($countRaws_before+1, $countRaws_after);

                    if ($countRaws_before+1 != $countRaws_after) {
                        dd('failed on ',$fake . '->' . $relation['methodName'].'()->attach('.$itemToAttach->id.');' );

                    }

                    // dd('$b',$b );


                    // $this->seeInDatabase($table->tableName, []);

                }

            }




        }


    }






}
