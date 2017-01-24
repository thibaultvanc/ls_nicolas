<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client;
use App\Field;
use App\Table;
use App\Relationship;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RelationShipController extends Controller
{

    public function postUpdateBelongsToMany(Request $request)
    {
        // dd('$request->all()',$request->all() );

        $request->pivotTableName;
        $request->pivotTableId;
        $request->pivotRelation2Name;
        $request->pivotRelation2Id;


        $field = Field::find($request->pivotRelation2Id)->update(['name'=>$request->pivotRelation2Name]);


        Relationship::where('from_field_id', $request->pivotRelation2Id)->update(['from_field_name'=>$request->pivotRelation2Name]);
        Relationship::where('to_field_id', $request->pivotRelation2Id)->update(['to_field_name'=>$request->pivotRelation2Name]);

        $pivotTable = Table::find($request->pivotTableId)->update(['name'=>$request->pivotTableName]);

        Relationship::where('pivot_table_id', $request->pivotTableId)->update(['pivot_table_name'=>$request->pivotTableName]);


            // 
            //
            // dd('working on it !!' );
            // //update pivotTable Name
            //
            // //update pivot Field Name
            //




    }

}
