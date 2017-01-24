<?php




namespace Organit\Tools;



/**
 *
 */
class JsontoVueJs
{
  public $request;


  function __construct($request)
  {

    $this->request=$request;
    // $this->handle();
  }


  public function handle()
  {




      $script='';
      $toTransalte=[];


      // $this->request->object_name='contact';

      // $this->request->wrapper_open='<div>';
      // $this->request->wrapper_close='</div>';

      // $this->request->label_open='<b>';
      // $this->request->label_close='</b>';

      // $this->request->separator=' : ';

      // $this->request->is_translatable=true;
      $this->request->translate_file_name='Contact';

      $json2Object=json_decode($this->request->json);

      foreach ($json2Object as $key => $value) {

        $script.=$this->request->wrapper_open;

        $script.=$this->request->label_open;
        if ($this->request->is_translatable) {
          $script.='{{$t(\''.$this->request->translate_file_name.'.fields.'.$key.'.label\')}}';
        }else {
          $script.=$key;
        }
        $script.=$this->request->label_close;

        $script.=$this->request->separator;





        if (is_string($value) || is_integer($value) || gettype($value) == 'boolean' || gettype($value) == 'double') {
          $script.='{{'.$this->request->object_name.'.'.$key.'}}';

          $toTransalte[]=$key;

        }
        else if (is_Array($value) ) {
          // dd($key, $value);
          $script.="\n";
          $script.='<div class="well" v-for="'.str_singular($key).' in  '.$this->request->object_name.'.'.$key.'">'."\n";

            if (count($value)) {
              $toTransalte[$key]=[];
              foreach ($value[0] as $subKey => $subValue) {

                $toTransalte[$key][]=$subKey;

                $script.=$this->request->label_open;
                if ($this->request->is_translatable) {
                  $script.='{{$t(\''.$this->request->translate_file_name.'.fields.'.$key.'.'.$subKey.'.label\')}}';
                }else {
                  $script.=$subKey;
                }
                $script.=$this->request->label_close;

                $script.=$this->request->separator;


                $script.="\t".'{{'.str_singular($key).'.'.$subKey.'}}<br>'."\n";
                # code...
              }
              # code...
            }else {
              echo "Missing label / data for array, in array ".$key."<br>";
            }

          // $script.='array{{'.$key.'.'.str_singular($key).'}}';
          $script.='</div>';
          // $script.="\n";

        }
        else if (gettype($value) == 'object'){
          $script.='<div class="well">'."\n";

          $script.='<h4>'.$key.'</h4>'."\n";



          $toTransalte[$key]=[];
          foreach ($value as $objectKey => $valueKey) {

            $script.=$this->request->label_open;
            if ($this->request->is_translatable) {
              $script.='{{$t(\''.$this->request->translate_file_name.'.fields.'.$key.'.'.$objectKey.'.label\')}}';
            }else {
              $script.=$objectKey;
            }
            $script.=$this->request->label_close;
            $script.=$this->request->separator;
            $script.='{{'.$this->request->object_name.'.'.$key.'.'.$objectKey.'}}'."\n";

            // $toTransalte[$key]['object']=[];

            $toTransalte[$key][]=$objectKey;
          }
          // dd($script, $value);



          // dd($value);

          // dd($value);

            // if (count($value)) {
            //   $toTransalte[$key]=[];
            //   // foreach ($value[0] as $subKey => $subValue) {
            //   //
            //   //   $toTransalte[$key][]=$subKey;
            //   //
            //   //   $script.=$this->request->label_open;
            //   //   if ($this->request->is_translatable) {
            //   //     $script.='{{$t(\''.$this->request->translate_file_name.'.fields.'.$key.'.'.$subKey.'.label\')}}';
            //   //   }else {
            //   //     $script.=$subKey;
            //   //   }
            //   //   $script.=$this->request->label_close;
            //   //
            //   //   $script.=$this->request->separator;
            //   //
            //   //
            //   //   $script.="\t".'{{'.str_singular($key).'.'.$subKey.'}}<br>'."\n";
            //   //   # code...
            //   // }
            //   # code...
            // }else {
            //   echo "Missing label / data for array, in array ".$key."<br>";
            // }

          // $script.='array{{'.$key.'.'.str_singular($key).'}}';
          $script.='</div>';
            // dd('#1q2s1d# erruer : easy : one of the value is an object. PLease be sure that your json do non include an object ',gettype($value));
            # code...

        }
        // else if (gettype($value) == 'boolean'){
        //   dd('the value of  "' . $key . '" is a bollean');
        // }
        else {
          dd('the value of  "' . $key . '" is a "'.gettype($value).'" : no cevered here sorry');
        }
        $script.=$this->request->wrapper_close."\n";

      }


      // dd($toTransalte);




    if ($this->request->is_translatable) {
      $script.="\n\n\n";
        $script.= "<h1>franslate file : '.$this->request->translate_file_name.'</h1>";
      $script.='<?php'."\n";
      $script.='return ['."\n";

      $script.='\'fields\'=>['."\n";

                    foreach ($toTransalte as $key => $value) {

                      if (is_integer($key)) {
                        $script.='\''.$value.'\'=>[\'label\'=>\''.$value.'\', \'placeholder\'=>\''.$value.'\'],'."\n";
                      }
                      else  { //c'est un array ou un objet
                      // elseif (is_string($key)) { //c'est un array ou un objet

                        // if (count($value)) { //array

                          $script.='\''.$key.'\'=>[\'label\'=>\''.$key.'\', \'placeholder\'=>\''.$key.'\','."\n";

                          foreach ($value as $subKey => $subValue) {
                            $script.='\''.$subValue.'\'=> [\'label\'=>\''.$subValue.'\', \'placeholder\'=>\''.$subValue.'\'],'."\n";
                          }
                          $script.='],'."\n";


                        // }else { //object
                        //   $script.='\''.$key.'\'=>[\'label\'=>\''.$key.'\', \'placeholder\'=>\''.$key.'\','."\n";
                        //
                        //
                        //   dd($key, $value);
                        //
                        //   // foreach ($value as $subKey => $subValue) {
                        //   //   $script.='\''.$subValue.'\'=> [\'label\'=>\''.$subValue.'\', \'placeholder\'=>\''.$subValue.'\'],'."\n";
                        //   // }
                        //   $script.=']'."\n";
                        //
                        //
                        //
                        // }
                      }




                    }



                    $script.='],'."\n";


      $script.='];'."\n";

      // return $script;
      // return htmlspecialchars($script);
    // return      '<pre>'. htmlspecialchars($script) . '</pre>';
    }
    echo '<pre>';
    echo htmlspecialchars($script);
    echo '</pre>'."\n\n\n\n\n\n\n\n\n\n";

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

      // ec
  }
}
