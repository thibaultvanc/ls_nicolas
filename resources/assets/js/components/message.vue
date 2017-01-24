
<style>
.block-message{
    /*background-color: #e7e7e7*/
}
</style>



<template>

    <div class="block-message {{ block_background }}">
        <div class="header"></div>
        <div class="body">
            <div class="row">
                <div class="col-md-8">
                    <h2>{{data.id}}</h2>
                    <h5>Le {{data.created_at}}</h5>
                    {{data.content}}
                </div>
                <div class="col-md-4 text-right">



                    <div v-if="data.response==null">
                        <button @click="reject(data)" class="btn btn-danger">
                            <i class="fa fa-spin fa-spinner" v-show="load && action=='reject'"></i> Refuser
                        </button>
                        &nbsp;
                        <button @click="accept(data)"  class="btn btn-success">
                            <i class="fa fa-spin fa-spinner" v-show="load && action=='accept'"></i> Accepter
                        </button>
                    </div>

                    <div v-if="data.response==1">
                        <div class="label label-success">Accepted</div>
                    </div>

                    <div v-if="data.response==0">
                        <div class="label label-danger">Rejected</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="action">

        </div>
    </div>


</template>


<script>

export default {
		components: {
		},

        props :{
			data:{
				required: true,
				type:Object,
				}
        },

        data () {
            return {
                load:false,
                action:''

            }
        },


        ready () {
            console.log('message item component ready');
        },

        computed:{
            block_background () {
                if (this.action=='reject') {
                    return 'bg-danger'
                }else if (this.action=="accept") {
                    return 'bg-success'
                }
                return 'bg-default'
            }
        },

        methods:{
            accept (message) {
                this.load=true
                this.action='accept'

                this.data.status = 'done'
                this.data.response = true
                this.load=false
                this.action=''
/*
                this.$http.post('/api/messages/' + this.data.id + '/accept').then(function (response) {
                        this.data.status = 'done'
                        this.data.response = true
                        this.load=false
                        this.action=''
                      }, function (response) {
                          // error callback
                      });
*/
            },
            reject (message) {
                this.load=true
                this.action='reject'


                this.data.status = 'done'
                this.data.response = false
                this.load=false
                this.action=''
/*
                this.$http.post('/api/messages/' + this.data.id + '/reject').then(function (response) {

                        this.data.status = 'done'
                        this.data.response = false
                        this.load=false
                        this.action=''
                      }, function (response) {
                          // error callback
                      });
*/
            }

        }
}



</script>
