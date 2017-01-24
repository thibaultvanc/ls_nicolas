<?php
namespace App;

use Flash;
use Carbon\Carbon;
use Organit\bootstrapping\CreateVue;
use Organit\bootstrapping\CreateMenu;
use Organit\bootstrapping\CreateFaker;
use Organit\bootstrapping\CreateModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Organit\bootstrapping\CreateRoutes;
use Organit\bootstrapping\CreateMigrations;
use Organit\bootstrapping\CreateUnitTest;
use Organit\bootstrapping\CreateControllers;
use Organit\bootstrapping\CreateMiddlewares;
use Organit\bootstrapping\CreateLaravelViews;
use Organit\bootstrapping\CreateLanguageFiles;
use Organit\bootstrapping\PrepareUploadDirectory;

//calc
use App\Models\Middle\Web\Operation;
use App\Models\Middle\Web\ShareValuation;



class Devis extends Model
{

    protected $table = 'devis';

    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function tables()
    {
        return $this->hasMany('App\Table');
    }

    public function documents()
    {
        return $this->hasMany('App\DevisDocument');
    }

    public function pointages()
    {
        return $this->hasMany(\App\Pointage::class);
    }

    public function namespaces()
    {
        return $this->hasMany('\App\_Namespace');
    }



    public function prefix()
    {
        return $this->id.'_'.$this->app_name.'____';
    }



    public function sumPointagePerType()
    {
        $pointages = $this->pointages()->orderBy('id', 'desc')->get();

        $types = $this->pointages()->pluck('type')->unique();

        $array_sum_type = collect();


        foreach ($types as $type) {
            $sum = $pointages->where('type',$type)->sum('minutes') / 60;
            $array_sum_type->push([$type => $sum]);
        }
        $array_sum_type->push(['total' => $pointages->sum('minutes') / 60]);

        return $array_sum_type;
    }




    public function getAppNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function generate_bootstrapping(Request $request)
    {




        // dd($this->app_name);




        // foreach ($this->tables as $table) {
        //     $tag =
        //     // var_dump(str_slug(snake_case($table->model)));
        //     var_dump( $table->vueComponentPath('form'));
        //     var_dump( $table->vueComponentRelativePathTo(Table::find(33), 'form'));
        //     echo "<hr>";
        // }
        // die('++');

        //
        // $script='';
        // $table=\App\Table::find(3);
        // var_dump($table->relationship());
        // echo "----------------------<br>";
        //
        // dd($script);
        // //

        /*
        $script='';
        $table=\App\Table::where('name','accounts')->first();
        if ($table->hasBelongsToRelation()) {
        $script.='with([';
    }
    foreach ($table->relationship() as $relation) {
    if(in_array($relation['laravel_name'], ['belongsTo'])){
    $script.= '\''.$relation['methodName'].'\', ';
}
}
$script=trim($script);
$script=rtrim($script, ',');

if ($table->hasBelongsToRelation()) {
$script.='])';
}

dd($script);
*/








//
//
// $vehicleType = \App\Table::where('name', 'vehicle_types')->first();
// //
// dd($vehicleType->hasFixedRecords());

// dd(\App\Table::where('name', 'accounts')->first()->getPrimaries()->first()->name);



//
// foreach (\App\Table::where('name', 'vehicles')->first()->relationship() as $relation) {
//     var_dump($relation);
// }
// die('++');
//
// $hasVariousManyRelationToModel = $table->hasVariousManyRelationToModel(Table::where('name', 'operations')->first());
// if ($hasVariousManyRelationToModel) {
//     echo "yes it does !!";
// }else {
//     echo "No";
// }
//
// die('++++++');
// foreach ($table->fields as $field) {
//     var_dump($field->id);
//     var_dump($field->name);
//     dd($field->relations);
//     foreach ($field->relations as $relation) {
//         dd('11');
//         var_dump($relation->pivot->laravel_name);
//         var_dump('-------');
//     }
// }
// $account = \App\Models\Middle\Web\Account::find(1);
// //dd($table, $account);
// die();

// dd('timestamp()',timestamp() );









// dd(\Config::get('zoho_larastrap_package_conf.relationships'));


//save config
$this->update(['is_app_integrates_zoho_package'=>$request->use_zoho_package]);


if ($request->use_zoho_package) {
  $response = (new \Organit\bootstrapping\Apis\Crm\Zoho\GenerationHelpers($this, false, $request))->seedsDataStrucure();

  echo('-------------------------------------------------------------------------------------------------<br>');
  echo('Zoho configuration imprted in Database!, let\'s see if the configuration generate a good code ...<br> ');
  echo('-------------------------------------------------------------------------------------------------<br>');
}


echo Carbon::now();
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// ini_set('memory_limit', '128M');
ini_set('memory_limit', '-1');


$time_start = microtime(true);


// dd($request->navigation_mode);



$tasks = [

    CreateMigrations::class,



    // CreateUnitTest::class,//last // bug enleve les namespaces sur les model . bizarre
];
foreach ($tasks as $task) {
    echo '<h1>';
    $method = explode('\\', $task);
    echo $method[2];
    echo '</h1>';
    (new $task($this,false,$request))->handle();
}



if ($request->export_mode == 'zip') {

}
return true;




$time_end = microtime(true);
$time = $time_end - $time_start;





return true;




}






    /**
    * find the relationship that point to the same table
    * @return list of relationship grouped
    */

    public function findBelongsToManyOnSameModel(Table $table=null) {

        $rel1 = Relationship::with(['fromField', 'fromField.table'])
        ->whereIN('pivot_table_id', $this->tables->pluck('id'))
        ->where('laravel_name', 'belongsToMany')
        ->where('from_field_id', '=' , \DB::raw('on_field_id') )
        ->get()
        ->groupBy('to_model') ;

        //try to see if pb :
        foreach ($rel1 as $relation) {
            if ($relation->count()>2) {
                dd('#8RrEPph!/OJ#','ERROR on function findBelongsToManyOnSameModel : to many relationtion belongs to many pointing on the same table' );
            }
        }

        if ($table) {
            if (key_exists($table->id, $rel1->toArray())) {
                return $rel1[$table->id];
            }
            else {
                return null;
            }
        }
        return $rel1 ;


    }







    public function testRelations()
    {


    foreach ($this->tables()->where('model', '<>','')->get() as $a=>$table) {

        echo '<h5>&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:green">></i> Preparing files for table <u style="color:#15c">';
        echo $table->name;
        echo '</u></h5>';

        $modelScript='<?php'."\n\n";


        $modelScript.='namespace '.$table->modelNamespace().';'."\n\n";

        $modelScript.='use Illuminate\Database\Eloquent\Model;'."\n\n";





        $useList=[];
        // if($table->name == 'users'){
        foreach ($table->fields as $field) {
            // echo $field->name.'<br>';
            foreach ($field->relations as $relation) {
                // echo "<h1>".$relation->pivot->laravel_name."</h1>";
                if ($relation->pivot->laravel_name == 'belongsToMany') {
                    $related_table = \App\Table::find($relation->pivot->to_model);
                    // $related_field = \App\Field::find($relation->pivot->on_field_id);
                    // $useList[]=$related_table->modelNamespaceClass();
                }
                else {
                    $related_table = Field::find($relation->pivot->to_field_id)->table;
                }

                $useList[]=$related_table->modelNamespaceClass();
                // echo $relation->table->modelNamespaceClass();
            }
        }
        // dd('class=>',$table->modelNamespaceClass(), 'uses=>', $useList);
        // }


        // var_dump($this->renderUsesStatements($useList));
        var_dump($useList);

        $modelScript.='class '.$table->model.' extends Model'."\n";
        $modelScript.='{'."\n\n";
            // $modelScript.="\t TESTSTSTSTS";


            $modelScript.=$this->tab1.'protected $guarded = [];'."\n";
            $modelScript.=$this->tab1.'protected $table = "'.$table->tablename.'";'."\n";
            $modelScript.="\n";

            foreach ($table->fields as $field) {
                foreach ($field->relations as $relation) {
                    if (isset($relation->name)) {



                        $related_table = Field::find($relation->pivot->to_field_id)->table()->first();

                        if($relation->pivot->laravel_name=='morphedByMany'){
                            $modelScript.= $this->tab1.'public function '.$related_table->variablePlural.'() {'."\n";
                                $relation->pivot->to_field_id = Field::find($relation->pivot->to_field_id)->name;
                                $modelScript.= $this->tab2.'return $this->morphedByMany('.$related_table->modelNamespaceClass().'::class);'."\n";
                                $modelScript.= $this->tab1.'}'."\n";
                            }

                            if($relation->pivot->laravel_name=='belongsTo'){
                                $modelScript.= $this->tab1.'public function '.$related_table->variable.'() {'."\n";
                                    $relation->pivot->to_field_id = Field::find($relation->pivot->to_field_id)->name;
                                    $modelScript.= $this->tab2.'return $this->belongsTo('.$related_table->modelNamespaceClass().'::class);'."\n";
                                    $modelScript.= $this->tab1.'}'."\n";
                                }

                                if($relation->pivot->laravel_name=='hasMany'){
                                    $modelScript.= $this->tab1.'public function '.$related_table->variablePlural.'() {'."\n";
                                        $relation->pivot->to_field_id = Field::find($relation->pivot->to_field_id)->name;
                                        $modelScript.= $this->tab2.'return $this->hasMany('.$related_table->modelNamespaceClass().'::class);'."\n";
                                        $modelScript.= $this->tab1.'}'."\n";
                                    }



                                    // var_dump($relation->name);
                                }
                            }
                        }

                        $modelScript.="\n\n";


                        $modelScript.='}'."\n\n";
                        // $modelScript='';

                        // echo "------>";



                        // if ($table->name == 'users') {
                        //     dd($modelScript);
                        // }

                    };

                    //dd('stop script model');
                }



            }
