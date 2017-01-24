
<style>
    li{
        list-style: none
    }

    /* always present */
.expand-transition {
  transition: all .5s ease;
  height: auto;
  padding: 10px;
  background-color: #eee;
  overflow: hidden;
}

/* .expand-enter defines the starting state for entering */
/* .expand-leave defines the ending state for leaving */
.expand-enter, .expand-leave {
  height: 0;
  padding: 0 10px;
  opacity: 0;
}

</style>



<template>


    <div class="row">
        <div class="col-md-12 ">

            <button class="pull-right btn btn-info" @click="filtering=true" v-if="!filtering"><i class="fa fa-filter"></i> </button>

            <div class="bg-warning " v-if="filtering" transition="expand">
                <button class="pull-right btn btn-default" @click="filtering=false,from=null,to=null" v-show="filtering"> - annuler</button>
                <h4>Filtres</h4>
                <div class="row text-right">
                    <div class="col-md-4"><label for="">debut</label><input type="date" v-model="from"></div>
                    <div class="col-md-4"><label for="">fin</label><input type="date" v-model="to"></div>
                    <div class="col-md-4"><button @click="filterDates" v-show="from && to" class="pull-right btn btn-primary" >Filter</button></div>

                </div>
            </div>

        </div>
    </div>

    <br>

<div v-if="loading" class="text-center">
    <span class="fa fa-spin fa-spinner fa-3x"></span>
</div>

<div v-else transition="expand">
    <div class="row" v-if=" all_count!=0">
        <div class="col-md-2">
            <ul class="list-group">
                  <a href="#" class="list-group-item {{responseType==null?'active':''}}" @click="show_todo">
                        <span class="badge">{{todo}}</span>
                        A traiter
                  </a>
                  <a href="#" class="list-group-item {{responseType==1?'active':''}}" @click="show_accepted">
                        <span class="badge">{{accepted}}</span>
                        Acceptés
                  </a>
                  <a href="#" class="list-group-item {{responseType==0?'active':''}}" @click="show_rejected">
                        <span class="badge">{{rejected}}</span>
                        Refusés
                  </a>
                  <a href="#" class="list-group-item {{all==true?'active':''}}" @click="show_all">
                      <span class="badge">{{all_count}}</span>
                      Tous
                  </a>
            </ul>
        </div>
        <div class="col-md-10">

            <h2>
                <span v-if="responseType==null" >
                    <b>À traiter</b>
                </span>

                <span v-if="responseType==1" >
                    <b>Acceptés</b>
                </span>

                <span v-if="responseType==0" >
                    <b>Refusés</b>
                </span>

                <span v-if="responseType=='all' && all==true" >
                    <b>Tous les messages</b>
                </span>
            </h2>

            <ul>
                    <li v-for="message in messageList | seeResponse responseType" v-show="messageList.length" transition="fade" class="animated"><!--| seeResponse responseType-->
                        <message :data.sync="message"></message>
                        <hr>
                        <BR>
                        <BR>

                    </li>

                    <li >

                            <div class="alert alert-info" v-if="responseType==null && todo==0" >
                                Pas de messages <b>à traiter</b>
                            </div>

                            <div class="alert alert-info" v-if="responseType==1 && accepted==0" >
                                Pas de messages <b>acceptés</b>
                            </div>

                            <div class="alert alert-info" v-if="responseType==0 && rejected==0" >
                                Pas de messages <b>refusés</b>
                            </div>


                    </li>
        </div>
    </ul>
    </div>

    <div class="alert alert-info" v-else>
        <div v-if="filtering">
            <i class="fa fa-filter"></i> Pas de message sur ce filtre
        </div>

        <div v-else>
            Pas encore de messages ...
        </div>

    </div>
    </div>


</template>


<script>


let data = [
{
"id": 1,
"content": "Ut blanditiis quis at veniam odit atque.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:17"
},
{
"id": 2,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 3,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 4,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 5,
"content": "Et quam ea ad qdsdqsdqsdquo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 6,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 7,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 8,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 9,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 10,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 11,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
},
{
"id": 12,
"content": "Et quam ea ad quo perspiciatis voluptatem.",
"contest_id": 1,
"response": null,
"created_at": "2016-05-03 23:08:17",
"updated_at": "2016-05-03 23:08:33"
}
]


import message from './message.vue';

export default {
		components: {
			message
		},



		props :{
			contest:{
				required: true,
				type:String
				}
        },

        ready () {

            this.fetchMessages()

        },

        data () {
            return {
                messageList:[],
                all:false,
                responseType:null,
                filtering:false,
                loading:true,

                from:'',
                to:''

            };
        },

        filters:{


            seeResponse: function(messages, responseType){
                return messages.filter(function(message){
                    if (responseType != 'all') {
                        return message.response == responseType
                    }
                    return true
                });
            },


        },

        methods: {


            fetchMessages:function(){
                this.messageList = data
                this.loading=false
/*
              this.$http.get('/api/messages?contest='+this.contest).then(function (response) {
                        this.messageList = response.data
                        this.loading=false

                    }, function (response) {
                        // error callback
                    });
*/
            },

            show_todo () {
                this.responseType=null;
                this.all=false
            },

            show_accepted () {
                this.responseType=1;
                this.all=false
            },

            show_rejected () {
                this.responseType=0;
                this.all=false
            },

            show_all () {
                this.responseType='all';
                this.all=true
            },


            filterDates () {
                this.loading=true
                 this.messageList = data
                /*
                this.$http.get('/api/messages?contest=' + this.contest + '&from=' + this.from + '&to=' + this.to ).then(function (response) {
                          this.messageList = response.data
                          this.loading=false

                      }, function (response) {
                          // error callback
                      });
                 */
            }






      },
      computed:{

          all_count() {
             return  this.messageList.length
         },

          todo() {
             return  this.messageList.filter(function(message){
                 return message.response == null
             }).length
         },

          accepted() {
              return  this.messageList.filter(function(message){
                  return message.response == 1
              }).length
         },

          rejected() {
              return  this.messageList.filter(function(message){
                  return message.response == 0
              }).length
         },



      }

}




</script>
