@extends('layouts.admin')

@section('content')
  <div class="container">
    <h3>json 2 vuejs</h3>


    <form class="form-horizontal" method="post" action="{{route('programing_tools.post_json2vuejs')}}">
      <fieldset>
        {{csrf_field()}}
      <!-- Form Name -->
      <legend>Form Name</legend>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="json">json</label>
        <div class="col-md-4">
          <textarea class="form-control" id="json" name="json">
            {
              "contact_id": "460000000026049",
              "contact_name": "Bowman and Co",
              "company_name": "Bowman and Co",
              "has_transaction": true,
              "contact_type": "both",
              "is_linked_with_zohocrm": false,
              "primary_contact_id": "460000000026051",
              "payment_terms": 15,
              "payment_terms_label": "Net 15",
              "currency_id": "460000000000097",
              "currency_code": "USD",
              "currency_symbol": "$",
              "outstanding_receivable_amount": 250.00,
              "outstanding_receivable_amount_bcy": 250.00,
              "outstanding_payable_amount": 300.00,
              "outstanding_payable_amount_bcy": 300.00,
              "unused_credits_receivable_amount": 1369.66,
              "unused_credits_receivable_amount_bcy": 1369.66,
              "unused_credits_payable_amount": 350.00,
              "unused_credits_payable_amount_bcy": 350.00,
              "status": "active",
              "payment_reminder_enabled": true,
              "website": "www.bowmanfurniture.com",
              "custom_fields": [
                {
                  "index": 1,
                  "value": "GBGD078",
                  "label": "VAT ID"
                },
                {
                  "index": 2,
                  "value": "F6JSD86KH7G",
                  "label": "Company ID"
                },
                {
                  "index": 3,
                  "value": "www.bowman.in",
                  "label": "Website"
                }
              ],
              "billing_address": {
                "address": "4900 Hopyard Rd, Suite 310",
                "city": "Pleasanton",
                "state": "CA",
                "zip": "94588",
                "country": "USA",
                "fax": "+1-925-924-9600"
              },
              "shipping_address": {
                "address": "Suite 125, McMillan Avenue",
                "city": "San Francisco",
                "state": "CA",
                "zip": "94134",
                "country": "USA",
                "fax": "+1-925-924-9600"
              },
              "contact_persons": [
                {
                  "contact_person_id": "460000000026051",
                  "salutation": "Mr.",
                  "first_name": "Will",
                  "last_name": "Smith",
                  "email": "willsmith@bowmanfurniture.com",
                  "phone": "+1-925-921-9201",
                  "mobile": "+1-4054439562",
                  "is_primary_contact": true
                },
                {
                  "contact_person_id": "460000000031001",
                  "salutation": "Mr.",
                  "first_name": "Peter",
                  "last_name": "Parker",
                  "email": "peterparker@bowmanfurniture.com",
                  "phone": "+1-925-929-7211",
                  "mobile": "+1-4054439760",
                  "is_primary_contact": false
                }
              ],

              "notes": "Payment option : Through check",
              "created_time": "2013-08-05T12:06:10+0530",
              "last_modified_time": "2013-10-07T18:24:51+0530"
            }
          </textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="object_name">nom de objet js</label>
        <div class="col-md-4">
        <input id="object_name" name="object_name" type="text" placeholder="nom de objet js" class="form-control input-md" required="" value="contact">
        <span class="help-block">nom de objet js qui sera généré</span>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="wrapper_open">wrapper_open</label>
        <div class="col-md-4">
        <input id="wrapper_open" name="wrapper_open" type="text" placeholder="wrapper_open" class="form-control input-md" required="" value="<div>">
        <span class="help-block">balise ouvrante sur l'item</span>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="wrapper_close">wrapper_close</label>
        <div class="col-md-4">
        <input id="wrapper_close" name="wrapper_close" type="text" placeholder="wrapper_close" class="form-control input-md" required="" value="</div>">
        <span class="help-block">balise fermante</span>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="label_open">label_open</label>
        <div class="col-md-4">
        <input id="label_open" name="label_open" type="text" placeholder="label_open" class="form-control input-md" required="" value="<b>">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="label_close">label_close</label>
        <div class="col-md-4">
        <input id="label_close" name="label_close" type="text" placeholder="label_close" class="form-control input-md" required="" value="</b>">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="separator">separator</label>
        <div class="col-md-4">
        <input id="separator" name="separator" type="text" placeholder="separator" class="form-control input-md" required="" value=" : ">
        <span class="help-block">separaveur entre le label et la valeur</span>
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="is_translatable">is_translatable</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="is_translatable-0">
            <input type="radio" name="is_translatable" id="is_translatable-0" value="1" checked="checked">
            oui
          </label>
      	</div>
        <div class="radio">
          <label for="is_translatable-1">
            <input type="radio" name="is_translatable" id="is_translatable-1" value="0">
            non
          </label>
      	</div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="translate_file_name">translate_file_name</label>
        <div class="col-md-4">
        <input id="translate_file_name" name="translate_file_name" type="text" placeholder="translate_file_name" class="form-control input-md" required="" value="Contact">
        <span class="help-block">nom du fichier de traduction</span>
        </div>
      </div>

      </fieldset>

      <center>
      <input type="submit" class="btn btn-primary btn-large">
    </center>


  </form>

<hr>
      {{-- @if ($script)

      <pre>
        {{htmlspecialchars($script)}}

      </pre>

      @endif --}}


  </div>


@endsection
