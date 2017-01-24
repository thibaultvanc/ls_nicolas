<?php

function space()
{
    return ltrim(Request::route()->getPrefix(),'/')? : 'public';
}

function lastKey($array){
  $keys = array_keys($array);
  return end($keys);
}


//Find and format difference between two strings in PHP
//https://coderwall.com/p/3j2hxq/find-and-format-difference-between-two-strings-in-php
function get_string_diff_fot_relative_path($old, $new){ //$toTable
    $from_start = strspn($old ^ $new, "\0");
    // dd($toTable);
    // dd($from_start);
    // dd($old, $new);
    $from_end = strspn(strrev($old) ^ strrev($new), "\0");

    $old_end = strlen($old) - $from_end;
    $new_end = strlen($new) - $from_end;


    $start = substr($new, 0, $from_start);
    $end = substr($new, $new_end);
    $toReturn =   $new_diff = substr($new, $from_start, $new_end - $from_start).$end;


    $piecespath = explode('/',$toReturn);
    // $piecespath[0]=$toTable->model;

    // dd($piecespath);

    if ($old == $new) {
      return './'.last($piecespath);
    }

    // dd($piecespath);



    /*
    #v2#
    Cette correction regle un pb instantanné mais pas  un pb de fond. une refonte de ceci serait sous traitable à Nicolas MilleVille.
    En effet, j'ai 2 strings :

    "./spaces/Admin/Firm/form/basic.vue"
    "./spaces/Admin/FirmType/form/basic.vue"

    je dois trouver à partir de quel folder j'ai une différence => ici, l'exemple doit retourner  FirmType/form/basic.vue et NON Type/form/basic.vue



    */




    // print('<pre>');
    // var_dump('old', $old, 'new', $new);
    // var_dump('$piecespath',$piecespath);
    // var_dump('$toReturn',$toReturn);

      $prefixPath='';
      for ($i=0; $i < lastKey($piecespath); $i++) {
        $prefixPath .= '../';

      }

      // dd($piecespath);

      $toReturn = $prefixPath.implode('/', $piecespath);

    // print('</pre>');
    // var_dump('$toReturn',$toReturn);

    // dd($toReturn);


    return $toReturn;

          // dd($toReturn);

    }


//Find and format difference between two strings in PHP
//https://coderwall.com/p/3j2hxq/find-and-format-difference-between-two-strings-in-php
function get_decorated_diff($old, $new){
    $from_start = strspn($old ^ $new, "\0");
    $from_end = strspn(strrev($old) ^ strrev($new), "\0");

    $old_end = strlen($old) - $from_end;
    $new_end = strlen($new) - $from_end;


    $start = substr($new, 0, $from_start);
    $end = substr($new, $new_end);
    return  $new_diff = substr($new, $from_start, $new_end - $from_start).$end;


    $old_diff = substr($old, $from_start, $old_end - $from_start);
    // dd($new_diff);

    $new = "$start<ins style='background-color:#ccffcc'>$new_diff</ins>$end";
    $old = "$start<del style='background-color:#ffcccc'>$old_diff</del>$end";
    return array("old"=>$old, "new"=>$new);
}
