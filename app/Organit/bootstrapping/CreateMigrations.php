<?php
namespace Organit\bootstrapping;

use File;
use App\Devis;
use App\Field;
use App\Table;
use Illuminate\Http\Request;
use Carbon\Carbon;
/**
*
*/
class CreateMigrations extends Core
{

    protected $devis;
    protected $debug;
    protected $request;
    protected $migrationsArray;

    function __construct(Devis $devis, $debug=false,Request $request)
    {
        $this->devis = $devis;
        $this->debug = $debug;
        $this->request = $request;
        $this->migrationsArray = collect();
    }

    public function typeLaravelMethod(Field $field)
    {
        // dd();

        if ($field->is_incrementable && $field->is_primary) {
            return 'increments';
        }
        else if ($field->type->slug == 'password') {
            return 'string';
        }
        else if ($field->type->slug == 'email') {
            return 'string';
        }
        else {
            return $field->type->name;
        }
    }

    public function fieldsArguments(Field $field)
    {
        // if (in_array($field->type->name,['increments', 'integer', 'text', 'time', 'timeTz', 'tinyInteger', 'bigIncrements', 'bigInteger', 'binary', 'boolean', 'date', 'dateTime', 'dateTimeTz', 'float', 'ipAddress', 'json', 'jsonb', 'longText', 'macAddress', 'mediumInteger', 'mediumText', 'morphs', 'smallInteger', ])) {
        //     return "'".$field->name."'";
        // }
        if (in_array($field->type->name,['string', 'password'])) {
            return "'".$field->name."', 255";
        }
        else if (in_array($field->type->name,['decimal'])) {
            return "'".$field->name."', 10,5";
        }
        else if (in_array($field->type->name,['double'])) {
            return "'".$field->name."', 15,8";
        }
        else {
            return "'".$field->name."'";
        }
        // else if (in_array($field->type,['double'])) {
        //     return "'".$field->name.", 15,8'";
        // }

    }


    function moveElement(&$array, $position, $newPosition) {
        $out = array_splice($array, $position, 1);
        array_splice($array, $newPosition, 0, $out);
    }


    function getPosition($array, $item) {

    }


    public function initializeMigrationsArray()
    {
        foreach ($this->devis->tables as $key=>$table) {
            $this->migrationsArray->push($table) ;
        }
    }




    public function sortMigrationArray()
    {


        foreach ($this->devis->tables as $table) {


            # get list $requireTables //ok
            // $table = Table::find($table_id);
            echo $table->name;
            $requireTables = [];
            foreach ($table->fields as $field) {
                foreach ($field->relations as $relation) {
                    if (in_array($relation->pivot->laravel_name, ['belongsToMany', 'morphedByMany','morphToMany'])){
                        $related_table = \App\Table::find($relation->pivot->to_model);
                        $requireTables[] =$related_table->id;
                    }
                    if (in_array($relation->pivot->laravel_name, ['belongsTo'])) {
                        $related_table = Field::find($relation->pivot->to_field_id)->table;
                        $requireTables[] =$related_table->id;
                    }
                }
            }

            var_dump($requireTables);
            # get the current position of the table $currentindex

        //    dd($this->migrationsArray->search('1'));



            var_dump($this->migrationsArray);
            foreach ($requireTables as $key=>$requireTable) {
                #remove the requireTables from array
                $index = array_search($requireTable, $this->migrationsArray);
                 unset($this->migrationsArray[$index]);
                 var_dump($currentTableIndex);
                 //place le require fields before the $currentindex
                 $this->insert_before($this->migrationsArray, $currentTableIndex, array($index=>$requireTable));

             }
            var_dump($this->migrationsArray);
            //die('++-++-');



            // }
        }
    }



    public function handle()
    {
        $this->initializeMigrationsArray();

        // $this->sortMigrationArray();



        foreach ($this->migrationsArray as $key=>$table) {

            if ($table->is_api) {
              continue; // pas d'nregistrements en BDD
            }
            // foreach ($this->devis->tables as $key=>$table) {
            // $table=Table::find($table_id);


            // echo '<h5>&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:green">></i> Preparing files for table <u style="color:#15c">';
            // echo $table->name;
            // echo '</u></h5>';


            /*
            **  migrations
            */
            // $script = 'sdfsdfsdf '."\n";
            // $script.= 'sdfsdfsdf \n';
            $script='<?php'."\n\n";

            $script.='use Illuminate\Database\Schema\Blueprint;'."\n";
            $script.='use Illuminate\Database\Migrations\Migration;'."\n\n";

            $migrationClassName= $table->model==''? camel_case($table->name):camel_case($table->model);


            $script.='class Create'.$this->devis->app_name.ucfirst($migrationClassName).'Table extends Migration'."\n";
            $script.='{'."\n";

                $script.="\t".'public function up()'."\n";
                $script.="\t".'{'."\n";
                    $script.= "\t\t".'if( ! Schema::hasTable("'.$table->tableName.'")) {'."\n";
                    $script.= "\t\t\t".'Schema::create("'.$table->tableName.'", function (Blueprint $table) {'."\n";



                        foreach ($table->fields as $field) {
                            if ($field->type->name) {
                                // $script.= "\t\t\t".'$table->'.$this->typeLaravelMethod($field).'("'.$field->name.'");'."\n"; //work
                                $onTable = '';
                                $referencesKey = '';
                                $has_constraint=false;
                                foreach ($field->relations()->get() as $key=>$relation) {


                                    if (in_array($relation->pivot->laravel_name, ['belongsTo'])) {
                                        $has_constraint = true;
                                        $onTable = Field::find($relation->pivot->to_field_id)->table->name;
                                        $referencesKey = Field::find($relation->pivot->to_field_id)->name;

                                    }else if (in_array($relation->pivot->laravel_name, ['belongsToMany'])) {
                                        if ($field->is_incrementable) {
                                            $has_constraint = false;
                                        }
                                        else {
                                            $has_constraint = true;
                                        }
                                    }
                                    if ($has_constraint) {
                                        if ($key == 0) {
                                            $script.= "\t\t\t\t".'$table->'.$this->typeLaravelMethod($field).'('.$this->fieldsArguments($field).')->unsigned();'."\n";
                                        }
                                        $script.= "\t\t\t\t"."//$"."table->foreign('".$field->name."')->references('".$referencesKey."')->on('".$onTable."');" ."\n\n";
                                    }
                                }

                                if ( ! $has_constraint) {
                                    //la table pivot d'un belongs to Many n'est pas spécifiée dans les relations. Allos la chercher
                                    if ($table->getPrimaries()->count() > 1 ) {

                                        $onTable=\DB::table('relationships')->where('laravel_name', 'belongsToMany')->where('to_field_id', $field->id)->where('pivot_table_name', $table->name)->first();

                                        $onTable=$onTable;
                                        if ($onTable) {
                                                $field_a = Field::find($onTable->from_field_id);
                                                $onTable = $field_a->table;
                                                $referencesKey=$field_a->name;


                                            $script.= "\t\t\t\t".'$table->'.$this->typeLaravelMethod($field).'('.$this->fieldsArguments($field).')->unsigned();'."\n";
                                            $script.= "\t\t\t\t"."//$"."table->foreign('".$field->name."')->references('".$referencesKey."')->on('".$onTable->name."');" ."\n\n";
                                        }else {
                                            $script.= "\t\t\t\t".'$table->'.$this->typeLaravelMethod($field).'('.$this->fieldsArguments($field).');'."\n";
                                        }

                                    }else {
                                        $script.= "\t\t\t\t".'$table->'.$this->typeLaravelMethod($field).'('.$this->fieldsArguments($field).');'."\n";
                                    }

                                }


                            }


                        }
                        $script.= "\t\t\t\t".'$table->timestamps();'."\n";
                        $script.= "\t\t\t\t".'$table->softDeletes();'."\n";




                        $script.="\t\t\t".'});'."\n";
                        $script.="\t\t".'}//endif'."\n";//endif
                        $script.="\t".'}'."\n\n\n";
                        //$script.='}'."\n";


                        $script.="\t".'public function down()'."\n";
                        $script.="\t".'{'."\n";
                            $script.= "\t\t".'if( Schema::hasTable("'.$table->tableName.'")) {'."\n";
                            $script.="\t\t\t".'Schema::drop("'.$table->tableName.'");'."\n";
                            $script.="\t\t".'}'."\n";
                            $script.="\t".'}'."\n";
                            $script.='}'."\n\n\n";









                            $order = $key;
                            $nbOf0 = 6 - strlen($order);
                            $zeros='';
                            for ($i=0; $i < $nbOf0 ; $i++) {
                                $zeros.='0';
                            }
                            $order = $zeros.$order;


                            $migrationTableName= $table->model==''? snake_case($table->name):snake_case($table->model);


                            //$migrationClassName= $table->model==''? camel_case($table->name):camel_case($table->model);

                            // if ($table->name == 'contact_vehicle') {
                            //     dd($migrationTableName);
                            // }


                            $migrationFileName = Carbon::now()->format('Y_m_d').'_'.$order.'_create_'.$this->devis->app_name.'_'.$migrationTableName.'_table.php';

                            $prefixPath = '../';
                            if ($this->debug) {
                                $prefixPath = '';
                            }

                            $this->createFile($prefixPath.'database/migrations/'.$this->devis->app_name.'/'.$migrationFileName,$this->devis->app_name,$script,true);


                        }



                        echo "<div style='color:white; background-color:blue; padding:15px'>";
                        echo "php artisan migrate --path=/database/migrations/".$this->devis->app_name;
                        echo "</div>";

                       \Artisan::call('migrate', array('--path' => '/database/migrations/'.$this->devis->app_name));

                        // die('+++++++++++++qsdqsdqsdss++++++++++');

    }
}
