
@section('header_scripts')
    <!--<style src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css"></style>-->
@stop

@include('admin/devis.propal.default')

<?php
$defaults =
[

    'propal_title'                 =>'coucours sms surtaxés',

    'propal_subtitle'              =>'Backoffice & site vitrine',

    'propal_parcours_pdt'         =>'default propal_parcours_pdt',

    'propal_presentation'         =>'La mise en place du projet porte sur ka mise en place ... ',

    'propal_goals'                =>'default propal_goals',

    'propal_description'          =>'default propal_description',

    'propal_features'             =>'default propal_features',

    'propal_admin_space'          =>'default propal_admin_space',

    'propal_public_space'         =>'default propal_public_space',

    'propal_user_space'           =>'default propal_user_space',

    'propal_super_admin_space'    =>'default propal_super_admin_space',

    'propal_generalities'         =>'
    <ul>
    <li>100% Responsive adapté aux smartphones</li>
    <li>Site Multilingue <i>traductions fournies par le client</i></li>
    <li>SEO Friendly</li>
    <li>Connecté aux APIs</li>
    <li>Simple et ergonomique</li>
    <li>Code propre et soigné pour une maintenance efficace</li>
    </ul>
    <h5>Sécurité</h5>
    <ul>
    <li>Mise en place du protocole <a href="https://fr.wikipedia.org/wiki/HyperText_Transfer_Protocol_Secure">HTTPS</a></li>
    <li>Protégé contre les failles <a href="https://fr.wikipedia.org/wiki/Cross-Site_Request_Forgery">CSRF</a></li>
    <li>Protégé contre les <a href="https://fr.wikipedia.org/wiki/Injection_SQL">injections SQL</a></li>
    <li></li>
    </ul>
    ',

    'propal_technic_solution'         =>'
    <h4>CONCEPTION GRAPHIQUE ET WEB DESIGN</h4>
    <p>Durant la phase de développement, nous veillerons à bâtir un site internet dynamique etintuitif pour les utilisateurs facilitant ainsi au maximum la prise en main des diverses fonctionnalités du site internet.</p>
    <p>Le site sera en responsive design (adapté à toutes les tailles d’écran et mobiles). De plus, il sera compatible avec tous les navigateurs : internet explorer, safari, chrome, Firefox</p
    <br>
    <h4>SOLUTION INFORMATIQUE</h4>
    <p>Concernant la mise en place technique du projet, nous utiliserons les technologies les plus récentes et les plus évolutives:</p>
    <ul>
    <li>HTML5, CSS3 <i> - utilisation de Bootstrap 3 -</i></li>
    <li>PHP7.0 – Mysql (framework Laravel 5.2)</li>
    </ul>
    <p>Ces technologies sont les plus récentes, les plus performantes et les plus ouvertes.</p>
    <center>
    <img src="http://bmdm.com/wp-content/uploads/bootstrap.png" style="height:100px">
    <img src="https://organit.fr/img/slides/html_css.png" style="height:100px">
    <img src="https://organit.fr/img/laravel.png" style="height:100px">
    <img src="http://www.todobravo.net/wp-content/uploads/2015/10/Logo-Wordpress-todobravo.png" style="height:100px">
    </center>
    ',

    'propal_propriety'             =>'default propal_propriety',

    'propal_payment_conditions'    =>'
    <ul>
    <li>1/2 à la commande</li>
    <li>1/2 à la livraison / satisfaction</li>
    </ul>

    <ul>
    <li>1/3 à la commande</li>
    <li>1/3 à la en cours de projet après l\'étape 7</li>
    <li>1/3 à la livraison / satisfaction</li>
    </ul>
    <b>Note :</b> Nos tarifs sont "sans surprise". Il n\'y a pas de frais "cachés". En revanche fonctionnalités demandées en cours de projet feront l\'objet d\'un devis à part.
    ',

    'propal_delivery_terms'        =>'Ce projet sera livré conformément aux fonctionnalités décrites dans ce document le .... / xxxx jours ouvrables après la réception du premier acompte',


    'propal_summuary'              =>'',

];






?>


<div class="row">

    <div class="col-md-12">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#general" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-gear"></i> General</a></li>
            <li role="presentation"><a href="#propal" aria-controls="propal" role="tab" data-toggle="tab"><i class="fa fa-suitcase"></i> Propal</a></li>
            @if($mode == 'edit' )
            <li role="presentation"><a href="#actions" aria-controls="actions" role="tab" data-toggle="tab"><i class="fa fa-star"></i> Actions</a></li>
                <li role="presentation"><a href="#pointages" aria-controls="pointages" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i> Pointages</a></li>
                <li role="presentation"><a href="#documents" aria-controls="documents" role="tab" data-toggle="tab"><i class="fa fa-files-o"></i> Documents</a></li>


            @endif
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="general">

                <div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
                    {!! Form::label('number', 'Number: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('number', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('app_name') ? 'has-error' : ''}}">
                    {!! Form::label('app_name', 'app_name: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('app_name', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('app_name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('app_extention') ? 'has-error' : ''}}">
                    {!! Form::label('app_extention', 'app_extention: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('app_extention', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('app_extention', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('esperence') ? 'has-error' : ''}}">
                    {!! Form::label('esperence', 'Esperence: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('esperence', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('esperence', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
                    {!! Form::label('note', 'Note: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('source') ? 'has-error' : ''}}">
                    {!! Form::label('source', 'source: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('source', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('source', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                    {!! Form::label('url', 'url: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                    {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::date('date', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('validated_by_contact') ? 'has-error' : ''}}">
                    {!! Form::label('validated_by_contact', 'Validated By Contact: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('validated_by_contact', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('validated_by_contact', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
                    {!! Form::label('client_id', 'Client Id: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('client_id', null, ['class' => 'form-control','required']) !!}
                        {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                    {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
                    {!! Form::label('content', 'Content: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('amount_HT') ? 'has-error' : ''}}">
                    {!! Form::label('amount_HT', 'Amount Ht: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('amount_HT', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('amount_HT', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('amount_TTC') ? 'has-error' : ''}}">
                    {!! Form::label('amount_TTC', 'Amount Ttc: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('amount_TTC', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('amount_TTC', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('is_registered') ? 'has-error' : ''}}">
                    {!! Form::label('is_registered', 'Is Registered: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('is_registered', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('is_registered', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('gg_drive_link_devis') ? 'has-error' : ''}}">
                    {!! Form::label('gg_drive_link_devis', 'Gg Drive Link Devis: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('gg_drive_link_devis', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('gg_drive_link_devis', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('gg_drive_link_propal') ? 'has-error' : ''}}">
                    {!! Form::label('gg_drive_link_propal', 'Gg Drive Link Propal: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('gg_drive_link_propal', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('gg_drive_link_propal', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('nb_h_pp') ? 'has-error' : ''}}">
                    {!! Form::label('nb_h_pp', 'nb_h_pp: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('nb_h_pp', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nb_h_pp', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('ct_st') ? 'has-error' : ''}}">
                    {!! Form::label('ct_st', 'ct_st: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('ct_st', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('ct_st', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('acompte_pourc') ? 'has-error' : ''}}">
                    {!! Form::label('acompte_pourc', 'acompte_pourc: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('acompte_pourc', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('acompte_pourc', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="propal">




                <h2>Business propal</h2>

                <div class="form-group {{ $errors->has('propal_title') ? 'has-error' : ''}}">
                    {!! Form::label('propal_title', 'propal_title: ', ['class' => 'col-sm-3 control-label']) !!}

                    <div class="col-sm-6">
                        {!! Form::text('propal_title', ($mode=='create')? $defaults['propal_title']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_title', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('propal_subtitle') ? 'has-error' : ''}}">
                    {!! Form::label('propal_subtitle', 'propal_subtitle: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('propal_subtitle', ($mode=='create')? $defaults['propal_subtitle']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_subtitle', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('propal_parcours_pdt') ? 'has-error' : ''}}">
                    {!! Form::label('propal_parcours_pdt', 'propal_parcours_pdt: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_parcours_pdt', ($mode=='create')? $defaults['propal_parcours_pdt']:null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                    <div class="col-sm-2">{!! $errors->first('propal_parcours_pdt', '<p class="help-block">:message</p>') !!}</div>
                </div>

                <div class="form-group {{ $errors->has('propal_presentation') ? 'has-error' : ''}}">
                    {!! Form::label('propal_presentation', 'propal_presentation: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_presentation', ($mode=='create')? $defaults['propal_presentation']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_presentation', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_goals') ? 'has-error' : ''}}">
                    {!! Form::label('propal_goals', 'propal_goals: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_goals', ($mode=='create')? $defaults['propal_goals']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_goals', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_description') ? 'has-error' : ''}}">
                    {!! Form::label('propal_description', 'propal_description: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_description', ($mode=='create')? $defaults['propal_description']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_description', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>


                <div class="form-group {{ $errors->has('propal_features') ? 'has-error' : ''}}">
                    {!! Form::label('propal_features', 'propal_features: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_features', ($mode=='create')? $defaults['propal_features']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_features', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_public_space') ? 'has-error' : ''}}">
                    {!! Form::label('propal_public_space', 'propal_public_space: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_public_space', ($mode=='create')? $defaults['propal_public_space']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_public_space', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>


                <div class="form-group {{ $errors->has('propal_admin_space') ? 'has-error' : ''}}">
                    {!! Form::label('propal_admin_space', 'propal_admin_space: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_admin_space', ($mode=='create')? $defaults['propal_admin_space']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_admin_space', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_user_space') ? 'has-error' : ''}}">
                    {!! Form::label('propal_user_space', 'propal_user_space: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_user_space', ($mode=='create')? $defaults['propal_user_space']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_user_space', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_super_admin_space') ? 'has-error' : ''}}">
                    {!! Form::label('propal_super_admin_space', 'propal_super_admin_space: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_super_admin_space', ($mode=='create')? $defaults['propal_super_admin_space']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_super_admin_space', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_technic_solution') ? 'has-error' : ''}}">
                    {!! Form::label('propal_technic_solution', 'propal_technic_solution: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_technic_solution', ($mode=='create')? $defaults['propal_technic_solution']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_technic_solution', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_generalities') ? 'has-error' : ''}}">
                    {!! Form::label('propal_generalities', 'propal_generalities: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_generalities', ($mode=='create')? $defaults['propal_generalities']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_generalities', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>



                <div class="form-group {{ $errors->has('propal_payment_conditions') ? 'has-error' : ''}}">
                    {!! Form::label('propal_payment_conditions', 'propal_payment_conditions: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_payment_conditions', ($mode=='create')? $defaults['propal_payment_conditions']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_payment_conditions', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>

                <div class="form-group {{ $errors->has('propal_delivery_terms') ? 'has-error' : ''}}">
                    {!! Form::label('propal_delivery_terms', 'propal_delivery_terms: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_delivery_terms', ($mode=='create')? $defaults['propal_delivery_terms']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_delivery_terms', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>



                <div class="form-group {{ $errors->has('propal_option_hosting') ? 'has-error' : ''}}">
                    {!! Form::label('propal_option_hosting', 'propal_option_hosting: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::radio('propal_option_hosting', 1, ['class' => 'form-control','required']) !!}OUI
                        {!! Form::radio('propal_option_hosting', 0, ['class' => 'form-control','required']) !!}NON
                        {!! $errors->first('propal_option_hosting', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


                <div class="form-group {{ $errors->has('propal_summuary') ? 'has-error' : ''}}">
                    {!! Form::label('propal_summuary', 'propal_summuary: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('propal_summuary', ($mode=='create')? $defaults['propal_summuary']:null, ['class' => 'form-control']) !!}
                        {!! $errors->first('propal_summuary', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="col-sm-2"><button class="btn btn-default toggle_btn">Cacher</button></div>
                </div>




            </div>






            @if($mode == 'edit' )


                 <div role="tabpanel" class="tab-pane" id="actions">
                <table class="table">
                    <tr>
                        <td>
                            <a href="{{route('admin.devis.send_confidentiality', ['devis'=>$devis->id])}}">Envoyer accord de confidentialité</a>
                        </td>
                        <td>
                            <b>Devis</b><br>
                            <a href="" class="btn btn-warning"><i class="fa fa-eye"></i> Voir le devis</a>&nbsp;
                            <a href="" class="btn btn-warning"><i class="fa fa-send"></i> Envoyer le devis par mail</a>

                        </td>
                        <td>
                            <b>Propal</b><br>
                            <a href="" class="btn btn-info"><i class="fa fa-eye"></i> Voir la propal</a>&nbsp;
                            <a href="" class="btn btn-info"><i class="fa fa-send"></i> Envoyer la propal par mail</a>

                        </td>
                    </tr>
                </table>
                    <ul>
                        <li><a href="{{route('admin.run_bootstrapping',[$devis->id])}}"><i class="fa fa-terminal"></i> run bootstrapping</a></li>




                        <li><a href="{{ route('admin.model_management', ['devis'=>$devis->id]) }}"><i class="fa fa-database"></i> model_management</a></li>



                        <li><a href="{{ route('devis.table', ['devis'=>$devis->id]) }}#"><i class="fa fa-table"></i> Tables</a></li>


                    </ul>

            </div>

                <div role="tabpanel" class="tab-pane" id="pointages">
                    <div class="row">
                        <div class="col-md-9">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>devis_id</th>
                                        <th>dbase</th>
                                        <th>minutes</th>
                                        <th>heures</th>
                                        <th>type</th>
                                    </tr>
                                </thead>


                                @foreach ($pointages as $pointage)
                                    <tr>
                                        <td>{{$pointage->id}}</td>
                                        <td>{{$pointage->devis_id}}</td>
                                        <td>{{$pointage->dbase}}</td>
                                        <td>{{$pointage->minutes}}</td>
                                        <td>{{round($pointage->minutes / 60, 2)}} h</td>
                                        <td>{{$pointage->type}}</td>
                                    </tr>

                                @endforeach

                            </table>

                        </div>
                        <div class="col-md-3">
                            <table class=table>
                                @foreach ($sumPointagePerType as $element)
                                    <tr>
                                        <td>
                                            {{array_keys($element)[0]}}
                                        </td>
                                        <td>
                                            {{$element[array_keys($element)[0]]}}
                                        </td>
                                    </tr>
                                    {{-- {{dd(array_keys($element)[0],$element,$element['total'])}} --}}
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>

                    <div role="tabpanel" class="tab-pane" id="documents">



                        <a href="{{ route('devis.table', ['devis'=>$devis->id]) }}">Gestion de la BDD</a>

                        <crud-documents url="{{ route('add.devis.document', ['devis'=>$devis->id]) }}"></crud-documents>




                    </div>
            @endif

        </div>
    </div>



</div>








<template id="template-crud-documents" inline-template>
    <h3>Documents to @{{url}}</h3>

    <p v-if="allFilesUploaded"><strong>All Files Uploaded</strong></p>
    <!-- full usage example -->
    <file-upload class="my-file-uploader" name="myFile" id="myCustomId" action="@{{url}}" multiple></file-upload>
    <!-- minimal usage -->
    <!--<file-upload name="anotherFile" action="@{{url}}"></file-upload>-->




    <button @click.stop="DisplayAddDocument" >ajouter</button>

    <div v-show="showAddDocumentArea" id="AddDocumentArea">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="@{{ fileProgress }}" aria-valuemin="0" aria-valuemax="100" style="width: @{{ fileProgress }}%;">
                @{{ fileProgress }}%
            </div>
        </div>


    </div>


    <ul class="list-group">
        <li class="list-group-item" v-for="document in documents">
            @{{document.id}} - @{{document.name}} - <a class="btn btn-waring" href="@{{document.path}}" target="_blank"><i class="fa fa-eye"></i></a>
        </li>
    </ul>


</template>





@section('footer_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>



    <script src="{{ asset('js/vue/vue.file-upload.js') }}"></script>
    <script src="{{ asset('js/vue/vue.pretty-bytes.js') }}"></script>

    <script>

    Vue.component('crud-documents', {
        template : '#template-crud-documents',
        props:['url', 'extensions', 'maximum'],
        ready(){
            console.log('component ready')
            console.log(this.url)
        },
        data() {
            return {
                showAddDocumentArea:true,
                showAddDocumentTextButton:'Ajouter des documents',


                uploadedFiles: [], // my list for the v-for
                fileProgress: 0, // global progress
                allFilesUploaded: false // is everything done?
            }
        },
        ready(){
            console.log(this.url)
        },
        computed: {

        },
        methods: {
            DisplayAddDocument: function(event){
                console.log('DisplayAddDocument')
                event.preventDefault()
                this.showAddDocumentArea = !this.showAddDocumentArea

            }

        },
        events: {
            onFileClick: function(file) {
                console.log('onFileClick', file);
            },
            onFileChange: function(file) {
                console.log('onFileChange', file);
                // here is where we update our view
                this.fileProgress = 0;
                this.allFilesUploaded = false;
            },
            beforeFileUpload: function(file) {
                // called when the upload handler is called
                console.log('beforeFileUpload', file);
            },
            afterFileUpload: function(file) {
                // called after the xhr.send() at the end of the upload handler
                console.log('afterFileUpload', file);
            },
            onFileProgress: function(progress) {
                console.log('onFileProgress', progress);
                // update our progress bar
                this.fileProgress = progress.percent;
            },
            onFileUpload: function(file, res) {
                console.log('onFileUpload', file, res);
                // update our list
                this.uploadedFiles.push(file);
            },
            onFileError: function(file, res) {
                console.error('onFileError', file, res);
            },
            onAllFilesUploaded: function(files) {
                console.log('onAllFilesUploaded', files);
                // everything is done!
                this.allFilesUploaded = true;
            }
        }
    })



    new Vue ({
        el: 'body',


    })

    </script>








    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image| code',
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });

    </script>

    <script>
    $(function(){
        $('.toggle_btn').click(function(e){
            e.preventDefault()

            var btn = $(this)
            var textBtn = btn.html()
            console.log("textBtn", textBtn)
            var fGroup = btn.closest('.form-group')
            var field = fGroup.find('.col-sm-6')

            if (field.is(":visible")) {
                console.log("visible")
                console.log(field)

                /* #v2#
                if ($.inArray(field.val(),{{json_encode($defaults)}})) {
                console.log("defaults -> can clear")
            }
            */
            btn.html('montrer')

            field.toggle()
        }else{
            console.log("INvisible")
            field.toggle()
            btn.html('Cacher')
        }

        console.log(btn, fGroup)

    })




    // Javascript to enable link to tab
    var hash = document.location.hash;
    var prefix = "tab-";
    if (hash) {
        $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
    }

})




</script>
@endsection
