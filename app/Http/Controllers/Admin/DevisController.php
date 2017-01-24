<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Devis;
use App\Table;
use App\Field;
use App\Relationship;
use App\Pointage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use PDF;
use View;
use Mail;
use App\_Namespace;

class DevisController extends Controller
{





    public function index()
    {
        $devis = Devis::orderBy('updated_at', 'desc')->paginate(50);

        return view('admin.devis.index', compact('devis'));
    }





    public function create()
    {
        $mode = 'create';




        return view('admin.devis.create', compact('mode'));
    }





    public function store(Request $request)
    {

        // dd('controller say hello');

        $devis = Devis::create($request->all());

        $publicSpace = _Namespace::create(['devis_id'=> $devis->id, 'theme_id'=>4, 'name'=>'web']);
        $space = _Namespace::create(['devis_id'=> $devis->id, 'theme_id'=>4, 'name'=>'admin']);

        if (strtolower($request->app_name) == 'new') {
          dd('Choisir un autre app_name. Celui là pse pb dans la génération du nom');
        }



        //create module usersPermissions
        $tableUser = Table::create(['name'=>'users', 'model'=>'User', 'namespace_id'=>$space->id, 'devis_id'=>$devis->id, 'is_settings'=>1]);
        $tableUserPrimary = Field::create(['name'=>'id', 'label'=>'id', 'placeholder'=>'id', 'table_id'=>$tableUser->id, 'field_type_id'=>1, 'is_primary'=>1, 'is_incrementable'=>1]);
        Field::create(['name'=>'firstname', 'label'=>'First Name', 'placeholder'=>'First Name', 'table_id'=>$tableUser->id, 'field_type_id'=>2, 'is_on_foreign_label'=>true]);
        Field::create(['name'=>'lastname', 'label'=>'Name', 'placeholder'=>'Name', 'table_id'=>$tableUser->id, 'field_type_id'=>2, 'is_on_foreign_label'=>true]);
        Field::create(['name'=>'phone', 'label'=>'Phone', 'placeholder'=>'Phone', 'table_id'=>$tableUser->id, 'field_type_id'=>2]);
        Field::create(['name'=>'email', 'label'=>'email', 'placeholder'=>'email', 'table_id'=>$tableUser->id, 'field_type_id'=>4]);
        // Field::create(['name'=>'birthdate', 'label'=>'birthdate', 'placeholder'=>'birthdate', 'table_id'=>$tableUser->id, 'field_type_id'=>14]);

        Field::create(['name'=>'password', 'label'=>'password', 'placeholder'=>'password', 'table_id'=>$tableUser->id, 'field_type_id'=>3, 'is_on_index_view'=>0]);
        Field::create(['name'=>'remember_token', 'label'=>'remember_token', 'placeholder'=>'remember_token', 'table_id'=>$tableUser->id, 'field_type_id'=>2, 'is_on_index_view'=>0]);
        Field::create(['name'=>'is_admin', 'label'=>'is admin', 'placeholder'=>'admin', 'table_id'=>$tableUser->id, 'field_type_id'=>13]);


        $tableRoleUser = Table::create(['name'=>'role_user', 'model'=>'RoleUser', 'namespace_id'=>$space->id, 'devis_id'=>$devis->id, 'is_menu'=>false, 'is_settings'=>true, 'is_pivot'=>1,  'is_settings'=>true,]);
        $tableRoleUserPrimary = Field::create(['name'=>'id', 'label'=>'id', 'placeholder'=>'id', 'table_id'=>$tableRoleUser->id, 'field_type_id'=>1, 'is_primary'=>1, 'is_incrementable'=>1, 'is_unsigned'=>true]);
        $tableRoleUser_userid = Field::create(['name'=>'user_id', 'label'=>'user_id', 'placeholder'=>'user_id', 'table_id'=>$tableRoleUser->id, 'field_type_id'=>1, 'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false]);
        $tableRoleUser_roleid = Field::create(['name'=>'role_id', 'label'=>'role_id', 'placeholder'=>'role_id', 'table_id'=>$tableRoleUser->id, 'field_type_id'=>1, 'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false]);


        $tableRole = Table::create(['name'=>'roles', 'model'=>'Role', 'namespace_id'=>$space->id, 'devis_id'=>$devis->id, 'is_settings'=>1, 'is_menu'=>false]);
        $tableRolePrimary = Field::create(['name'=>'id', 'label'=>'id', 'placeholder'=>'id', 'table_id'=>$tableRole->id, 'field_type_id'=>1, 'is_primary'=>1, 'is_incrementable'=>1]);
        Field::create(['name'=>'name', 'label'=>'name', 'placeholder'=>'name', 'table_id'=>$tableRole->id, 'field_type_id'=>2, 'is_on_foreign_label'=>true]);
        Field::create(['name'=>'label', 'label'=>'label', 'placeholder'=>'label', 'table_id'=>$tableRole->id, 'field_type_id'=>2, 'is_nullable'=>1]);

        Relationship::create([
                            'from_field_id'=>$tableUserPrimary->id,
                            'to_field_id'=>$tableRoleUser_userid->id,
                            'from_field_name'=>$tableUserPrimary->name,
                            'to_field_name'=>$tableRoleUser_userid->name,
                            'laravel_name'=>'belongsToMany',
                            'method'=>'roles',
                            'to_model'=>$tableRole->id,
                            'on_field_id'=>$tableRolePrimary->id,
                            'pivot_table_name'=>$tableRoleUser->name,
                            'pivot_table_id'=>$tableRoleUser->id,
        ]);


        Relationship::create([
                            'from_field_id'=>$tableRolePrimary->id,
                            'to_field_id'=>$tableRoleUser_roleid->id,
                            'from_field_name'=>$tableRolePrimary->name,
                            'to_field_name'=>$tableRoleUser_roleid->name,
                            'laravel_name'=>'belongsToMany',
                            'method'=>'users',
                            'to_model'=>$tableUser->id,
                            'on_field_id'=>$tableUserPrimary->id,
                            'pivot_table_name'=>$tableRoleUser->name,
                            'pivot_table_id'=>$tableRoleUser->id,
        ]);






        $tablePermission = Table::create(['name'=>'permissions', 'model'=>'Permission', 'namespace_id'=>$space->id, 'devis_id'=>$devis->id, 'is_settings'=>1, 'is_menu'=>false]);
        $tablePermissionPrimary = Field::create(['name'=>'id', 'label'=>'id', 'placeholder'=>'id', 'table_id'=>$tablePermission->id, 'field_type_id'=>1, 'is_primary'=>1, 'is_incrementable'=>1]);
        Field::create(['name'=>'name', 'label'=>'name', 'placeholder'=>'name', 'table_id'=>$tablePermission->id, 'field_type_id'=>2, 'is_on_foreign_label'=>true]);
        Field::create(['name'=>'label', 'label'=>'label', 'placeholder'=>'label', 'table_id'=>$tablePermission->id, 'field_type_id'=>2, 'is_nullable'=>1]);



        $tablePermissionRole = Table::create(['name'=>'permission_role', 'model'=>'PermissionRole', 'namespace_id'=>$space->id, 'devis_id'=>$devis->id, 'is_menu'=>false, 'is_pivot'=>1,  'is_settings'=>true,]);
        Field::create(['name'=>'id', 'label'=>'id', 'placeholder'=>'id', 'table_id'=>$tablePermissionRole->id, 'field_type_id'=>1, 'is_primary'=>1, 'is_incrementable'=>1, 'is_unsigned'=>true]);
        $tablePermissionRole_permission_id = Field::create(['name'=>'permission_id', 'label'=>'permission_id', 'placeholder'=>'permission_id', 'table_id'=>$tablePermissionRole->id, 'field_type_id'=>1, 'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false]);
        $tablePermissionRole_role_id = Field::create(['name'=>'role_id', 'label'=>'role_id', 'placeholder'=>'role_id', 'table_id'=>$tablePermissionRole->id, 'field_type_id'=>1, 'is_primary'=>true,'is_unsigned'=>true, 'is_incrementable'=>false]);


          Relationship::create([
                              'from_field_id'=>$tableRolePrimary->id,
                              'to_field_id'=>$tablePermissionRole_role_id->id,
                              'from_field_name'=>$tableRolePrimary->name,
                              'to_field_name'=>$tablePermissionRole_role_id->name,
                              'laravel_name'=>'belongsToMany',
                              'method'=>'permissions',
                              'to_model'=>$tablePermission->id,
                              'on_field_id'=>$tablePermissionPrimary->id,
                              'pivot_table_name'=>$tablePermissionRole->name,
                              'pivot_table_id'=>$tablePermissionRole->id,
          ]);


          Relationship::create([
                              'from_field_id'=>$tablePermissionPrimary->id,
                              'to_field_id'=>$tablePermissionRole_permission_id->id,
                              'from_field_name'=>$tablePermissionPrimary->name,
                              'to_field_name'=>$tablePermissionRole_permission_id->name,
                              'laravel_name'=>'belongsToMany',
                              'method'=>'roles',
                              'to_model'=>$tableRole->id,
                              'on_field_id'=>$tableRolePrimary->id,
                              'pivot_table_name'=>$tablePermissionRole->name,
                              'pivot_table_id'=>$tablePermissionRole->id,
          ]);








        Session::flash('flash_message', 'Devis added!');

        return redirect('admin/devis');
    }





    public function show($id)
    {
        $devi = Devis::findOrFail($id);

        return view('admin.devis.show', compact('devi'));
    }




    public function edit($id)
    {
        $mode = 'edit';

        $devis = Devis::findOrFail($id);

        $pointages = $devis->pointages()->orderBy('id', 'desc')->get();
        $sumPointagePerType = $devis->sumPointagePerType();

        return view('admin.devis.edit', compact('devis', 'mode', 'pointages', 'sumPointagePerType'));
    }



    public function update($id, Request $request)
    {
        if (strtolower($request->app_name) == 'new') {
          dd('Choisir un autre app_name. Celui là pse pb dans la génération du nom');
        }

        $devi = Devis::findOrFail($id);
        $request->request->remove('myFile');
        $devi->update($request->all());

        Session::flash('flash_message', 'Devi updated!');

        return redirect()->back();
    }




    public function destroy($id)
    {
        Devis::destroy($id);

        Session::flash('flash_message', 'Devi deleted!');

        return redirect('admin/devis');
    }




    public function pdf_devis($devis_id)
    {

        $data = ['data'=>$devis_id];
        return PDF::loadView('admin/devis.pdf_devis', $data)->save('devis/'.$devis_id.'.pdf')->download('devis/'.$devis_id.'.pdf');

    }




    public function pdf_propal($devis_id)
    {

        $devis = Devis::find($devis_id);
        //return View::make('admin/devis.pdf_propal', ['devis'=>$devis]);
        return PDF::loadView('admin/devis.pdf_propal', ['devis'=>$devis])
                    ->save('devis/'.$devis_id.'.pdf')
                    ->download('devis/'.$devis->propal_title.'-'.$devis->propal_subtitle.'.pdf');
    }



    public function pdf_dossier_interne($devis_id)
    {

        $devis = Devis::find($devis_id);
        //return View::make('admin/devis.pdf_propal', ['devis'=>$devis]);
        return PDF::loadView('admin/devis.pdf_dossier_interne', ['devis'=>$devis])
                    ->save('devis/'.$devis_id.'_interne.pdf')
                    ->download($devis->propal_title.'-'.$devis->propal_subtitle.'.pdf');
    }



    public function model_management(Devis $devis)
    {

        $tables = $devis->tables;

        foreach ($tables as $table) {
               // dd( $table->fields);
            if ($table->name == 'users') {
            }
        }

        return View::make('admin.devis.bootstrapping.model_management', compact('devis', 'tables'));



    }

    public function run_bootstrapping(Devis $devis)
    {
        return View::make('admin.devis.bootstrapping.run', compact('devis'));

    }


    public function add_document(Request $request, Devis $devis)
    {
        dd($devis);
    }



    public function list_pointages(Request $request, Devis $devis)
    {
        $pointages = $devis->pointages()->orderBy('id', 'desc')->get();
        $mode = 'edit';



        $sumPointagePerType = $devis->sumPointagePerType();

        return view('admin.devis.edit', compact('pointages', 'devis', 'mode', 'sumPointagePerType'));
    }



    public function send_confidentiality(Request $request, Devis $devis)
    {
        //$devis = Devis::find($devis_id);
        //return View::make('admin/devis.pdf_propal', ['devis'=>$devis]);
        $pdf =  PDF::loadView('admin.devis.pdf_confidentiality', ['devis'=>$devis])
                    ->save('devis/'.$devis->id.'_confidentiality.pdf');
                    //->download($devis->propal_title.'-'.$devis->propal_subtitle.'.pdf');


        // #v2#
        // là on envoi au premier contact trouvé pour le client !!!!!
        $destinataire = $devis->client->users->first();
        if( $destinataire){
            $data = array(
                'name' => $destinataire->first_name.' '.$destinataire->last_name,
                'email' => $destinataire->email,
            );
        }else {
            $data = array(
                'name' => $devis->client->first_name.' '.$devis->client->last_name,
                'email' => $devis->client->email,
            );
        }





        Mail::send('emails.admin.confidentiality', ['data'=>$data], function($mail) use($pdf, $data)
            {
                $mail->from('info@organit.fr', 'OrganiT');

                $mail->to($data['email'])->subject('OrganiT - Accord de Confidentialité');

                $mail->attachData($pdf->output(), "OrganiT - Accord de Confidentialité.pdf");
            });

    }







}
