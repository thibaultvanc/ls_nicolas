<?php
namespace Organit\bootstrapping;

use File;
use App\Field;
use App\Table;

class Core
{
  public $tab0 = "";
  public $tab1 = "\t";
  public $tab2 = "\t\t";
  public $tab3 = "\t\t\t";
  public $tab4 = "\t\t\t\t";
  public $tab5 = "\t\t\t\t\t";
  public $tab6 = "\t\t\t\t\t\t";
  public $tab7 = "\t\t\t\t\t\t\t";
  public $tab8 = "\t\t\t\t\t\t\t\t";
  public $languageList= [ 'en', 'fr', 'ja' ];

  // public $menuMode = 'vueMenu'; // vueMenu // laravelMenu


  // public function menuFileNameUsed()
  // {
  //     return snake_case($this->menuMode);
  // }


  function renderUsesStatements($useList) // to sort array by characters length
  {
    usort($useList, function($a, $b) {
      if($a == $b) return 0;
      return (strlen($a) < strlen($b) ? -1 : 1);
    });

    $toReturn="\n";
    $useList = array_unique($useList);
    foreach ($useList as $use) {
      $toReturn.='use '.$use.";\n";
    }
    $toReturn.="\n";

    // var_dump($useList);
    return $toReturn;;
  }


  public function createDirectory($app_name, $laravelPath, $debug=false)
  {
    //var_dump($laravelPath);

    if ( ! File::isDirectory($laravelPath)) {
      if ($debug) {
        // var_dump($laravelPath.' is not a dir --> make direcory') ;
        // var_dump($laravelPath);
        // die('++');
      }
      $reirectoryCreated = File::makeDirectory($laravelPath, 0777);
      if ($debug) {
        //$reirectoryCreated = File::makeDirectory('../app/Models/Middle/Backoffice');
        // echo '$reirectoryCreated = ';
        // var_dump($reirectoryCreated) ;
        //die('++');
      }


    }
    $bootstrappingPath = str_replace("../app", "uploads/bootstrapping/".$app_name."/app", $laravelPath);
    $bootstrappingPath =  str_replace("\\", "/", $bootstrappingPath);
    //dd($bootstrappingPath);

    // var_dump('here');
    // var_dump($bootstrappingPath);
    // var_dump('herestop');

    // if ( ! File::isDirectory($bootstrappingPath)) {
    //     File::makeDirectory($bootstrappingPath, 0777);
    // }

    // var_dump('-------**----------');

  }

  public function createFile($laravelPathpathFile, $app_name, $script, $debug=false)
  {
    // var_dump($script);
    // var_dump($laravelPathpathFile);
    $pieces = explode('/',$laravelPathpathFile);
    unset ($pieces[count($pieces)-1]);

    $dir = implode('/',$pieces);

    $this->createDirectory($app_name,$dir, $debug);

    if ($debug) {
      // var_dump('fct create direcory passed');
    }

    // var_dump('------------');
    // echo "------------$laravelPathpathFile--------------------";
    // var_dump($laravelPathpathFile);
    try {
      //var_dump('----------------------------<br>');
      //var_dump($laravelPathpathFile);
      $bytes_written = File::put($laravelPathpathFile,$script);
      if ($bytes_written === false)
      {
        die("Error writing to file".$laravelPathpathFile);
      }
    } catch (Exception $e) {
      dd('error created file in laravel. here the path we want to add :'. $laravelPathpathFile);
    }

    // echo "**************";

    $bootstrappingPath='';
    if ( starts_with($laravelPathpathFile, '../app')) {
      $bootstrappingPath = str_replace("../app", "uploads/bootstrapping/".$app_name."/app", $laravelPathpathFile);
    }
    else if ( starts_with($laravelPathpathFile, '../resources')) {
      $bootstrappingPath = str_replace("../resources", "uploads/bootstrapping/".$app_name."/resources", $laravelPathpathFile);
    }
    else if ( starts_with($laravelPathpathFile, '../database')) {
      $bootstrappingPath = str_replace("../database", "uploads/bootstrapping/".$app_name."/database", $laravelPathpathFile);
    }
    else if ( starts_with($laravelPathpathFile, '../tests')) {
      $bootstrappingPath = str_replace("../tests", "uploads/bootstrapping/".$app_name."/tests", $laravelPathpathFile);
    }

    $bootstrappingPath =  str_replace("\\", "/", $bootstrappingPath);
    if ($debug) {
      //var_dump($bootstrappingPath);
    }
    if ($bootstrappingPath != '') {
      try {
        //$bytes_written = File::put($bootstrappingPath,$script); ##### desactivating
        if ($bytes_written === false)
        {
          die("Error writing to file".$laravelPathpathFile);
        }
      } catch (Exception $e) {
        dd('error created file in Public/bootstrapping. here the path we want to add :'. $bootstrappingPath);

      }

    }

  }



  public function languagePath()
  {
    return $this->showAppName ? $this->devis->app_name.'.' : ''; //depends on export mode (zip or here)
  }




  public function VueformType(Field $field)
  {

    $asterix='';
    if ($field->isRequired()) {
      $asterix='<span class="text-danger">*</span>';
    }
    $table = $field->table;
    $toReturn= '

    <div class="form-group '.$field->name.'">
    <div class="col-md-12 col-sm-12 ">
    <label for="'.$field->name.'" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">{{ $t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.label\') }} '.$asterix.'</span>
      <a href="/admin/devis/'.$this->devis->id.'/tables/'.$this->table->id.'/fields/'.$field->id.'/edit" v-show="larastrapEditionMode">
          {{ $t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.label\') }} '.$asterix.'
      </a>

    </label>
    <div class="col-sm-10 "> '."\n";

    $has_relation = false;

    foreach ($field->relations as $relation) {

      if (in_array($relation->pivot->laravel_name , ['belongsTo'])) {

        if ($field->table->is_api) { #v2# Amioler
          $toReturn.= '
          <input type="text" class="form-control" name="'.$field->name.'"
                  v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'>'."\n";
          if ($field->hasValidation()) {
            $toReturn.='
            <div class="errors">
            '.$field->vueValidationErrors().'
            </div>'."\n";
          }
          continue;
        }


        $has_relation = true;
        $related_model = \App\Field::find($relation->pivot->to_field_id)->table;
        $toReturn.='

        <div v-if="!showForm_'.$related_model->variable.'">

        <el-select v-model="form.'.$field->name.'" :placeholder="$t(\'core.select\')" :no-data-text="$t(\'core.noResults\')" :no-match-text="$t(\'core.noResults\')" size="large" popper-class="fullwidth">
          <el-option
            v-for="'.$related_model->model.' in '.$related_model->model.'List"
            :label="';
            foreach ($related_model->fields()->where('is_on_foreign_label',1)->orderBy('order', 'asc')->get() as $foreignLabel) {
              $toReturn.=$related_model->model.'.'.$foreignLabel->name.' + \' \' +';
            }
            $toReturn=trim($toReturn, '+');
            $toReturn.='" :value="'.$related_model->model.'.'.$related_model->primary().'">
          </el-option>
        </el-select>

        <el-button v-if="!showForm_'.$related_model->variable.'"
        @click.prevent="showForm_'.$related_model->variable.'= ! showForm_'.$related_model->variable.'"
        tooltip="Add" type="normal" color="primary" class="pull-right" >
        {{ $t(\'core.add\') }}
        </el-button>

        ';



        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>
          </div>'."\n";
        }
        $toReturn.='
        <span v-else>
        <input type="hidden" v-model="created'.$related_model->model.'.'.$related_model->primary().'"  >
        </span>';




        // $toReturn.="<a target='_blank' class='pull-right btn btn-sm btn-success' href='{{route('".$basePath.".create')}}'><i class='fa fa-plus'></i> Create a ".$related_model->variable."</a>"."\n";
        $toReturn.='


        <el-button v-if="showForm_'.$related_model->variable.'"
        @click.prevent="showForm_'.$related_model->variable.'= ! showForm_'.$related_model->variable.'"
        tooltip="cancel" type="normal" color="default" class="pull-right" >{{ $t(\'core.cancel\') }}</el-button>

        <div class="well" v-if="showForm_'.$related_model->variable.'">

        <div v-if="created'.$related_model->model.'.'.$related_model->primary().'">'."\n";
        $toReturn.=$this->tab7.'<b>';
        foreach ($related_model->fields()->where('is_on_foreign_label',1)->orderBy('order', 'asc')->get() as $foreignLabel) {
          $toReturn.='
          {{ created'.$related_model->model.'.'.$foreignLabel->name.' }} ';
        }
        $toReturn.='
        </b>

        </div>
        <div v-else>
        <'.$related_model->VueTag('form').' force-mode="create" :created-object.sync="created'.$related_model->model.'" ></'.$related_model->VueTag('form').'>
        </div>
        </div>
        '."\n";
        //:created-id.sync="object[\''.$field->name.'\']"


      }elseif ($relation->pivot->laravel_name == 'belongsToMany') {
        $has_relation = true;
        $related_model = \App\Table::find($relation->pivot->to_model);
      }
    }


    if (!$has_relation) {
      $toReturn.="\t\t";
      switch ($field->type->name) {
        case 'integer':
        case 'decimal':
        case 'bigint':
        $toReturn.= '
        <input type="number" class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'>'."\n";

        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }

        break;

        case 'string':
        $toReturn.= '
        <input type="text" class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'>'."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;

        case 'password':
        $toReturn.= '
        <input type="password" class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'>'."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>

            '."\n";
        }
        break;

        case 'email':
        $toReturn.= '
        <input type="email" class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'>'."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;

        case 'date':
        $toReturn.=
        '
          <!--<input type="number" class="form-control " name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" >-->
          <el-date-picker
            v-model="form.'.$field->name.'"
            type="date"
            format="yyyy/MM/dd"
            :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')">
          </el-date-picker>
        '."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;
        case 'dateTime':
        case 'datetime':

        $toReturn.=
        '
          <!--<input type="number" class="form-control " name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" >-->
          <el-date-picker
             v-model="form.'.$field->name.'"
             type="datetime"
              format="yyyy/MM/dd HH:mm"
             :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')">
           </el-date-picker>
         </div>
        '."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;

        case 'time':
        $toReturn.=
        '
          <!--<input type="number" class="form-control " name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" >-->
          <el-time-select
            v-model="form.'.$field->name.'"
            :picker-options="{
              start: \'08:30\',
              step: \'00:15\',
              end: \'18:30\'
            }"
            :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')">
          </el-time-select>

        '."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;


        case 'text':
        case 'mediumtext':
        case 'longtext':
        $toReturn.= '
        <textarea class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" ::placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'></textarea>'."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;





        case 'binary':
        $toReturn.= '
        <textarea class="form-control" name="'.$field->name.'" v-model="form.'.$field->name.'" :placeholder="$t(\''.$this->languagePath().$table->model.'.fields.'.$field->name.'.placeholder\')" '.$field->vueValidateField().'></textarea>'."\n";
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
        }
        break;




        case 'boolean':

        $toReturn.= '
        <!--
        <label class="radio-inline">
        <input name="'.$field->name.'" v-model="form.'.$field->name.'" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="'.$field->name.'" v-model="form.'.$field->name.'" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.'.$field->name.'" label="" ></ui-switch>-->

        <el-switch
        v-model="form.'.$field->name.'"
        @click="fetchObject"
        name="'.$field->name.'"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>';
        if ($field->hasValidation()) {
          $toReturn.='
          <div class="errors">
          '.$field->vueValidationErrors().'
          </div>'."\n";
          // @click="form.errors.clear($event.target.name)"
        }
        $toReturn.='';

        break;



      }
    }
    // $toReturn.=" </div><p class='text-danger'>@if (\$errors->has('".$field->name."')) <span class='error'>{{ \$errors->first('".$field->name."') }}</span> @endif</p></div> "."\n\n";
    $toReturn.='
    </div>
    </div>
    </div>
    '."\n\n";


    if ($field->type->name == 'password') {
    $toReturn.='
      <div class="form-group '.$field->name.'">
        <div class="col-md-12 col-sm-12 ">
          <label for="'.$field->name.'" class="col-sm-2 control-label">
                 {{$t(\'core.confirmation\')}}
          </label>
          <div class="col-sm-10 ">
              <input type="password" class="form-control" name="'.$field->name.'_confirmation" v-model="form.'.$field->name.'_confirmation" :placeholder="$t(\'core.confirmPassword\')">

          </div>
        </div>
      </div>';
    }




    return $toReturn;



  }




  public function VueShowType(Field $field)
  {

    $toReturn='';

    $field->load('type');

    if ($field->relationBelongsTo()->exists()) {

      $related_model = $field->relationBelongsTo()->first()->table;
      $defaultFieldName = strtolower(snake_case($related_model->model)).'_id';

      if ($field->name == $defaultFieldName) {
          if ($related_model->variable == 'update') {
              $methodName= 'updat';
          }else {
              $methodName= $related_model->variable;
          }
      }else{
          $methodName = camel_case($field->name);
      }




      if ($field->table->is_api) { #v2# Amioler
        $toReturn.= ' {{object.'.$field->name.'}} '."\n";
      }
      else {
        foreach ($related_model->fields()->where('is_on_foreign_label',1)->orderBy('order', 'asc')->get() as $foreignLabel) {



          $toReturn.='
          {{ object.'.snake_case($methodName).'.'.$foreignLabel->name.' }}
          '."\n";
        }

      }




    }else{
      // $toReturn.=$this->VueShowType($field);




    $toReturn.="\t\t";
    switch ($field->type->name) {
      case 'integer':
      case 'decimal':
      case 'bigint':
        $toReturn.= ' {{object.'.$field->name.' }} '."\n";
      break;

      case 'string':
      case 'email':
        $toReturn.= ' {{object.'.$field->name.'}} '."\n";
      break;

      case 'password':
        $toReturn.= '*****'."\n";
      break;

      case 'dateTime':
      case 'datetime':
      case 'date':
        $toReturn.= ' {{object.'.$field->name.'}} '."\n";

      break;
      case 'time':
        $toReturn.= ' {{object.'.$field->name.'}} '."\n";

      break;


      case 'text':
      case 'mediumtext':
      case 'longtext':
        $toReturn.= ' {{object.'.$field->name.'}} '."\n";
      break;





      case 'binary':

      break;




      case 'boolean':
        $toReturn.= ' <i :class="{\'el-icon-circle-check\' : object.'.$field->name.', \'el-icon-circle-cross\' : !object.'.$field->name.', }" ></i> '."\n";
      break;


      }


    }

    // $toReturn.=" </div><p class='text-danger'>@if (\$errors->has('".$field->name."')) <span class='error'>{{ \$errors->first('".$field->name."') }}</span> @endif</p></div> "."\n\n";




    return $toReturn;



  }



  public function specialViewList(Table $table)
  {
    $array=[];
    if ($table->name == 'vehicles') {
      $array[]='holding-list';
      $array[]='indirect-holding-list';
      $array[]='holding-analysis';
      $array[]='org-chart';
      $array[]='operation-list';
      $array[]='shares_owned';
      $array[]='shareholders-list';
      $array[]='bank-account';
      $array[]='cash-management';
      $array[]='valuation';
    }



    return $array;
  }











}
