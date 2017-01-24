<?php


return

[

 'tablesAndFildsArray'=> [

   ['is_menu'=>1,'name'=>'accounts', 'fields'=>[ //////////////////////////////////
                                                 // ['name'=>'currency_id', 'label'=>'currency_id', 'is_on_index_view'=>true, 'is_on_edit_form'=>true, 'is_on_create_form'=>true, 'order'=>1, 'placeholder'=>'','is_primary'=>'0','is_index'=>'0','is_unsigned'=>'1','is_fillable'=>'0','is_nullable'=>'0','is_unique'=>'0','is_incrementable'=>'0','field_type_id'=>'1','faker_method'=>'','table_id'=>'46',],

                                                 ['name'=>'account_id','is_on_index_view'=>1, 'is_primary'=>1,'field_type_id'=>1, 'laravel_validation_rules'=>''],
                                                 ['name'=>'account_name','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''],
                                                 ['name'=>'account_code','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''],
                                                 ['name'=>'currency_id','is_on_index_view'=>1, "field_type_id"=>1, 'laravel_validation_rules'=>''],
                                                 ['name'=>'currency_code','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''], //"EUR", 'laravel_validation_rules'=>''],
                                                 ['name'=>'account_type','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''],//"bank", 'laravel_validation_rules'=>''],
                                                 // ['name'=>'uncategorized_transactions','is_on_index_view'=>1, 0, 'laravel_validation_rules'=>''],
                                                 // 'name'=>'total_unprinted_checks','is_on_index_view'=>1, 0, 'laravel_validation_rules'=>''],
                                                 ['name'=>'is_active','is_on_index_view'=>1, "field_type_id"=>13, 'laravel_validation_rules'=>''],//true, 'laravel_validation_rules'=>''],
                                                 ['name'=>'balance','is_on_index_view'=>1, "field_type_id"=>11, 'laravel_validation_rules'=>''],//0, 'laravel_validation_rules'=>''],
                                                 ['name'=>'bank_balance','is_on_index_view'=>1, "field_type_id"=>11, 'laravel_validation_rules'=>''],//0, 'laravel_validation_rules'=>''],
                                                 ['name'=>'bcy_balance','is_on_index_view'=>1, "field_type_id"=>11, 'laravel_validation_rules'=>''],//0, 'laravel_validation_rules'=>''],
                                                 ['name'=>'bank_name','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''],//"NVAp1Y Bank", 'laravel_validation_rules'=>''],
                                                 ['name'=>'routing_number','is_on_index_view'=>1, "field_type_id"=>2, 'laravel_validation_rules'=>''],//"113456789ff", 'laravel_validation_rules'=>''],
                                                 ['name'=>'is_primary_account','is_on_index_view'=>1, "field_type_id"=>13, 'laravel_validation_rules'=>''],//false, 'laravel_validation_rules'=>''],
                                                 ['name'=>'is_paypal_account','is_on_index_view'=>1, "field_type_id"=>13, 'laravel_validation_rules'=>''],//true, 'laravel_validation_rules'=>''],
                                                 ['name'=>'paypal_email_address','is_on_index_view'=>1, "field_type_id"=>4, 'laravel_validation_rules'=>''],//"john****@zilliuminc.com]"

                                               ],

                                        'methods' => [
                                                'index'=>'$zoho->accounts()->index()[\'data\']',
                                                'update'=>'$zoho->accounts()->update($account->id,$request)[\'data\']',
                                                'show'=>'$zoho->accounts()->get($account)[\'data\']',
                                                'store'=>'$zoho->accounts()->create($account)[\'data\']',
                                                'destroy'=>'$zoho->accounts()->delete($account)',
                                                'deleteMany'=>'dd($request->all())',


                                          ]

   ],



   ['is_menu'=>1,'name'=>'contacts', 'fields'=>[

                                                   ['name'=>"contact_id", 'field_type_id'=>1,  'is_primary'=>1, 'laravel_validation_rules'=>''],//: , 'laravel_validation_rules'=>''],
                                                   ['name'=>"contact_name", 'field_type_id'=>2, 'laravel_validation_rules'=>'required'],//: "Abelardo Farrell", 'laravel_validation_rules'=>''],
                                                   ['name'=>"company_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "Hoeger LLC", 'laravel_validation_rules'=>''],
                                                   ['name'=>"contact_type", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "customer", 'laravel_validation_rules'=>''],
                                                   ['name'=>"status", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "active", 'laravel_validation_rules'=>''],
                                                   ['name'=>"source", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "api", 'laravel_validation_rules'=>''],
                                                   ['name'=>"is_linked_with_zohocrm", 'field_type_id'=>13, 'laravel_validation_rules'=>''],//: false, 'laravel_validation_rules'=>''],
                                                   ['name'=>"payment_terms", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: 0, 'laravel_validation_rules'=>''],
                                                   ['name'=>"payment_terms_label", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "Payable à réception", 'laravel_validation_rules'=>''],
                                                   ['name'=>"currency_id", 'field_type_id'=>1, 'laravel_validation_rules'=>'required'],//: "453340000000000109", 'laravel_validation_rules'=>''],
                                                   ['name'=>"currency_code", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "EUR", 'laravel_validation_rules'=>''],
                                                   ['name'=>"outstanding_receivable_amount", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: 0, 'laravel_validation_rules'=>''],
                                                   ['name'=>"outstanding_payable_amount", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: 0, 'laravel_validation_rules'=>''],
                                                   ['name'=>"unused_credits_receivable_amount", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: 0, 'laravel_validation_rules'=>''],
                                                   ['name'=>"unused_credits_payable_amount", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: 0, 'laravel_validation_rules'=>''],
                                                   ['name'=>"first_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "Solon", 'laravel_validation_rules'=>''],
                                                   ['name'=>"last_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "Cassin", 'laravel_validation_rules'=>''],
                                                   ['name'=>"email", 'field_type_id'=>4, 'laravel_validation_rules'=>''],//: "russell64@kuphal.com", 'laravel_validation_rules'=>''],
                                                   ['name'=>"phone", 'field_type_id'=>2, 'laravel_validation_rules'=>''],//: "774-304-5163", 'laravel_validation_rules'=>''],
                                                   ['name'=>"mobile", 'field_type_id'=>1, 'laravel_validation_rules'=>''],//: "497-203-3760 x27816", 'laravel_validation_rules'=>''],
                                                   ['name'=>"created_time", 'field_type_id'=>5, 'laravel_validation_rules'=>''],//: "2017-01-05T11:42:28+0100", 'laravel_validation_rules'=>''],
                                                   ['name'=>"last_modified_time", 'field_type_id'=>5, 'laravel_validation_rules'=>''],//: "2017-01-05T11:42:30+0100"],
                                                   // ['name'=>"ach_supported", 'field_type_id'=>1],//: false],
                                                   // ['name'=>"has_attachment", 'field_type_id'=>1],//: fals]e

                                               ],

                                               'methods' => [
                                                       'index'=>'$zoho->contacts()->index()[\'data\']',
                                                       'update'=>'null',
                                                       'show'=>'null',
                                                       'store'=>'null',
                                                       'destroy'=>'null',
                                                       'deleteMany'=>'null',


                                                 ]
   ],



   ['is_menu'=>1,'name'=>'currencies', 'fields'=>[
                                                        ["name"=>"currency_id", 'field_type_id'=>1, 'is_primary'=>1, 'laravel_validation_rules'=>''],// "460000000000097",
                                                       ["name"=>"currency_code", 'field_type_id'=>1, 'laravel_validation_rules'=>'required'],// "USD",
                                                       ["name"=>"currency_name", 'field_type_id'=>2, 'laravel_validation_rules'=>'required'],// "USD- US Dollar",
                                                       ["name"=>"currency_symbol", 'field_type_id'=>2, 'laravel_validation_rules'=>'required'],// "$",
                                                       ["name"=>"price_precision", 'field_type_id'=>1, 'laravel_validation_rules'=>'required'],// 2,
                                                       ["name"=>"currency_format", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "1,234,567.89",
                                                       ["name"=>"is_base_currency", 'field_type_id'=>13, 'laravel_validation_rules'=>''],// true


                                               ],

                                               'methods' => [
                                                       'index'=>'null',
                                                       'update'=>'null',
                                                       'show'=>'null',
                                                       'store'=>'null',
                                                       'destroy'=>'null',
                                                       'deleteMany'=>'null',


                                                 ]
    ],

   ['is_menu'=>1,'name'=>'invoices', 'fields'=>[

                                                     ["name"=>"invoice_id", 'field_type_id'=>1, 'is_primary'=>1, 'laravel_validation_rules'=>''],// "453340000000062735",
                                                     // ["name"=>// "a, 'field_type_id'=>1ch_payment_initiated"],// false,
                                                     // ["name"=>"zcrm_potential_id", 'field_type_id'=>1],// "",
                                                     // ["name"=>"zcrm_potential_name", 'field_type_id'=>1],// "",
                                                     ["name"=>"customer_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "Jeramie Larson",
                                                     ["name"=>"customer_id", 'field_type_id'=>1, 'laravel_validation_rules'=>'required'],// "453340000000061939",
                                                     ["name"=>"status", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "draft",
                                                     ["name"=>"invoice_number", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "INV-000097",
                                                     ["name"=>"reference_number", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                     ["name"=>"date", 'field_type_id'=>5, 'laravel_validation_rules'=>''],// "2017-01-05",
                                                     ["name"=>"due_date", 'field_type_id'=>5, 'laravel_validation_rules'=>''],// "2017-01-05",
                                                     ["name"=>"due_days", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "",
                                                     ["name"=>"currency_id", 'field_type_id'=>1, 'laravel_validation_rules'=>'required'],// "453340000000000109",
                                                     // ["name"=>"schedule_time", 'field_type_id'=>2],// "",
                                                     ["name"=>"currency_code", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "EUR",
                                                     ["name"=>"is_viewed_by_client", 'field_type_id'=>13, 'laravel_validation_rules'=>''],// false,
                                                     // ["name"=>"has_attachment", 'field_type_id'=>13],// false,
                                                     // ["name"=>"client_viewed_time", 'field_type_id'=>1],// "",
                                                     ["name"=>"total", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 1322,
                                                     ["name"=>"balance", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 1322,
                                                     // ["name"=>"created_time", 'field_type_id'=>5],// "",
                                                     // ["name"=>"last_modified_time", 'field_type_id'=>5],// "",
                                                     ["name"=>"is_emailed", 'field_type_id'=>13, 'laravel_validation_rules'=>''],// false,
                                                     ["name"=>"reminders_sent", 'field_type_id'=>13, 'laravel_validation_rules'=>''],// 0,
                                                     // ["name"=>"last_reminder_sent_date", 'field_type_id'=>1],// "",
                                                     // ["name"=>"payment_expected_date", 'field_type_id'=>1],// "",
                                                     // ["name"=>// "l, 'field_type_id'=>1ast_payment_date"],// "",
                                                     // ["name"=>// "c, 'field_type_id'=>1ustom_fields"],// [],
                                                     // ["name"=>// "d, 'field_type_id'=>1ocuments"],// "",
                                                     // ["name"=>// "s, 'field_type_id'=>1alesperson_id"],// "",
                                                     // ["name"=>// "s, 'field_type_id'=>1alesperson_name"],// "",
                                                     // ["name"=>// "s, 'field_type_id'=>1hipping_charge"],// 0,
                                                     // ["name"=>// "a, 'field_type_id'=>1justment"],// 0,
                                                     // ["name"=>// "w, 'field_type_id'=>1rite_off_amount"],// 0,
                                                     // ["name"=>// "e, 'field_type_id'=>1xchange_rate"],// 1


                                               ],

                                     'methods' => [
                                             'index'=>'null',
                                             'update'=>'null',
                                             'show'=>'null',
                                             'store'=>'null',
                                             'destroy'=>'null',
                                             'deleteMany'=>'null',


                                       ]
        ],

   ['is_menu'=>1,'name'=>'items', 'fields'=>[


                                                 ["name"=>"item_id", 'field_type_id'=>1, 'is_primary'=>1, 'laravel_validation_rules'=>''],// "402626000000277239",
                                                 ["name"=>"name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "arrivée électrique / electricity",
                                                 ["name"=>"item_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "arrivée électrique / electricity",
                                                 ["name"=>"sku", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "402626000000277239",
                                                 ["name"=>"image_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                 ["name"=>"status", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "active",
                                                 ["name"=>"source", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "user",
                                                 ["name"=>"is_linked_with_zohocrm", 'field_type_id'=>13, 'laravel_validation_rules'=>''],// false,
                                                 // ["name"=>"zcrm_product_id", 'field_type_id'=>1],// "",
                                                 ["name"=>"description", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "arrivée électrique",
                                                 ["name"=>"rate", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// 50,
                                                 ["name"=>"tax_id", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "402626000000063417",
                                                 // ["name"=>"reorder_level", 'field_type_id'=>1],// "",
                                                 ["name"=>"tax_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "TVA/VAT",
                                                 ["name"=>"tax_percentage", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// 20,
                                                 // ["name"=>"purchase_account_id", 'field_type_id'=>1],// "",
                                                 // ["name"=>"purchase_account_name", 'field_type_id'=>1],// "",
                                                 // ["name"=>"purchase_description", 'field_type_id'=>1],// "",
                                                 // ["name"=>"purchase_rate", 'field_type_id'=>1],// 0,
                                                 ["name"=>"item_type", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "sales",
                                                 // ["name"=>"product_type", 'field_type_id'=>1],// "service",
                                                 // ["name"=>"has_attachment", 'field_type_id'=>1],// false,
                                                 ["name"=>"created_time", 'field_type_id'=>5, 'laravel_validation_rules'=>''],// "",
                                                 ["name"=>"last_modified_time", 'field_type_id'=>5, 'laravel_validation_rules'=>''],// ""
                                               ],

                                       'methods' => [
                                               'index'=>'null',
                                               'update'=>'null',
                                               'show'=>'null',
                                               'store'=>'null',
                                               'destroy'=>'null',
                                               'deleteMany'=>'null',


                                         ]
        ],



   ['is_menu'=>1,'name'=>'organizations', 'fields'=>[

                                                     ["name"=>"isOrgNotSupported", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// false,
                                                           ["name"=>"organization_id", 'field_type_id'=>1, 'is_primary'=>1, 'laravel_validation_rules'=>''],// "634457325",
                                                           ["name"=>"name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "Picaflor sarl",
                                                           ["name"=>"contact_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "maïlys",
                                                           ["name"=>"email", 'field_type_id'=>4],// "mailys@playtimeparis.com",
                                                           ["name"=>"source", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// 2,
                                                           ["name"=>"country", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "France",
                                                           ["name"=>"org_settings", 'field_type_id'=>13],// true,
                                                           ["name"=>"is_ziedition", 'field_type_id'=>13],// false,
                                                           // ["name"=>"custom_field_type", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// 2,
                                                           ["name"=>"is_sku_enabled", 'field_type_id'=>13],// true,
                                                           ["name"=>"version", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "global",
                                                           ["name"=>"version_formatted", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "Global",
                                                           ["name"=>"is_moss_enabled", 'field_type_id'=>13],// false,
                                                           ["name"=>"is_sales_inclusive_tax_enabled", 'field_type_id'=>13],// true,
                                                           ["name"=>"tax_group_enabled", 'field_type_id'=>13],// true,
                                                           ["name"=>"language_code", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "en",
                                                           ["name"=>"fiscal_year_start_month", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// 0,
                                                           ["name"=>"time_zone", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "Europe/Brussels",
                                                           ["name"=>"field_separator", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                           ["name"=>"time_zone_formatted", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// ,
                                                           ["name"=>"is_trip_enabled", 'field_type_id'=>13],// false,
                                                           ["name"=>"can_show_document_tab", 'field_type_id'=>13],// true,
                                                           ["name"=>"currency_id", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "402626000000000109",
                                                           ["name"=>"currency_code", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "EUR",
                                                           ["name"=>"currency_symbol", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "€",
                                                           ["name"=>"currency_format", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// ,
                                                           ["name"=>"price_precision", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// 2,

                                               ],

                                     'methods' => [
                                             'index'=>'null',
                                             'update'=>'null',
                                             'show'=>'null',
                                             'store'=>'null',
                                             'destroy'=>'null',
                                             'deleteMany'=>'null',


                                       ]
        ],


   ['is_menu'=>1,'name'=>'payments', 'fields'=>[

                                               ["name"=>"payment_id", 'field_type_id'=>1, 'is_primary'=>1, 'laravel_validation_rules'=>''],// "460000000031003",
                                                   ["name"=>"customer_id", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "460000000026049",
                                                   ["name"=>"customer_name", 'field_type_id'=>2, 'laravel_validation_rules'=>'', 'laravel_validation_rules'=>''],// "Bowman and Co",
                                                   ["name"=>"payment_mode", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "Cash",
                                                   ["name"=>"date", 'field_type_id'=>5, 'laravel_validation_rules'=>''],// "2013-08-14",
                                                   ["name"=>"account_id", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "460000000000361",
                                                   ["name"=>"account_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "Petty Cash",
                                                   ["name"=>"exchange_rate", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 1.00,
                                                   ["name"=>"amount", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 500.00,
                                                   ["name"=>"bank_charges", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 0.00,
                                                   // ["name"=>"tax_account_id", 'field_type_id'=>1],// "",
                                                   ["name"=>"tax_account_name", 'field_type_id'=>2, 'laravel_validation_rules'=>'', 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"tax_amount_withheld", 'field_type_id'=>11, 'laravel_validation_rules'=>''],// 0.00,
                                                   ["name"=>"description", 'field_type_id'=>7, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"reference_number", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "RSAFDG132424",



                                               ],

                                   'methods' => [
                                           'index'=>'null',
                                           'update'=>'null',
                                           'show'=>'null',
                                           'store'=>'null',
                                           'destroy'=>'null',
                                           'deleteMany'=>'null',


                                     ]
      ],


   ['is_menu'=>1,'name'=>'persons', 'fields'=>[

                                                   ["name"=>"contact_person_id", 'field_type_id'=>1, 'is_primary'=>1],// "",
                                                   ["name"=>"contact_id", 'field_type_id'=>1, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"salutation", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"first_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"last_name", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"email", 'field_type_id'=>4, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"phone", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",
                                                   ["name"=>"mobile", 'field_type_id'=>2, 'laravel_validation_rules'=>''],// "",

                                               ],

                                   'methods' => [
                                           'index'=>'null',
                                           'update'=>'null',
                                           'show'=>'null',
                                           'store'=>'null',
                                           'destroy'=>'null',
                                           'deleteMany'=>'null',


                                     ]
    ],






],


'relationships' =>
[

[
      'from_table_name'=>'accounts',                              'to_table_name'=>'currencies',
                                'laravel_name'=>'belongsTo',
      'from_field_name'=>'account_id',                               'to_field_name'=>'currency_id',




                                'method'=>'currency',

                                'through_field_name'=>'',
                                'on_field_id'=>'',

                                'controller' => 'script place inside the controller in the Account Class / currency method',

],

[
      'from_table_name'=>'currencies',                              'to_table_name'=>'accounts',
                                        'laravel_name'=>'hasMany',
      'from_field_name'=>'currency_id',                               'to_field_name'=>'account_id',




                                'method'=>'accounts',

                                'through_field_name'=>'',
                                'on_field_id'=>'',

                                'controller' => 'script place inside the controller in the currency Class / account method',

],


/**/

/*********************************************************************************************************/



[
  'from_table_name'=>'persons',                                      'to_table_name'=>'contacts',
                                        'laravel_name'=>'belongsTo',
  'from_field_name'=>'contact_person_id',                               'to_field_name'=>'contact_id',




  'method'=>'contact',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],



[
  'from_table_name'=>'contacts',                                              'to_table_name'=>'persons',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'contact_id',                                              'to_field_name'=>'contact_person_id',




  'method'=>'persons',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],



/*********************************************************************************************************/





/*********************************************************************************************************/



[
  'from_table_name'=>'invoices',                                      'to_table_name'=>'contacts',
                                        'laravel_name'=>'belongsTo',
  'from_field_name'=>'invoice_id',                               'to_field_name'=>'contact_id',  'through_field_name'=>'customer_id',




  'method'=>'contact',

  // 'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'contacts',                                              'to_table_name'=>'invoices',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'contact_id',                                              'to_field_name'=>'invoice_id',




  'method'=>'invoices',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],


/*********************************************************************************************************/



[
  'from_table_name'=>'invoices',                                      'to_table_name'=>'currencies',
                                        'laravel_name'=>'belongsTo',
  'from_field_name'=>'invoice_id',                               'to_field_name'=>'currency_id', // 'through_field_name'=>'customer_id',




  'method'=>'currency',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'currencies',                                              'to_table_name'=>'invoices',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'currency_id',                                              'to_field_name'=>'invoice_id',




  'method'=>'invoices',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],


/*********************************************************************************************************/



[
  'from_table_name'=>'invoices',                                      'to_table_name'=>'items',
                                    'laravel_name'=>'belongsToMany',
  'from_field_name'=>'invoice_id',                               'to_field_name'=>'item_id',




  'method'=>'items',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'items',                                              'to_table_name'=>'invoices',
                                      'laravel_name'=>'belongsToMany',
  'from_field_name'=>'item_id',                                              'to_field_name'=>'invoice_id',




  'method'=>'invoices',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],



/*********************************************************************************************************/



[
  'from_table_name'=>'organizations',                                      'to_table_name'=>'currencies',
                                    'laravel_name'=>'belongsTo',
  'from_field_name'=>'organization_id',                               'to_field_name'=>'currency_id',




  'method'=>'currency',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'currencies',                                              'to_table_name'=>'organizations',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'currency_id',                                              'to_field_name'=>'organization_id',




  'method'=>'organizations',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],



/*********************************************************************************************************/



[
  'from_table_name'=>'payments',                                      'to_table_name'=>'contacts',
                                        'laravel_name'=>'belongsTo',
  'from_field_name'=>'payment_id',                               'to_field_name'=>'contact_id',  'through_field_name'=>'customer_id',




  'method'=>'contact',

  // 'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'contacts',                                              'to_table_name'=>'payments',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'contact_id',                                              'to_field_name'=>'payment_id',




  'method'=>'payments',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],


/*********************************************************************************************************/


/*********************************************************************************************************/



/*********************************************************************************************************/


/*********************************************************************************************************/



[
  'from_table_name'=>'payments',                                      'to_table_name'=>'accounts',
                                    'laravel_name'=>'belongsTo',
  'from_field_name'=>'payment_id',                                    'to_field_name'=>'account_id',




  'method'=>'account',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'accounts',                                              'to_table_name'=>'payments',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'account_id',                                              'to_field_name'=>'payment_id',




  'method'=>'payments',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/*********************************************************************************************************/


/*********************************************************************************************************/



[
  'from_table_name'=>'payments',                                      'to_table_name'=>'currencies',
                                    'laravel_name'=>'belongsTo',
  'from_field_name'=>'payment_id',                                    'to_field_name'=>'currency_id',




  'method'=>'currency',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'currencies',                                              'to_table_name'=>'payments',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'currency_id',                                              'to_field_name'=>'payment_id',




  'method'=>'payments',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],



/*********************************************************************************************************/


/*********************************************************************************************************/



[
  'from_table_name'=>'payments',                                      'to_table_name'=>'invoices',
                                    'laravel_name'=>'belongsTo',
  'from_field_name'=>'payment_id',                                    'to_field_name'=>'invoice_id',




  'method'=>'invoice',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],

/**/


[
  'from_table_name'=>'invoices',                                              'to_table_name'=>'payments',
                                      'laravel_name'=>'hasMany',
  'from_field_name'=>'invoice_id',                                              'to_field_name'=>'payment_id',




  'method'=>'payments',

  'through_field_name'=>'',
  'on_field_id'=>'',

  'controller' =>'$aaaaaaaaaaa;',

],









]


];
