
        <style>
        .spacer{
            height: 50px;
            display: block;
        }
        .fullwidth{
            background-color: 'yellowgreen'
        }
        </style>


        <template >

        <section>



        <!--<pre>
            {{form}}
        </pre>-->

            <!-- <h1>Organization Form</h1>-->

            <div v-if="loading">
                <el-button type="primary" :loading="true">Loading</el-button>
            </div>

            <div class="row" v-if="!loading">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">


                        <!--<div class="row" v-if="mode=='update'">
                            <div class="col-md-12">
                                <div class="pull-right"><a @click="deleteObject(object)"> Detete</a></div>
                            </div>
                        </div>-->
                    </div>
                    <div class="ibox-content">



            <form class="form-horizontal form-label-left" method="POST" action="/api/Arthes/organization" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            

                        <div >
                            

    <div class="form-group isOrgNotSupported">
    <div class="col-md-12 col-sm-12 ">
    <label for="isOrgNotSupported" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">IsOrgNotSupported <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/383/edit" v-show="larastrapEditionMode">IsOrgNotSupported <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="isOrgNotSupported" v-model="form.isOrgNotSupported" placeholder="isOrgNotSupported" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('isOrgNotSupported')" v-text="form.errors.get('isOrgNotSupported')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group organization_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="organization_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Organization_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/384/edit" v-show="larastrapEditionMode">Organization_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="organization_id" v-model="form.organization_id" placeholder="organization_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('organization_id')" v-text="form.errors.get('organization_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group name">
    <div class="col-md-12 col-sm-12 ">
    <label for="name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/385/edit" v-show="larastrapEditionMode">Name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="name" v-model="form.name" placeholder="name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group contact_name">
    <div class="col-md-12 col-sm-12 ">
    <label for="contact_name" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Contact_name <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/386/edit" v-show="larastrapEditionMode">Contact_name <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="contact_name" v-model="form.contact_name" placeholder="contact_name" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('contact_name')" v-text="form.errors.get('contact_name')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group email">
    <div class="col-md-12 col-sm-12 ">
    <label for="email" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Email <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/387/edit" v-show="larastrapEditionMode">Email <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="email" class="form-control" name="email" v-model="form.email" placeholder="email" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group source">
    <div class="col-md-12 col-sm-12 ">
    <label for="source" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Source <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/388/edit" v-show="larastrapEditionMode">Source <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="source" v-model="form.source" placeholder="source" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('source')" v-text="form.errors.get('source')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group country">
    <div class="col-md-12 col-sm-12 ">
    <label for="country" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Country <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/389/edit" v-show="larastrapEditionMode">Country <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="country" v-model="form.country" placeholder="country" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('country')" v-text="form.errors.get('country')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group org_settings">
    <div class="col-md-12 col-sm-12 ">
    <label for="org_settings" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Org_settings <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/390/edit" v-show="larastrapEditionMode">Org_settings <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="org_settings" v-model="form.org_settings" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="org_settings" v-model="form.org_settings" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.org_settings" label="" ></ui-switch>-->

        <el-switch
        v-model="form.org_settings"
        @click="fetchObject"
        name="org_settings"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('org_settings')" v-text="form.errors.get('org_settings')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_ziedition">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_ziedition" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_ziedition <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/391/edit" v-show="larastrapEditionMode">Is_ziedition <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_ziedition" v-model="form.is_ziedition" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_ziedition" v-model="form.is_ziedition" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_ziedition" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_ziedition"
        @click="fetchObject"
        name="is_ziedition"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_ziedition')" v-text="form.errors.get('is_ziedition')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_sku_enabled">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_sku_enabled" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_sku_enabled <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/392/edit" v-show="larastrapEditionMode">Is_sku_enabled <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_sku_enabled" v-model="form.is_sku_enabled" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_sku_enabled" v-model="form.is_sku_enabled" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_sku_enabled" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_sku_enabled"
        @click="fetchObject"
        name="is_sku_enabled"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_sku_enabled')" v-text="form.errors.get('is_sku_enabled')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group version">
    <div class="col-md-12 col-sm-12 ">
    <label for="version" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Version <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/393/edit" v-show="larastrapEditionMode">Version <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="version" v-model="form.version" placeholder="version" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('version')" v-text="form.errors.get('version')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group version_formatted">
    <div class="col-md-12 col-sm-12 ">
    <label for="version_formatted" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Version_formatted <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/394/edit" v-show="larastrapEditionMode">Version_formatted <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="version_formatted" v-model="form.version_formatted" placeholder="version_formatted" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('version_formatted')" v-text="form.errors.get('version_formatted')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_moss_enabled">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_moss_enabled" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_moss_enabled <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/395/edit" v-show="larastrapEditionMode">Is_moss_enabled <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_moss_enabled" v-model="form.is_moss_enabled" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_moss_enabled" v-model="form.is_moss_enabled" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_moss_enabled" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_moss_enabled"
        @click="fetchObject"
        name="is_moss_enabled"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_moss_enabled')" v-text="form.errors.get('is_moss_enabled')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_sales_inclusive_tax_enabled">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_sales_inclusive_tax_enabled" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_sales_inclusive_tax_enabled <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/396/edit" v-show="larastrapEditionMode">Is_sales_inclusive_tax_enabled <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_sales_inclusive_tax_enabled" v-model="form.is_sales_inclusive_tax_enabled" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_sales_inclusive_tax_enabled" v-model="form.is_sales_inclusive_tax_enabled" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_sales_inclusive_tax_enabled" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_sales_inclusive_tax_enabled"
        @click="fetchObject"
        name="is_sales_inclusive_tax_enabled"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_sales_inclusive_tax_enabled')" v-text="form.errors.get('is_sales_inclusive_tax_enabled')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group tax_group_enabled">
    <div class="col-md-12 col-sm-12 ">
    <label for="tax_group_enabled" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Tax_group_enabled <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/397/edit" v-show="larastrapEditionMode">Tax_group_enabled <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="tax_group_enabled" v-model="form.tax_group_enabled" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="tax_group_enabled" v-model="form.tax_group_enabled" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.tax_group_enabled" label="" ></ui-switch>-->

        <el-switch
        v-model="form.tax_group_enabled"
        @click="fetchObject"
        name="tax_group_enabled"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('tax_group_enabled')" v-text="form.errors.get('tax_group_enabled')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group language_code">
    <div class="col-md-12 col-sm-12 ">
    <label for="language_code" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Language_code <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/398/edit" v-show="larastrapEditionMode">Language_code <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="language_code" v-model="form.language_code" placeholder="language_code" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('language_code')" v-text="form.errors.get('language_code')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group fiscal_year_start_month">
    <div class="col-md-12 col-sm-12 ">
    <label for="fiscal_year_start_month" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Fiscal_year_start_month <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/399/edit" v-show="larastrapEditionMode">Fiscal_year_start_month <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="fiscal_year_start_month" v-model="form.fiscal_year_start_month" placeholder="fiscal_year_start_month" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('fiscal_year_start_month')" v-text="form.errors.get('fiscal_year_start_month')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group time_zone">
    <div class="col-md-12 col-sm-12 ">
    <label for="time_zone" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Time_zone <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/400/edit" v-show="larastrapEditionMode">Time_zone <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="time_zone" v-model="form.time_zone" placeholder="time_zone" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('time_zone')" v-text="form.errors.get('time_zone')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group field_separator">
    <div class="col-md-12 col-sm-12 ">
    <label for="field_separator" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Field_separator <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/401/edit" v-show="larastrapEditionMode">Field_separator <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="field_separator" v-model="form.field_separator" placeholder="field_separator" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('field_separator')" v-text="form.errors.get('field_separator')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group time_zone_formatted">
    <div class="col-md-12 col-sm-12 ">
    <label for="time_zone_formatted" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Time_zone_formatted <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/402/edit" v-show="larastrapEditionMode">Time_zone_formatted <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="time_zone_formatted" v-model="form.time_zone_formatted" placeholder="time_zone_formatted" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('time_zone_formatted')" v-text="form.errors.get('time_zone_formatted')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group is_trip_enabled">
    <div class="col-md-12 col-sm-12 ">
    <label for="is_trip_enabled" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Is_trip_enabled <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/403/edit" v-show="larastrapEditionMode">Is_trip_enabled <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="is_trip_enabled" v-model="form.is_trip_enabled" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="is_trip_enabled" v-model="form.is_trip_enabled" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.is_trip_enabled" label="" ></ui-switch>-->

        <el-switch
        v-model="form.is_trip_enabled"
        @click="fetchObject"
        name="is_trip_enabled"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('is_trip_enabled')" v-text="form.errors.get('is_trip_enabled')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group can_show_document_tab">
    <div class="col-md-12 col-sm-12 ">
    <label for="can_show_document_tab" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Can_show_document_tab <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/404/edit" v-show="larastrapEditionMode">Can_show_document_tab <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <!--
        <label class="radio-inline">
        <input name="can_show_document_tab" v-model="form.can_show_document_tab" type="radio" value="1"> Yes
        </label>
        <label class="radio-inline">
        <input name="can_show_document_tab" v-model="form.can_show_document_tab" type="radio" value="0"> No
        </label>-->

        <!--<ui-switch :value.sync="form.can_show_document_tab" label="" ></ui-switch>-->

        <el-switch
        v-model="form.can_show_document_tab"
        @click="fetchObject"
        name="can_show_document_tab"
        on-color="#13ce66"
        off-color="#ff4949">
        </el-switch>
          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('can_show_document_tab')" v-text="form.errors.get('can_show_document_tab')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_id">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_id" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_id <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/405/edit" v-show="larastrapEditionMode">Currency_id <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="currency_id" v-model="form.currency_id" placeholder="currency_id" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_id')" v-text="form.errors.get('currency_id')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_code">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_code" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_code <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/406/edit" v-show="larastrapEditionMode">Currency_code <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_code" v-model="form.currency_code" placeholder="currency_code" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_code')" v-text="form.errors.get('currency_code')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_symbol">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_symbol" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_symbol <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/407/edit" v-show="larastrapEditionMode">Currency_symbol <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_symbol" v-model="form.currency_symbol" placeholder="currency_symbol" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_symbol')" v-text="form.errors.get('currency_symbol')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group currency_format">
    <div class="col-md-12 col-sm-12 ">
    <label for="currency_format" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Currency_format <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/408/edit" v-show="larastrapEditionMode">Currency_format <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="text" class="form-control" name="currency_format" v-model="form.currency_format" placeholder="currency_format" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('currency_format')" v-text="form.errors.get('currency_format')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                        <div >
                            

    <div class="form-group price_precision">
    <div class="col-md-12 col-sm-12 ">
    <label for="price_precision" class="col-sm-2 control-label">
      <span v-show="!larastrapEditionMode">Price_precision <span class="text-danger">*</span></span>
      <a href="/admin/devis/2/tables/58/fields/409/edit" v-show="larastrapEditionMode">Price_precision <span class="text-danger">*</span></a>

    </label>
    <div class="col-sm-10 "> 
		
        <input type="number" class="form-control" name="price_precision" v-model="form.price_precision" placeholder="price_precision" >

          <div class="errors">
          <span class="help is-danger" v-if="form.errors.has('price_precision')" v-text="form.errors.get('price_precision')"></span>
          </div>

    </div>
    </div>
    </div>
    


                         </div>


                          

                <div class="col-sm-12">
                    <!--<button @click="cancel"  class="btn btn-default pull-right">Cancel</button>-->
                    <!--<button v-if="mode=='update'" @click.prevent="deleteObject(object)"  class="btn btn-danger pull-left">Delete</button>-->
                    <el-button v-if="mode=='update'" icon="delete" @click.prevent="deleteObject(object)" tooltip="Delete" type="normal" color="danger" class="pull-left" ></el-button>


                    <button @click.prevent="submit(object)" class="btn btn-primary pull-right" :disabled="form.errors.any()" >
                        <b v-if="mode=='create'">Create</b>
                        <b v-if="mode=='update'">Update</b>
                         Organization <i class="fa fa-spin fa-spinner" v-show="sending"></i>
                     </button>

                </div>

            </form>



                    </div>
                </div>
            </div>
        </div>

            </section>
        </template>





        <script>

        import {VueForm} from '../../../modules/vue-form.js'

        import Vue from 'vue'
        window.Event=new Vue()




        





        export default {
            components: { 
            },

            props :{
                forceMode : {
        				required: false,
        				type:String,
                },
                createdObject : {
        				required: false,
        				type:Object,
                },
                // label : {
        				// required: false,
        				// type:String,
                // },
                // value : {
        				// required: false,
        				// type:String,
                // },
                id : {
        				required: false,
        				//type can be an object or an number
                },



            },


            created () {

              this.loading=true
              console.log('typeof this.id', typeof this.id)
              console.log('this.id', this.id)
              if (typeof this.id == 'number' || typeof this.id == 'string') {
                // alert('a1')
                this.mode='update'
                // this.id=this.object
                this.fetchObject()


              }
              else if (typeof this.id == 'object') {
                // alert('a2')

                alert('please give a number for prop')
                // this.fetchObject()
                // this.mode='update'
                // this.id=this.object.organization_id
                
                // this.form = new VueForm(this.object)
                
                // this.loading=false
              }
              else{
                // alert('a3')
                this.mode='create'

              }

                



                console.log("label")
                console.log(this.label)
                console.log("value")
                console.log(this.value)



                var vm = this

                
                this.loading=false


            },
            watch: {



            },

            data(){
                return {
                    //debug:true,
                    activityList:[],
                    sending:false,
                    loading:false,
                    mode:'',
                    form: new VueForm({
                      isOrgNotSupported:'',
organization_id:'',
name:'',
contact_name:'',
email:'',
source:'',
country:'',
org_settings:false,
is_ziedition:false,
is_sku_enabled:false,
version:'',
version_formatted:'',
is_moss_enabled:false,
is_sales_inclusive_tax_enabled:false,
tax_group_enabled:false,
language_code:'',
fiscal_year_start_month:'',
time_zone:'',
field_separator:'',
time_zone_formatted:'',
is_trip_enabled:false,
can_show_document_tab:false,
currency_id:'',
currency_code:'',
currency_symbol:'',
currency_format:'',
price_precision:'',


                    }),



                    object:{},
                    



                };
            },

            filters:{


            },
            computed : {



            },

            methods: {
                    fetchObject () {
                        var vm=this
                        axios.get('/api/Arthes/organization/'+this.id).then(function (response) {
                                  vm.object=response.data.data
                                  vm.form = new VueForm(response.data.data)
                                  vm.loading=false

                              }, function (response) {
                                  // error callback
                              });
                    },

                 

                submit(object) {
                    this.sending=true

                    if(this.mode == 'create'){


                        this.form.submit('post','/api/Arthes/organization')
                          .then(response => {

                            this.$notify({
                              title: 'Saved',
                              message: 'successfully created',
                              type: 'success',
                              offset: 100
                            });

                              Event.$emit('createdOrganization', response.data)

                            
                            if (!this.forceMode) {
                                    
                                            this.$router.push(window.history.back())
                            }

                            
                          }).catch(response => {
                            this.$notify({
                              title: 'Error',
                              message: 'Error while processing the request',
                              type: 'error',
                              offset: 100
                            });



                            // alert('error')
                          });







                        

                        // }, function (response) {
                        //     // alert('erreur')
                        //     // setTimeout(function() { debugger; }, 10000)
                        //     throw new Error("Something went badly wrong!");
                        // });

                    }// endif mode create


                    else if (this.mode == 'update'){

                        console.log('update')
                        
                        var vm=this

                          this.form.submit('put','/api/Arthes/organization/'+this.form.organization_id)
                            .then(response => {

                                vm.$notify({
                                  title: 'Updated',
                                  message: 'successfully updated',
                                  type: 'success',
                                  offset: 100
                                });

                                vm.form = new VueForm(response.data)

                                Event.$emit('createdOrganization', response.data)

                                // console.log('response', response)
                                // console.log('response.data', response.data)
                                // console.log('response.data.data', response.data.data)

                                // vm.sending=false

                                

                                // vm.createdObject = response.data

                                // vm.$router.push('/organization')
                    });
                    

                }//endif mode update


                this.sending=false

                },
                cancel() {
                    this.$router.push(window.history.back())
                },


                larastrapEditionMode () {
                  return larastrapEditionMode
                },

                deleteObject(object) {
                    
                    var vm=this
                    axios.delete('/api/Arthes/organization/'+this.form.organization_id, object).then(function (response) {
                    vm.sending=false

                      this.$notify({
                        title: 'Deleted',
                        message: 'successfully deleted',
                        type: 'success',
                        offset: 100
                      });


                      vm.$router.push('/organization')
                }, function (response) {
                    alert('erreur')
                    // setTimeout(function() { debugger; }, 10000)
                    throw new Error("Something went badly wrong!");
                });
                

                },



                },




        }



        </script>

        