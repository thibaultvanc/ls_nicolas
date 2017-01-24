<?php



Route::get('testzoho', function(){


$PICAFLOR = Zoho::organization()->init('84525121'); //organization_id $contacts = $PICAFLOR->contacts()->index()['data'];

$PICAFLOR = Zoho::organization()->init('84525121');

return $contacts = $PICAFLOR->contacts()->index()['data'];




});













Route::get('generate_importation_for_bootrapping', function(){

    $schema = \DB::getDoctrineSchemaManager();
    $tables = $schema->listTables();

    $showText=true;
    $typeList = collect();

    // dd( $schema->listTables());
    $startTableId=1;

    foreach ($tables as $key=>$table) {
        $table_id = $key+$startTableId;
        $showText? "<h1>".$table->getName() . " </h1>":'';
        $showText? 'PRIMARY ies':'';
        $primaries=[];
        if ($table->getPrimaryKey() ) {
            #var_dump($table->getPrimaryKey() ->getColumns( ));
            $primaries=$table->getPrimaryKey()->getColumns();
        }
        echo $showText? 'FOREIGN':'';
        $foreignList=[];
        foreach ($table->getForeignKeys() as $name=>$foreign) {
            $foreignList[]=$foreign->getColumns( );
            $showText? var_dump($name):'';
            $showText? var_dump($foreign->getColumns( )):'';

        }
        echo "<br>";
        echo "<br>";
         echo "DB::table('tables')->insert([ 'devis_id' => 1, 'name'=>'".$table->getName()."','model'=>'".ucfirst(str_singular($table->getName()))."', 'namespace_id'=>1]);"."<br>";

         echo "<br>";

/*
_______  __   _______  __       _______       _______.
|   ____||  | |   ____||  |     |       \     /       |
|  |__   |  | |  |__   |  |     |  .--.  |   |   (----`
|   __|  |  | |   __|  |  |     |  |  |  |    \   \
|  |     |  | |  |____ |  `----.|  '--'  |.----)   |
|__|     |__| |_______||_______||_______/ |_______/
*/


        $showText? "<ul>":'';

        foreach ($table->getColumns() as $column) {
            if ($showText) {
                echo "<li>";
                echo ' - ' . $column->getName() . " - " . $column->getType()->getName() . "<br>";
                echo "</li>";
            }

            $typeList->push($column->getType()->getName());

            $is_primary = in_array($column->getName(), $primaries)? 1 : 0;
            $is_unsigned = $column->getUnsigned()? 1 : 0;
            $is_unsigned = $is_primary ? 0 : $is_unsigned;
            $is_incrementable = $column->getAutoincrement()? 1 : 0;
            $is_nullable = $column->getNotnull()? 1 : 0;

            switch ($column->getType()->getName()) {
                case 'integer':
                    $field_type_id = 1;
                    break;
                case 'string':
                    $field_type_id = 2;
                    break;
                case 'datetime':
                    $field_type_id = 5;
                    break;
                case 'text':
                    $field_type_id = 7;
                    break;
                case 'boolean':
                    $field_type_id = 13;
                    break;
                case 'blob':
                    $field_type_id = 10;
                    break;
                case 'decimal':
                    $field_type_id = 11;
                    break;
                case 'date':
                    $field_type_id = 5;
                    break;


            }
            if (in_array($column->getName(),['created_at','updated_at'])) {
                continue;
            }
            echo "DB::table('fields')->insert([ 'name'=>'".$column->getName()."',
                                                'placeholder'=>'".$column->getName()."',
                                                'is_primary'=>".$is_primary.",
                                                'is_unsigned'=>".$is_unsigned.",
                                                'is_nullable'=>".$is_nullable.",
                                                'is_incrementable'=>".$is_incrementable.",
                                                'table_id'=>".$table_id.",
                                                'field_type_id'=>".$field_type_id.",
                                            ]);"."<br>";

// 'is_index'=>".$startTableId.",
// 'is_unique'=>".$startTableId.",
// 'field_type_id'=>".$startTableId.",
// 'faker_method'=>".$startTableId.",
        }
        $showText? "</ul>":'';
    }

    //dd($typeList->unique());

});
