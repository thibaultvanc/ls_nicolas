<style>

</style>



<template>

<div class="container">



    <form class"form-horizontal" >
    
    <table class="table">
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

                    <div v-if="editing_id==record[primary] && mode=='update' && field.name!=primary">
                        <input v-model="record[field.name]" class="form-control" :placeholder="field.name">
                    </div>
                    <div v-else>
                        {{record[field.name] }}
                    </div>
                </td>
                 <td >
                     <button @click.prevent="update(record)" class="btn btn-primary" v-if="editing_id==record[primary] && mode=='update'"> Update</button>

                 </td>
            </tr>
            <tr v-if="mode=='create'">
                <td>
                    <!-- <button @clik.prevent="deleteRecord(record)"><i class="fa fa-times" class="text-success"></i></button> -->
                </td>
                    <td v-for="(key, field) in fieldList">
                            <div class="well" v-if="key!=0">
                                <input v-model="form[field.name]" class="form-control" :value="defaultValue" :placeholder="field.name">

                            </div>

                    </td>
                    <td>
                        <button @click.prevent="addRecord" class="btn btn-success pull-right" v-show="mode=='create'"> addRecord</button>
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

                };
            },

            filters:{


            },

            methods: {

                fetchFieldList:function(){
                  this.$http.get('/api/table/'+this.table.id+'/fields').then(function (response) {
                            this.fieldList = response.data

                        }, function (response) {
                            // error callback
                        });

                },

                fetchRecordList:function(){
                  this.$http.get('/api/table/'+this.table.id+'/records').then(function (response) {
                            this.recordList = response.data

                        }, function (response) {
                            // error callback
                        });

                },

                addRecord () {
                    this.$http.post('/api/table/'+this.table.id+'/post_record', this.form).then(function (response) {
                              this.recordList.push(response.data)
                              this.defaultValue=''
                          }, function (response) {
                              // error callback
                          });
                },
                deleteRecord (record) {
                    record_id = record[Object.keys(record)[0]]
                    this.$http.delete('/api/table/'+this.table.id+'/delete_record/'+record_id).then(function (response) {
                              this.recordList.$remove(record)

                          }, function (response) {
                              // error callback
                          });
                },
                edit (record) {
                    if (this.mode == 'update') {
                        this.mode='create'
                        this.editing_id=record[this.primary]
                    }else{
                        this.mode='update'
                        this.editing_id=record[this.primary]
                    }
                },
                update (record) {
                    //record_id = record[Object.keys(record)[0]]
                    this.editing_id=record[Object.keys(record)[0]]
                    this.$http.put('/api/table/'+this.table.id+'/update_record/'+this.editing_id, record).then(function (response) {
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
