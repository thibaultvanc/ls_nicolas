<?php
namespace Organit\bootstrapping\Migrations;

use File;
use App\Table;
use App\Devis;
use Organit\bootstrapping\Core;

class ManageOrder extends Core
{

    protected $devis;

	function __construct(Devis $devis)
	{
        $this->devis=$devis;
	}



    public function handle()
    {

        $this->initializeArray();

        foreach ($this->devis->tables as $table) {
            //has_constraint
            if ($table->has_constraint()) {
                var_dump($table. ' HAS CONSTRAINTS');
                foreach ($table->getConstraintList() as $field) {
                    $field->name.'<br>';
                }

            }
        }



    }
}
