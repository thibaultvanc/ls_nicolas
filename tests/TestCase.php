<?php
use App\Table;
use App\Field;
use App\Devis;
use App\Client;
use App\Relationship;
use App\_Namespace;
use App\Theme;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{


    // public $client;
    // public $devis;
    // public $theme;
    // public $space;
    // public $table1;
    // public $table2;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
     public function createApplication()
     {
         $app = require __DIR__.'/../bootstrap/app.php';

         $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

         return $app;
     }


    //  public function createApplication()
    // {
    //     $app = require __DIR__ . '/../bootstrap/app.php';
    //
    //     // $do tenv = new Dotenv\Dotenv(__DIR__);
    //     //
    //     // $dotenv->load(__DIR__ . '', '.env');
    //
    //     $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
    //
    //     return $app;
    // }
    //
    // public function setUp()
    // {
    //
    //
    //     parent::setUp();
    //     $this->client = Client::create(['first_name'=>'123', 'last_name'=>'1234','email'=>'123@azzz.com']);
    //     $this->devis = Devis::create(['client_id'=>$this->client->id, 'app_name'=>'Orangeade']);
    //     $this->theme = Theme::create(['name'=>'123']);
    //     $this->space = $this->devis->namespaces()->create(['name'=>'space', 'theme_id'=>$this->theme->id]);
    //     $this->table1 = $this->devis->tables()->create(['namespace_id'=>$this->space->id, 'name'=>'mproducts', 'model'=>'Mproduct']);
    //     $this->table2 = $this->devis->tables()->create(['namespace_id'=>$this->space->id, 'name'=>'mfacture', 'model'=>'Mfacture']);
    //     // echo "__START MIGRATION__";
    //     // \Artisan::call('migrate:refresh');
    //     // try {
    //     //
    //     // } catch (Exception $e) {
    //     //     // \Artisan::call('migrate:refresh');
    //     //     dd('__HERE__');
    //     //     // die('++');
    //     //
    //     //     // \Artisan::call('migrate');
    //     //
    //     //
    //     // }
    //     // echo "__END MIGRATION__";
    //
    // }

    // public function tearDown()
    // {
    //     \Artisan::call('migrate:reset');
    //     parent::tearDown();
    // }
    //



}
