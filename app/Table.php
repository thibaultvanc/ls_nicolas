<?php

namespace App;

use Flash;
use App\Devis;
use App\Table;
use App\Raw;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{


    protected $table = 'tables';
    //protected $relationships;

    // protected $fillable = ['devis_id', 'name', 'model', 'namespace', 'namespace_id'];
    protected $guarded = [];

/*
    public function __construct()
    {
        dd((123));
        //$this->relationships = $this->relationship();
    }
*/
    public function devis()
    {
        return $this->belongsTo('App\Devis');
    }

    public function fields()
    {
        return $this->hasMany('App\Field');
    }

    public function the_namespace()
    {
        return $this->belongsTo('App\_Namespace', 'namespace_id');
    }

    public function raws()
    {
        return $this->hasMany(Raw::class);
    }

    public function hasSeeder()
    {
        return !! $this->hasMany(Raw::class)->count();
    }



    public function getModelAttribute($value)
    {
        return ucfirst($value);
    }



    public function relationship()
        {
            $collection = collect();
            foreach ($this->relationshipList() as $field) {
                foreach($field->relations()->get() as $relation){

                  $fromField = Field::find($relation->pivot->from_field_id);
                  $toField = Field::find($relation->pivot->to_field_id);

                  if ($this->is_api) {


                    $collection->push([
                                 'model_id'=> $fromField->table->id,
                                 'model'=> $fromField->table->model,
                                 'laravel_name'=>$relation->pivot->laravel_name,
                                 'to_model_id'=>$toField->table->id,
                                 'to_model'=>$toField->table->model,
                                 'from_field_id'=> $fromField->id,
                                 'from_field'=> $fromField->name,
                                 'to_field_id'=> $toField->id,
                                 'to_field'=> $toField->name,
                                 'pivot_table_id'=> '',
                                 'pivot_table'=> '',
                                 'methodName'=> $relation->pivot->method,
                                 ] );

                    continue;

                  }


                    $methodName = '';
                    $pivot_table_id='';
                    $pivot_table='';
                    $showPivotTabledata = (boolean) in_array($relation->pivot->laravel_name, ['belongsToMany', 'morphedByMany','morphToMany']);
                    if ($showPivotTabledata){
                        $related_table = \App\Table::find($relation->pivot->to_model);
                    }
                    else  {
                        $related_table = Field::find($relation->pivot->to_field_id)->table;
                    }
                    $fromField = Field::find($relation->pivot->from_field_id);
                    $toField = Field::find($relation->pivot->to_field_id);
                    /*
                    **  methodName
                    */
                    if($relation->pivot->laravel_name=='morphedByMany'){
                        $methodName = $related_table->variablePlural;
                    }
                    if($relation->pivot->laravel_name=='belongsToMany'){
                        // dd('$relation->toArray()',$relation->toArray() );
                        //
                        // dd('$relation',$relation->pivot->method );
                        // $methodName = $related_table->variablePlural;
                        $methodName = $relation->pivot->method;
                        $pivot_table_id= $showPivotTabledata? $toField->table->id : '';
                        $pivot_table= $showPivotTabledata? $toField->table->name : '';
                    }
                    if($relation->pivot->laravel_name=='belongsTo'){
                        $defaultFieldName = strtolower(snake_case($related_table->model)).'_id';
                        if ($fromField->name == $defaultFieldName) {
                            if ($related_table->variable == 'update') {
                                $methodName= 'updat';
                            }else {
                                $methodName= $related_table->variable;
                            }
                        }else{
                            $methodName = camel_case($fromField->name);
                        }
                    }
                    if($relation->pivot->laravel_name=='hasMany'){
                        $defaultFieldName = strtolower(snake_case($fromField->table->model)).'_id';
                        if ($toField->name == $defaultFieldName) {
                            $methodName = $related_table->variablePlural;
                        }else{
                            $methodName = $related_table->variablePlural.'_'.$toField->name;
                            $methodName = ends_with($methodName, '_id')?  substr($methodName, 0, -3) : $methodName ;
                            $methodName =  camel_case($methodName);
                        }
                    }

                    // dd($related_table);
                   $collection->push([
                                'model_id'=>$this->id,
                                'model'=>$this->model,
                                'laravel_name'=>$relation->pivot->laravel_name,
                                'to_model_id'=>$related_table->id,
                                'to_model'=>$related_table->model,
                                'from_field_id'=> $fromField->id,
                                'from_field'=> $fromField->name,
                                'to_field_id'=> $toField->id,
                                'to_field'=> $toField->name,
                                'pivot_table_id'=> $pivot_table_id,
                                'pivot_table'=> $pivot_table,
                                'methodName'=> $methodName,
                                ] );
                                // $collection->add( 'pivot_table_id', $related_table->name);
                                // $collection->put(   'pivot_table', $related_table->name );
                }
            }
            return $collection;
        }



/*
    public function relatedModel2()
    {
        //foreach ($this->devis->tables()->where('model', '<>','')->get() as $a=>$table) {


            $useList=[];
            // if($table->name == 'users'){
            foreach ($this->fields as $field) {
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
            return $useList;

    }

*/


/*
    public function relatedModels()
    {

        $field = Field::find(2);
        dd($field->relations()->get());




        $useList=[];
        foreach ($this->fields as $field) {
            echo $field->id.'<br>';
            echo $field->name.'<br><br><br>';
            // dd($field->relations);
            foreach ($field->relations as $relation) {
                // ($relation);
                echo "<h1>".$relation->pivot->laravel_name."</h1>";
                if ($relation->pivot->laravel_name == 'belongsToMany') {
                    $related_model = Table::find($relation->pivot->to_model);
                }
                else {
                    $related_model = Field::find($relation->pivot->to_field_id)->table;
                }

                $useList[]=$related_table->modelNamespaceClass();
                // echo $relation->table->modelNamespaceClass();
            }
        }
        return $useList;
    }
*/




    public function getTableNameAttribute($value)
    {
        return $this->devis->prefix().$this->name;
    }


    public function getVariableAttribute($value)
    {
        return lcfirst(snake_case($this->model));
    }

    public function getVariablePluralAttribute($value)
    {
        return lcfirst(str_plural(snake_case($this->model)));
    }


    public function foreignLabelCode()
    {
        $script='';
        $foreignLabelList = $this->fields()->where('is_on_foreign_label', 1);
        if ($foreignLabelList->count() == 1) {
            $label = $foreignLabelList->first()->name;
            $script.=$this->tab2.'$'.$this->variablePlural.'='.$this->model.'::lists("'.$label.'", "'.$this->getPrimaries()->first()->name.'");'."\n";
        }
        if ($foreignLabelList->count() > 1) {


                $script.=$this->tab2.'$'.$this->variablePlural.'='.$this->model.'::select(\DB::raw("CONCAT(';

                        $label = '';
                        foreach ($foreignLabelList->get() as $key=>$foreignLabel) {
                            $label.= $foreignLabel->name;
                            if ($key+1 != $foreignLabelList->count()) {
                                $label.= ", ' ', ";
                            }
                        }
                        $script.=$label.') AS full_name, '.$this->getPrimaries()->first()->name.'"))->lists("full_name", "'.$this->getPrimaries()->first()->name.'");'."\n";

        }
        else if($foreignLabelList->count() == 0) {


            echo "<div style='color:white; background-color:red'>
                <h1>You have to specify a foreign_label for the table <a target='_blank' href='".route('admin.devis.{devis}.tables.fields.create', [$this->devis->id, $this->id])."'>{{$this->name}}</a></h1>
                </div>";
        }

        return $script;
    }





    public function modelNamespace($showAppName)
    {
        // if ($this->model == 'User') {
        //     return 'App';
        // }
        if (empty($this->the_namespace->name) ||$this->the_namespace->name == '') {
        // if (empty($this->the_namespace->name) ||$this->the_namespace->name) {
            return 'App\Models';
        }


        if ($showAppName) {
            return 'App\\Models'.'\\'.ucfirst($this->devis->app_name).'\\'.ucfirst($this->the_namespace->name);
        }
        else {
            return 'App\\Models'.'\\'.ucfirst($this->the_namespace->name);
        }


    }

    public function modelNamespaceClass($showAppName)
    {

        if ($this->model == 'User' && $showAppName) {
            return 'App'.'\\'.'User';
        }



        if (empty($this->the_namespace->name) ||$this->the_namespace->name == '') {
            return 'App\Models'.'\\'.ucfirst($this->devis->app_name).'\\'.$this->model;
        }

        if ($showAppName) {
            return 'App\\Models'.'\\'.ucfirst($this->devis->app_name).'\\'.ucfirst($this->the_namespace->name).'\\'.$this->model;
        }
        else {
            return 'App\\Models'.'\\'.ucfirst($this->the_namespace->name).'\\'.$this->model;
        }



    }
    // public function modelNamespaceClassDoubleSlash()
    // {
    //     return str_replace('\\', '\\\\', $this->modelNamespaceClass());
    //     // return $this->modelNamespaceClass();
    // }

    public function controllerNamespace($showAppName)
    {

        if ($showAppName) {
            return 'App\\Http\\Controllers\\'.ucfirst($this->devis->app_name);
        }
        return 'App\\Http\\Controllers';

    }

    public function controllerClass($showAppName)
    {
        if($this->the_namespace->name != ''){
            return $this->controllerNamespace($showAppName).'\\'.$this->the_namespace->name.'\\'.$this->model.'Controller';
        }
        return $this->controllerNamespace($showAppName).'\\'.$this->model.'Controller';
    }

    public function controllerApiClass($showAppName)
    {
        if($this->the_namespace->name != ''){
            return $this->controllerNamespace($showAppName).'\\'.$this->the_namespace->name.'\\'.$this->model.'ApiController';
        }
        return $this->controllerNamespace($showAppName).'\\'.$this->model.'ApiController';
    }

    public function controllerRouteClass($showAppName)
    {
        return str_replace("App\Http\Controllers\\", '', $this->controllerClass($showAppName));

    }

    public function controllerRouteApiClass($showAppName)
    {
        return str_replace("App\Http\Controllers\\", '', $this->controllerApiClass($showAppName));

    }


    public function controllerDirectoryPath($debug, $showAppName)
    {
        $prefixPath = $debug? '':'../';
        $path = str_replace("App\\", $prefixPath."app/", $this->controllerClass($showAppName));

        return str_replace("\\", "/", $path).'.php';
    }
    public function controllerApiDirectoryPath($debug, $showAppName)
    {
        $prefixPath = $debug? '':'../';
        $path = str_replace("App\\", $prefixPath."app/", $this->controllerApiClass($showAppName));

        return str_replace("\\", "/", $path).'.php';
    }
    public function controllerFilePathBootstrapping()
    {
        $path = str_replace("../app", "uploads/bootstrapping", $this->controllerDirectoryPath());
        return str_replace("\\", "/", $path);
    }
    public function controllerDirectoryPathBootstrapping()
    {
        $path = $this->controllerFilePathBootstrapping();
        $pieces = explode('/',$path);
        unset ($pieces[count($pieces)-1]);

        return implode('/',$pieces);
        // $path = str_replace("../app", "uploads/bootstrapping", $this->controllerDirectoryPath());
        // return str_replace("\\", "/", $path);
    }

    public function controller()
    {
        return $this->model.'Controller';
    }







    public function MiddlewareNamespace()
    {
        return 'App\\Http\\Middleware\\'.ucfirst($this->devis->app_name);
    }
    public function middlewareClass()
    {
        // if($this->the_namespace->name != ''){
        //     return $this->MiddlewareNamespace().'\\'.$this->the_namespace->name.'\\'.$this->model;
        // }
        return $this->MiddlewareNamespace().'\\'.$this->the_namespace->name;
    }
    public function middlewareDirectoryPath($debug)
    {
        $prefixPath = $debug? '':'../';

        $path = str_replace("App\\", $prefixPath."app/", $this->middlewareClass());

        return str_replace("\\", "/", $path).'.php';
    }

    public function viewPathInController()
    {
        // return ucfirst($this->devis->app_name). ".".$this->the_namespace->name. ".".strtolower($this->model);
        return ucfirst($this->devis->app_name). ".".$this->the_namespace->name. ".".$this->model;
    }



    // public function snippetMenuPath()
    // {
    //     return ucfirst($this->devis->app_name).'.'.$this->the_namespace->name.'/'.$this->model.'">'.$this->model;
    //
    // }






    public function relationshipList()
    {
        return $this->fields()->with('relations')->get();
    }

    public function fieldExist($fieldName)
    {
        if ($this->fields()->where('name', $fieldName)->exists()) {
            return true;
        }
        return false;
    }

    public function findOrCreate($params=array())
    {
        if ($this->fieldExist($params['name'])) {
            return $this->fields()->where('name',$params['name'])->first();
        }

        return $this->fields()->create($params);;
    }





    public function create_hasMany_relation_with(Request $request,Table $toModel)
    {

        $model=$this;

        $from_field_name= 'id';
        if ($request->has('from_field_id') && $request->from_field_id <> '') {
            $from_field_name= Field::find($request->from_field_id)->name;
        }
        $to_field_name = snake_case($model->model).'_id';
        $field = $model->findOrCreate(['name'=>$from_field_name,'is_primary'=>true,'is_incrementable'=>true, 'field_type_id'=>1]);
        $toField = $toModel->findOrCreate(['name'=>$to_field_name, 'is_unsigned'=>true, 'field_type_id'=>1]);
                $field->relations()->attach($toField, ['from_field_name'=>$field->name, 'to_field_name'=>$toField->name, 'laravel_name'=>$request->laravel_name, 'pivot_table_name'=>'']);
        if ( !  $toField->has_relation($field)) {
            $toField->relations()->attach($field, ['from_field_name'=>$toField->name, 'to_field_name'=>$field->name, 'laravel_name'=>'belongsTo', 'pivot_table_name'=>'']);
        }
        else {
            Flash::error('A relation Already exists beetween this 2 fields');
            return false;
        }

    }

    public function getPrimaries()
    {
        return $this->fields()->where('is_primary',true)->get();
    }

    public function primary()
    {
        if ($this->hasPrimaries()) {
            return $this->getPrimaries()->first()->name;
        }
    }

    public function hasPrimaries()
    {
        return $this->fields()->where('is_primary',1)->exists();
    }



    public function create_belongsTo_relation_with(Request $request,Table $toModel)
    {




        $model=$this;

        $from_field_name = snake_case($toModel->model).'_id';
        if ($request->has('from_field_id') && $request->from_field_id <> '') {
            $from_field_name= Field::find($request->from_field_id)->name;
        }

        //dd($model);
        // $from_field_name = snake_case($toModel->model).'_id';
        $to_field_name = 'id';
        if ($toModel->hasPrimaries()) {
            $to_field_name = $toModel->getPrimaries()->first()->name;

        }

        // old --- $to_field_name = 'id';

        $field = $model->findOrCreate(['name'=>$from_field_name, 'is_unsigned'=>true, 'field_type_id'=>1]);
        $toField = $toModel->findOrCreate(['name'=>$to_field_name,'is_primary'=>true,'is_incrementable'=>true, 'field_type_id'=>1]);

        // if ( !  $field->has_relation($toField)) {




            $field->relations()->attach($toField, ['from_field_name'=>$field->name, 'to_field_name'=>$toField->name,'method'=>$toField->name, 'laravel_name'=>$request->laravel_name, 'pivot_table_name'=>'']);
        // }
        // else {
            // Flash::error('A relation Already exists beetween this 2 fields');
            // return false;
        // }
            $toField->relations()->attach($field, ['from_field_name'=>$toField->name, 'to_field_name'=>$field->name, 'laravel_name'=>'hasMany', 'pivot_table_name'=>'']);
        // if ( !  $toField->has_relation($field)) {
        // }
        // else {
        //     Flash::error('A relation Already exists beetween this 2 fields');
        //     return false;
        // }
    }





    public static function findOrCreate_pivotTable(Request $request,Table $model, Table $toModel)
    {
//dd($model->namespace);
        $devis = Devis::find($request->devis_id);
        //$from_field_name = snake_case($model->model).'_id';
        //$to_field_name = snake_case($toModel->model).'_id';

        // $models = array($model->model, $toModel->model);
        // sort($models);
        // $pivotTableName = strtolower($models[0].'_'.$models[1]);
        $pivotTableName = Self::generateDefaultPivotTableName($model, $toModel);



        $pivotTable = Self::where('devis_id', $devis->id)
                            ->where('name', $pivotTableName)->first();
        if ( ! $pivotTable) {
            $pivotTable = Table::create(['name'=>$pivotTableName, 'is_pivot'=>1, 'model'=>camel_case(str_singular($pivotTableName)),'devis_id'=>$devis->id, 'namespace_id'=>$model->namespace_id]);
        }
        return $pivotTable;
    }



    public static function generateDefaultPivotTableName(Table $table1, Table $table2)
    {
        // dd('__HERE__');

        $models = array($table1->model, $table2->model);
        sort($models);
        return strtolower($models[0].'_'.$models[1]);
    }



    public function create_belongsToMany_relation_with(Request $request,Table $toModel)
    {
      // dd('e');
        $model=$this;
        // dd('$model', $model, '$toModel',$toModel );
        $devis = Devis::find($request->devis_id);
        // dd('$devis',$devis );

        $pivotTable = Table::findOrCreate_pivotTable($request,$model,$toModel);


        $from_field_name = snake_case($model->model).'_id';
        $to_field_name = snake_case($toModel->model).'_id';

        /**/
        if ($model->id == $toModel->id) {
            $to_field_name = 'composedby_'.snake_case($toModel->model).'_id';

        }
        /**/



        // $field = $model->findOrCreate(['name'=>'id','is_primary'=>true,'is_incrementable'=>true, 'field_type_id'=>1]);
        $fieldIdPivot = $pivotTable->findOrCreate(['name'=>'id','is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>true, 'field_type_id'=>1, 'is_on_index_view'=>1]);
        // dd($fieldIdPivot->table->name);

        $field = $model->findOrCreate(['name'=>'id','is_primary'=>true,'is_incrementable'=>true, 'field_type_id'=>1]);
        $fieldPivot = $pivotTable->findOrCreate(['name'=>$from_field_name,'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false, 'field_type_id'=>1, 'is_on_index_view'=>1]);

        $toField = $toModel->findOrCreate(['name'=>'id','is_primary'=>true,'is_incrementable'=>true, 'field_type_id'=>1]);
        $toFieldPivot = $pivotTable->findOrCreate(['name'=>$to_field_name,'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false, 'field_type_id'=>1, 'is_on_index_view'=>1]);
        // dd('__HERE__');


        // dd('$toFieldPivot',$toFieldPivot );



        /**/
        if ($model->id != $toModel->id) {
            $method = camel_case($toModel->name);
            $field->relations()->attach($fieldPivot, ['from_field_name'=>$field->name, 'to_field_name'=>$fieldPivot->name,'method'=>$method, 'laravel_name'=>$request->laravel_name,'to_model'=>$toModel->id,'on_field_id'=>$toField->id, 'pivot_table_id'=>$pivotTable->id, 'pivot_table_name'=>$pivotTable->name]);


            $method=camel_case($model->name);
            $toField->relations()->attach($toFieldPivot, ['from_field_name'=>$toField->name, 'to_field_name'=>$toFieldPivot->name,'method'=>$method, 'laravel_name'=>$request->laravel_name,'to_model'=>$model->id,'on_field_id'=>$field->id, 'pivot_table_id'=>$pivotTable->id, 'pivot_table_name'=>$pivotTable->name]);

        }else {//belongsToMany - SAME TABle

            $method = camel_case('composed_by_'.$model->name);
            $field->relations()->attach($fieldPivot, ['from_field_name'=>$field->name, 'to_field_name'=>$fieldPivot->name,'method'=>$method, 'laravel_name'=>$request->laravel_name,'to_model'=>$toModel->id,'on_field_id'=>$toField->id, 'pivot_table_id'=>$pivotTable->id, 'pivot_table_name'=>$pivotTable->name]);

            $method = camel_case($toModel->name);
            $a = $toField->relations()->attach($toFieldPivot, ['from_field_name'=>$field->name, 'to_field_name'=>$toFieldPivot->name,'method'=>$method, 'laravel_name'=>$request->laravel_name,'to_model'=>$toModel->id,'on_field_id'=>$toField->id, 'pivot_table_id'=>$pivotTable->id, 'pivot_table_name'=>$pivotTable->name]);


        }



    }





    public function createTableRelation($request, $model, $toModel)
    {
                $devis = Devis::find($request->devis_id);
                switch ($request->laravel_name) {
                    case 'hasMany':

                        // echo "hasMany<br>";

                        $model->create_hasMany_relation_with($request,$toModel);




                        break;

                    case 'belongsTo':
                        // echo "belongsTo<br>";
                        $model->create_belongsTo_relation_with($request,$toModel);


                        break;

                    case 'belongsToMany':
                        // echo "belongsToMany<br>";


                        $model->create_belongsToMany_relation_with($request,$toModel);

                        break;

                    case 'hasOne':
                        // echo "hasOne<br>";
                        # code...
                        break;

                    case 'morphedByMany':
                        // echo "morphedByMany<br>";
                        # code...
                        break;

                    case 'morphToMany':
                        // echo "morphToMany<br>";
                        # code...
                        break;

                    default:
                        # code...
                        break;
                }





    }



    public function remove()
    {


        $this->fields()->delete();
        $this->delete();

        return true;

    }


    public function has_constraint()
    {
        foreach ($this->fields as $field) {
            if ($field->has_constraint()) {
                return true;
            }
        }
        return false;
    }



    // public function isPivotScope($value)
    // {
    //   return !! $this->is_pivot;
    // }
/*
    public function get_constraints()
    {
        $collecionOfCollection = collect();

        foreach ($this->fields as $field) {
            echo "<h1>".$field->name."</h1>";
            $collecionOfCollection->push($field->get_constraints());
            dd($field->get_constraints());
        }

        $toReturn = collect();
        foreach ($collecionOfCollection as $collection) {
            foreach ($collection as $field) {
                echo $field->table->name;
                $toReturn->push($field);
            }
        }
        dd($toReturn);
        return $toReturn;
    }
*/


    public function hasVariousManyRelationToModel(Table $table)
    {
        //echo "hasVariousManyRelationToModel to model ".$table->model."id : ".$table->id;
        $array = [];
        foreach ($this->relationship() as $relation) {

            //var_dump($relation);
            if (in_array($table->id, $array) && count($array)>1) {
                //var_dump($array);
                return true;
            }
            if (in_array($relation['laravel_name'], ['hasMany', 'belongsToMany', 'morphToMany']) && $relation['to_model_id'] == $table->id) {
                $array[]=$relation['to_model_id'];

            }
        }
        // echo "false";
        return false;

    }



    public function hasVariousManyrelations()//pour savoir si il y a plusieurs relation hasMany
    {
        foreach ($this->relationship() as $relation) {
            if (in_array($relation['laravel_name'], ['hasMany', 'belongsToMany', 'morphToMany'])) {
                return true;
            }
        }
        return false;
    }

    public function countVariousManyrelations()//pour savoir si il y a plusieurs relation hasMany
    {
        $toReturn=0;
        foreach ($this->relationship() as $relation) {
            if (in_array($relation['laravel_name'], ['hasMany', 'belongsToMany', 'morphToMany'])) {
                $toReturn++;
            }
        }
        return $toReturn;
    }

    public function hasFixedRecords()
    {
        return (boolean) $this->raws->count();

        // return ! empty($this->raws);
    }



    public function VueTag($restMode, $forceName=null) //form  //list  //edit
    {
        $string = $forceName?: $this->model.ucfirst($restMode);
        //dd(str_slug(snake_case($string)));
        return str_slug(snake_case($string));
    }

    public function vueComponentName($restMode, $forceName=null)//form  //list  //edit
    {
        $string = $forceName?: $this->VueTag($restMode, $forceName);
        return camel_case($string);
    }

    public function vueComponentPath($restMode)//form  //list  //edit
    {

        // echo '<h1>'.$this->name.'/'.$restMode."-**--55*</h1>";

          if (request('navigation_mode') == 'vue_router') {

          $class = '\Organit\bootstrapping\Vue\NavigationMode\VueRouter\Create'.$restMode.'Component';
          $path = (new $class($this->devis, $this))->getPath();

        }elseif (request('navigation_mode') == 'laravel_vue') {
          $class = '\Organit\bootstrapping\Vue\NavigationMode\LaravelVue\Create'.$restMode.'Component';
          $path = (new $class($this->devis, $this))->getPath();
          // echo "needs path".$path;
          if ($restMode == 'form') {
          //  dd('path', $path);
          }


        }else {
          dd('#65Psq5thJRTi65sd5qsd navigation_mode non pris en charge');
          $path = (new \Organit\bootstrapping\Vue\NavigationMode\LaravelVue\CreateFormComponent($this->devis, $this))->getPath();

        }

        return str_replace('form.vue',strtolower($restMode) , $path);
    }


    public function vueComponentRelativePathTo(Table $table,$fromRestMode, $toRestMode ,$forceName=null, $debug=false)
    {
        //on est sur $this
//         $string_old = "The quick brown fox jumped over the lazy dog";
// $string_new = "The quick white rabbit jumped over the lazy dog";
// $diff = get_decorated_diff($string_old, $string_new);


// dd($diff);




        $toPath = $table->vueComponentPath($toRestMode);
        if (!ends_with($toPath, '.vue')) {
          $toPath = $toPath.'.vue';
        }


        $fromPath = $this->vueComponentPath($fromRestMode); //correctif car je perds le .vue
        if (!ends_with($fromPath, '.vue')) {

          $fromPath = $fromPath.'.vue';
        }
      //  dd($fromPath,$toPath);
        // dd('sss');

        // var_dump('->',$fromPath, 'to>',$toPath);


        // if ($table->name=='firms') {
          // print('<pre>');
          // var_dump($fromPath, $toPath);
          // print('</pre>');
          // var_dump('----------------');
        // }


        $relativePath = '';
        $relativePath =  get_string_diff_fot_relative_path($fromPath, $toPath, $table);
        if ($debug && $table->name !="countries") {
          // dd($relativePath);
          // dd($fromPath, $toPath);
        }



        return $relativePath;
        // $modulePath = $this->prefixPath.'resources/assets/js/'.$this->devis->app_name.'/';
        // $contractedPath = str_replace($modulePath ,'',$this->path());
        //
        //
        // $numnerOfSlashes = substr_count($contractedPath, '/');
        // $pathToReturn = '';
        // for ($i=0; $i < $numnerOfSlashes; $i++) {
        //   $pathToReturn .= '../';
        //
        // }
        // $pathToReturn .= 'modules/' ;



        return $fromPath."----".$toPath;












        $path = $table->vueComponentPath($toRestMode);
        $pieces = explode('/', $path);


        /*
                        	import userForm from '../form/form.vue'

                          import userList from './list.vue'
        */



        //
        // if ($this->name == 'users') {
        //   dd();
        // }
        //devis
        // dd();

        // $toSpace = _Namespace::where('name',$pieces[2])->first();
        $toSpace = $this->devis->namespaces()->where('name',$pieces[2])->first();

        // dd($toSpace->tables()->get()->lists('model'));
        $toTable = $toSpace->tables->where('model',$pieces[3])->first();
        //


// import userForm from '../form/form.vue'

// dd(
//       'path',$path,
//
//       '.' . str_replace('./spaces/'.$this->the_namespace->name.'/'.$this->model,'.', $path).'.vue',
//       '../form/form.vue');



        if ($toSpace->name == $this->the_namespace->name) {
          if ($this->name =="users" ) {
            // && $pieces[4]=='form'
          /*  dd( $pieces, $toSpace, $toTable,
                        $path,
                        './spaces/'.$this->the_namespace->name.'/'.$this->model,

                          '.' . str_replace('./spaces/'.$this->the_namespace->name.'/'.$this->model,'.', $path).'.vue'
);*/
          }
            return '.' . str_replace('./spaces/'.$this->the_namespace->name.'/'.$this->model,'.', $path).'.vue';
        }else {
            return '..'.str_replace('./spaces','.', $path).'.vue';
        }


    }




    public function hasHasManyRelation()
    {
        foreach ($this->relationship() as $relation) {
            if (in_array($relation['laravel_name'],['hasMany','belongsToMany'])){
                return true;
            }
        }
        return false;
    }

    public function hasHasManyRelationList()
    {
        $collection = collect();
        foreach ($this->relationship() as $relation) {
            if (in_array(trim($relation['laravel_name']),['hasMany'])){
                $collection->push($relation);
            }
        }
        return $collection;
    }
    public function belongsToManyRelationList()
    {
        $collection = collect();
        foreach ($this->relationship() as $relation) {
            if (in_array(trim($relation['laravel_name']),['belongsToMany'])){
                $collection->push($relation);
            }
        }
        return $collection;
    }


    public function hasBelongsToRelation()
    {
        foreach ($this->relationship() as $relation) {
            if (in_array($relation['laravel_name'],['belongsTo'])){
                return true;
            }
        }
        return false;
    }

    public function hasBelongsToManyRelation()
    {
        foreach ($this->relationship() as $relation) {
            if (in_array($relation['laravel_name'],['belongsToMany'])){
                return true;
            }
        }
        return false;
    }


    public function belongsToRelationList()
    {
        $collection = collect();
        foreach ($this->relationship() as $relation) {
            if (in_array(trim($relation['laravel_name']),['belongsTo'])){
                $collection->push($relation);
            }
        }
        return $collection;
    }









    public function methodList()
    {
        $toReturn=Relationship::with(['fromField'=>function($query){$query->where('table_id',$this->id);}])->get();
        return $toReturn;
    }






}
