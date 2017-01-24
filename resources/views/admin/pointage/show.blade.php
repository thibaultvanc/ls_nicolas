@extends('layouts.admin')

@section('content') 

    <h1>Pointage</h1>  
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Date</th><th>Devis Id</th><th>Dbase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $pointage->id }}</td> <td> {{ $pointage->date }} </td><td> {{ $pointage->devis_id }} </td><td> {{ $pointage->dbase }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $pointage->id }}

--------------------/

  

    <div class="row">
        <div class="col-md-6">
            <h1>{{$table->model}}</h1>
                            <b>ID.</b><br>
                            {{ $table->id }}<br><br>

                             <b>Devis Id</b><br>
                             {{ $table->devis_id }} <br><br>

                             <b>Name</b><br>
                            {{ $table->name }}<br><br>

                             <b>Model</b><br>
                            {{ $table->model }}<br><br>

            <h2>Relations</h2>      
            @foreach($table->related as $related_table)
                {{ $table->name }} ({{$table->model}})  > {{$related_table->pivot->type }} > {{$related_table->name }} ({{$related_table->model }})<br>
            @endforeach
        </div>
        <div class="col-md-6">
            
            <h1>Fields of {{$table->model}} : </h1>
           
            <crud table="{{$table->id}}" ></crud>     

        </div>
    </div>
 

<input type="text" v-model="test"> @{{test}}


    <template id="crud-template">
            
            <button v-show="showCreateFieldButton" @click="showCreateFieldForm" class=" pull-right btn btn-success btn-sm"><i class="@{{addFieldButtonIcon}}"></i> @{{addFieldButtonText}}</button>

            <button v-show="showEditFieldButton" @click="cancelEdit" class=" pull-right btn btn-success btn-sm"><i class="@{{createFieldButtonIcon}}"></i> @{{editFieldButtonText}}</button>



            <div class="bg-warning" v-show="displayFieldForm">
                liste des champs de la table : @{{table}}" <br>
                <ul v-for="field in fieldList">
                     <li>@{{field.name}} <br><input type="text" name="@{{field.name}}"  v-model="newFieldValue[field.name]" ><br><br>@{{newFieldValue[field.name]}}</li>
                </ul>
                <button v-show="showCreateFieldButton" class="btn btn-primary " @click="addField">Envoyer</button>
                <button v-show="showEditFieldButton" class="btn btn-primary " @click="editField">mettre à jour</button>
               
            </div>
            <br>
            <hr>
            <ul class="list-group" v-show="! displayFieldForm">
                            {{-- @foreach($table->fields as $field) --}}
                                
                                <li class="list-group-item" v-for="field in fieldList">
                                    @{{field.name}} (@{{field.type}})

                                   
                                   <button class="pull-right btn btn-danger btn-sm" @click="removeField(field)"><i class="fa fa-times"></i></button>
                                   <button class="pull-right btn btn-primary btn-sm" @click="showEditFieldForm(field)"><i class="fa fa-edit"></i></button>
                             

                                </li>
                
                                <hr>
                            {{--@endforeach--}}
           </ul>
    </template>
  

@endsection
  

@section('footer_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
<script>
    Vue.component('crud', {
        template : '#crud-template',
        props :['table'],

        data(){
            return {
                test:'test',
                showCreateFieldButton:true,
                addFieldButtonIconClose:'fa fa-minus',
                addFieldButtonIconOpen:'fa fa-plus',
                addFieldButtonText:'Ajouter',

                showEditFieldButton: false,    
                editFieldButtonIconClose:'fa fa-minus',
                editFieldButtonIconOpen:'fa fa-plus',
                editFieldButtonText:'Editer',
               
                displayFieldForm :false,

                fieldList:[], //car belongsTo Table

                newFieldValue:{
                    <?php

                    $s = '';
                    foreach($table->fields as $field){
                        if ($s) $s .= ',';
                        $s .= "'".$field->name."' : ''"; 
                    }
                    echo $s;
                    ?>

                }, 
            };
        },
        computed:{

           addFieldButtonIcon: function () {
               
                if (this.displayFieldForm) {
                    return this.addFieldButtonIconClose
                }
                else{
                    return this.addFieldButtonIconOpen
                }
              },

           createFieldButtonIcon: function () {
               
                if (this.displayFieldForm) {
                    return this.addFieldButtonIconClose
                }
                else{
                    return this.addFieldButtonIconOpen
                }
              }

      
        },

        ready(){

            console.log("this.table", this.table)

            //car belongsTo Table => list des "enfants"
            this.$http.get('/api/table/'+this.table+'/fields', function(fields){

                this.fieldList = fields
                console.log("fields", fields)
                
            })





        },

        methods: {

            removeField : function(field){
                
                
                this.$http.delete('/api/table/'+this.table+'/fields/'+field.id, function(fields){
                    this.fieldList.$remove(field);
                })
                
            },

            showCreateFieldForm:function(){
                this.displayFieldForm = ! this.displayFieldForm
                if ( ! this.displayFieldForm) {
                    this.addFieldButtonIcon = 'fa fa-minus'
                }
            },

            addField: function () {

                var fields = this.newFieldValue


                this.$http.post('/api/fields/create',fields ,function(response){
                    this.fieldList.push(response);
                    this.newFieldValue = '' 
                    this.displayFieldForm = false
                })
            },

            showEditFieldForm:function(field){

                this.showEditFieldButton = true
                this.showCreateFieldButton = false
                this.displayFieldForm=true

                this.displayEditFieldForm = true
                this.editFieldButtonText = 'edit'

                this.newFieldValue=field


            },
       

             cancelEdit:function(){
                this.showEditFieldButton = false
                this.showCreateFieldButton = true
                this.displayFieldForm=false
                //this.newFieldValue = '' 
             },


            editField : function(){

                console.log("editing", this.newFieldValue.id)
                console.log("field", this.newFieldValue)


                this.$http.put('/api/fields/'+this.newFieldValue.id ,this.newFieldValue ,function(response){
                    this.fieldList.push(response);
                    this.newFieldValue = '' 
                    this.displayFieldForm = false
                })

             }

        },

    })



    new Vue ({
        el: 'body',


    })
        
</script>




--------------------/
@endsection

