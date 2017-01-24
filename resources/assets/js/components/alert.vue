<template>
    <div class="Alert alert-{{ alertType }}" 
         v-show="show"
         transition="fade"
    >
        <slot></slot>

        <span class="Alert__close" 
              v-show="important" 
              @click="show = false"
        >
            <i class="fa fa-times"></i>
        </span>
    </div>
</template>

<script>
    export default {
        props: {
            type: { default: 'info' },
            show : {
              type:Boolean,
              default:false
            },
            timeout: { default: 5000 },
            important: { 
                type: Boolean,
                default: false
            }
        },

       data() {
           //return { show: false };
       },

       ready() {

            

       			if (! this.important) {
       			           	alert(this.important)
       			               setTimeout(
       			                    () => this.show = false,
       			                    this.timeout
       			               )
       			}

       },

       computed: {
          alertType (){
              if (this.type == 'error') {
                return 'danger'
              }
              return this.type
          }
       }
    }
</script>

<style>
    .Alert {
        position: relative;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .Alert__close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .fade-transition {
        transition: opacity .4s ease;
    }

    .fade-leave {
        opacity: 0;    
    }
</style>