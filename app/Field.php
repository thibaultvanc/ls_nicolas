<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Field;
use App\Record;

class Field extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fields';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'type', 'is_unique', 'is_fillable', 'is_unsigned', 'is_index', 'table_id'];
    protected $guarded = [];


    public function table()
    {
        return $this->belongsTo('App\Table');
    }

    public function type()
    {
        return $this->belongsTo(FieldType::class, 'field_type_id');
    }


    public function records()
    {
        return $this->hasMany(Record::class);
    }


    public function relations()
    {
        return $this->belongsToMany(Field::class, 'relationships', 'from_field_id', 'to_field_id')
            ->withPivot(['from_field_name', 'to_field_name', 'laravel_name', 'pivot_table_name', 'pivot_table_id', 'to_model','on_field_id', 'method']);
    }



    // public function newPivot(Model $parent, array $attributes, $table, $exists)
    // {
    //     if ($parent instanceof Field) {
    //
    //         // dd('$attributes',$attributes );
    //
    //
    //         // return new Relationship([]);
    //         // $pivot =  \App\Relationship::where('from_field_id', $attributes['']);
    //         return new \App\Relationship($parent, $attributes, $table, $exists);;
    //     }
    //
    //     return parent::newPivot($parent, $attributes, $table, $exists);
    // }







    // public function relations_to()
    // {
    //     return $this->belongsToMany(Field::class, 'relationships','to_field_id', 'from_field_id')
    //         ->withPivot(['from_field_name', 'to_field_name', 'laravel_name', 'pivot_table_name']);
    // }

    public function has_relation() //$field is a TO_FIELD
    {
        return $this->relations()->exists();
    }
//

    public function relationBelongsTo()
    {
        // dd($field->with('relation')->where('laravel_name', 'belongsTo')->get());
        return $this->relations()->wherePivot('laravel_name', 'belongsTo');
    }







    /*
    ** done la liste des champs que l'on affiche dans les formulaies, les show view ...
    */
    public function ScopeForFormView($query)
    {
      return $query->where('is_incrementable', 0)->whereNotIn('name', ['created_at', 'updated_at', 'updated_by'])->orderBy('order', 'asc');

    }


    /*
    ** done la liste des champs que l'on affiche dans les formulaies, les show view ...
    */
    public function ScopeForShowView($query)
    {
      return $query->where('is_incrementable', 0)->orderBy('order', 'asc');

    }




    public function getLaravelValidation($mode) //$mode : 'update' or 'store'
    {
      $manuel = explode('|',$this->laravel_validation_rules);

      $automatique = [];
      if ($this->field_type_id == 4) {
        $automatique[] = 'email';
      }
      if ($this->is_unique ) {
        if ($mode=='create') {
          $automatique[] = 'unique:'.$this->table()->first()->tableName;
        }
      }
      if ($this->has_constraint() && !$this->nullable) {
        $automatique[] = 'required';
      }
      if ($this->is_on_foreign_label) {
        $automatique[] = 'required';
      }
      if ($this->field_type_id == 3) { //password
        $automatique[] = 'confirmed';
        $automatique[] = 'required';
        $automatique[] = 'min:6';
      }


      if ($this->is_incrementable) { //last
        $automatique = [];

      }

      $result = array_unique(array_merge($manuel, $automatique));

      return trim(implode('|', $result), '|');

    }


    // public function has_constraint_no_nullable() //$field is a TO_FIELD
    // {
    //     foreach ($this->table()->first()->relationship() as $relation) {
    //         // dd($this->name, $this->table->name);
    //         if (in_array($relation['laravel_name'], ['belongsTo'])) {
    //
    //
    //
    //         }
    //     }
    //     return false;
    // }



    public function has_constraint() //$field is a TO_FIELD
    {
        foreach ($this->table()->first()->relationship() as $relation) {
            // dd($this->name, $this->table->name);
            if (in_array($relation['laravel_name'], ['belongsTo'])) {
                return true;
            }
        }
        return false;
    }




    public function getLabelAttribute($value)
    {
        if (empty($value)) {
            return ucfirst($this->name);
        }

        if (ends_with($value, '_id')) {
            $value = substr($value, 0,-3);
        }
        return ucfirst(str_replace('_', ' ', $value));
    }

    public function getPlaceholderAttribute($value)
    {
        if (empty($value)) {
            if (empty($this->label)) {
                return $this->label;
            }
            return $this->name;
        }
        return $value;
    }

    public function randomFixedRecord()
    {
        $table = $this->table()->first();
        $primary = $table->getPrimaries()->first();

        $coll = collect();
        foreach ($table->raws as $raw) {
            $aa = $raw->records->where('field_id', $primary->id)->first();
            $coll->push($aa);
        }
        return $coll->lists('value');

        // $recordtoReturn =  $coll->random();
        // $recordPrimary = Record::where('raw_id', $recordtoReturn->raw_id)->where('field_id',$primary->id)->first();
        // return $recordPrimary->value;
    }



    public function isRequired()
    {
        if ($this->is_required) {
            return true;
        }
        if ($this->has_constraint()) {
            return true;
        }
        if ($this->laravel_validation_rules != '') {
          $pieces = explode('|', $this->laravel_validation_rules);
          return in_array('required', $pieces);
        }

        return false;
    }


    public function hasValidation()
    {
        if ($this->isRequired()) {
            return true;
        }
        if ($this->laravel_validation_rules != '') {
          return true;
        }
        return false;
    }

    public function vueValidationVariable()
    {
        return strtolower(snake_case($this->name));
    }




    public function vueValidateField()
    {
      return '';

      //abandonné

        // if ( ! $this->hasValidation()) {
        //     return '';
        // }
        // $toReturn='v-validate:'.$this->vueValidationVariable().'="{';//strtolower very important for vue validation
        // if ($this->isRequired()) {
        //     $toReturn.='required:true, ';
        // }
        //
        // $toReturn = trim(trim($toReturn), ",");
        // $toReturn.='}"';
        // return $toReturn;
    }




    public function vueValidationErrors()
    {
        $toReturn='';
        // if ($this->isRequired()) {
        //     $toReturn.='<p v-if="$validation1.'.$this->vueValidationVariable().'.required">'.$this->label.' is required</p>';
        // }
        $toReturn.='<span class="help is-danger" v-if="form.errors.has(\''.$this->name.'\')" v-text="form.errors.get(\''.$this->name.'\')"></span>';
        return $toReturn;

    }



    public function hasManyRelationtoTheSameTable()
    {
        $list=[];

        $relationShipList = $this->table()->first()->relationship();

        //get the arrayof to_model_id
        foreach ($relationShipList as $relation) {
            if (in_array($relation['laravel_name'], ['hasMany', 'belongsToMany']) ) {
                $list[] = $relation['to_model_id'];
            }
        }


        $i=0;
        foreach ($relationShipList as $relation) {
            if (in_array($relation['laravel_name'], ['hasMany', 'belongsToMany']) ) {
                if (in_array($relation['to_model_id'], $list)) {
                    $i++;
                }
                //$list[]=$relation['to_model_id'];
            }
        }

        if ($i<=1) {
            return false;
        }
        return true;
    }


    //
    // public function RelationMethodNametoField(Field $field)
    // {
    //     # code...
    // }
    //
    //

    //
    // public function get_constraints() //$field is a TO_FIELD
    // {
    //     $collection = collect();
    //     $this->with('relation')->wherePivot('laravel_name', 'belongsTo')->get();
    //     foreach ($this->with('relation')->wherePivot('laravel_name', 'belongsTo')->get() as $relation) {
    //         dd($relation);
    //         if (in_array($relation['laravel_name'], ['belongsTo'])) {
    //             $collection->push( Field::find($relation['to_field_id']) );
    //         }
    //     }
    //     return $collection;
    // }




//
// public function getforeignLabel()
// {
//
// }




    // public function is_primary_key()
    // {
    //     return $this->is_primary;
    // }

}
