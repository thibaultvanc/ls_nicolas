<style>

</style>



<template>

<div class="container">



    <form class"form-horizontal" >

    <table class="table text-center">
        <thead>
            <tr>
                <th>action</th>
                <th v-for="field in fieldList">
                    {{field.name}}
                </th>
                <th> </th>
            </tr>
    </thead>
    <tbody>
            <tr v-for="record in recordList">
                <td>
                    <button @click.prevent="deleteRecord(record)"><i class="fa fa-times" class="text-success"></i></button>
                    <button @click.prevent="edit(record)"><i class="fa fa-edit" class="text-success"></i></button>
                </td>
                <td v-for="field in fieldList">

                    <div v-if="editing_id==record.raw_id && mode=='update'">
                        <input v-model="record[field.name]" class="" :placeholder="field.name">
                    </div>
                    <div v-else>
                        {{record[field.name] }}
                    </div>
                </td>
                 <td >
                     <button @click.prevent="update(record)" class="btn btn-primary" v-if="editing_id==record.raw_id && mode=='update'"> Update</button>

                 </td>
            </tr>
            <tr v-if="mode=='create'">
                <td>
                    <!-- <button @clik.prevent="deleteRecord(record)"><i class="fa fa-times" class="text-success"></i></button> -->
                </td>
                    <td v-for="(key, fielda) in fieldList">

                            <div class="well">
                                {{fielda.name}}
                                <div v-if="fielda.relations[0] && !fielda.relations[1] && fielda.relations[0].pivot.laravel_name=='belongsTo'">

                                    <select v-model="form[fielda.name]" class="" :value="defaultValue" :placeholder="fielda.name">
                                        <option v-for="item in $data[fielda.relations[0].table.model]" :value="item.key">{{item.label}}</option>

                                    </select>

                                </div>
                                <div v-else>
                                    <input v-model="form[fielda.name]" class="" :value="defaultValue" :placeholder="fielda.name">
                                </div>



                            </div>

                    </td>
                    <td>
                        <button @click.prevent="addRecord" class="btn btn-success pull-right" v-if="mode=='create'"> addRecord</button>
                    </td>


            </tr>




        </tbody>
    </table>

    </form>
</div>


</template>


<script>



    export default {


    		props :{
    			table:{
    				required: true,
    				type:Object,
                },
    			primary:{
    				required: true,
    				type:String,
    				}
            },


            ready () {
                console.log('component ready');
                this.fetchFieldList()
                this.fetchRecordList()


            },

            data(){
                return {
                    mode:'create',
                    defaultValue:'',
                    form:{},
                    editing_id:'',
                    fieldList:[],
                    recordList:[],
                    // lists:[],

                };
            },

            filters:{


            },

            methods: {

                fetchFieldList:function(){ //ok
                  this.$http.get('/api/table/'+this.table.id+'/fields').then(function (response) {
                            this.fieldList = response.data


                            this.fieldList.map(field=>{


                                field.relations.map(relation=>{

                                    if (relation.pivot.laravel_name == 'belongsTo') {
                                        console.log('linked to model', relation.table.model);

                                        this.$http.get('/api/table/'+relation.table.id+'/records').then(function (response) {

                                            var keyLabel = [];
                                            response.data.map(data=>{

                                                console.log('data', data);
                                                let label=''
                                                let key=''


                                                data.map(field=>{
                                                    console.log('field',field);
                                                    if (field.field.is_primary) {
                                                        console.log('____here');
                                                        key = field.value
                                                    }

                                                    label += field.value + ' - '
                                                })



                                                // let label = response.data.keys('name').join('')
                                                keyLabel.push({key, label})
                                            })

                                            this.$set(relation.table.model, keyLabel)


                                        }, function (response) {
                                            // error callback
                                        });


                                    }

                                })

                            })


                        }, function (response) {
                            // error callback
                        });

                },

                fetchRecordList:function(){
                  this.$http.get('/api/table/'+this.table.id+'/fixedrecords').then(function (response) {
                            this.recordList = response.data

                        }, function (response) {
                            // error callback
                        });

                },

                addRecord () {
                    this.$http.post('/api/table/'+this.table.id+'/post_fixed_record', this.form).then(function (response) {
                              this.recordList.push(response.data)
                              this.defaultValue=''
                              this.form=''
                          }, function (response) {
                              // error callback
                          });
                },
                deleteRecord (record) {
                    raw_id = record.raw_id
                    this.$http.delete('/api/table/'+this.table.id+'/delete_fixed_record/'+raw_id).then(function (response) {
                              this.recordList.$remove(record)

                          }, function (response) {
                              // error callback
                          });
                },
                edit (record) {
                    console.log(record.raw_id);
                    if (this.mode == 'update') {
                        this.mode='create'
                        this.editing_id=record.raw_id
                    }else{
                        this.mode='update'
                        this.editing_id=record.raw_id
                    }
                },
                update (record) {
                    //record_id = record[Object.keys(record)[0]]
                    this.editing_id=record.raw_id
                    this.$http.put('/api/table/'+this.table.id+'/update_fixed_record/'+this.editing_id, record).then(function (response) {
                        this.mode='create'
                        this.recordList.$remove(record)
                        this.recordList.push(response.data)

                          }, function (response) {
                              // error callback
                          });
                },
          },
          computed:{


          }

    }


</script>
