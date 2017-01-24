<template lang="html">
    <section>

        <!-- <pre>
        {{relation1|json}}
    </pre> -->


    <h1>Edit Belongs To Relation on vue js</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3"><i>from Table</i></div>
            <div class="col-md-1"> </div>
            <div class="col-md-3"><i>Pivot</i></div>
            <div class="col-md-1"> </div>
            <div class="col-md-3"><i>To Table</i></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3"><strong>{{relation1.from_field.table.id}} {{relation1.from_field.table.name}}</strong></div>
            <div class="col-md-1"> </div>
            <div class="col-md-3">
                <strong v-if="!showEditPivotTableName"><a href="javascript:void(0)" @click.prevent="editPivotTable">{{relation1.pivot_table.id}} - {{relation1.pivot_table.name}}</a></strong>

                <div v-if="showEditPivotTableName">
                    <input type="text" class="form-control" v-model="form.pivotTableName" />
                </div>
            </div>
            <div class="col-md-1"> </div>
            <div class="col-md-3"><strong>{{relation2.from_field.table.id}} - {{relation2.from_field.table.name}}</strong></div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 bg-warning">{{relation1.from_field.id}} - {{relation1.from_field.name}}</div>
            <div class="col-md-1 bg-warning">
                <i class="fa fa-arrow-right"></i>
            </div>
            <div class="col-md-3 bg-warning">{{relation1.from_field.id}} - {{relation1.to_field.name}}</div>
            <div class="col-md-1"> </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1"> </div>
            <div class="col-md-3 bg-info">
                <a style="color:#FFFFFF" v-if="!showEditPivotFieldNameRelation2" href="javascript:void(0)" @click.prevent="editPivotFieldRelation2">
                    {{relation2.to_field.id}} {{relation2.to_field.name}}
                </a>
                <div v-if="showEditPivotFieldNameRelation2">
                    <input class="form-control" v-model="form.pivotRelation2Name">
                </div>
            </div>
            <div class="col-md-1 bg-info">
                <i class="fa fa-arrow-right"></i>
            </div>
            <div class="col-md-3 bg-info">
                {{relation2.from_field.id}} {{relation2.from_field.name}}
            </div>
        </div>
    <button v-show="showEditPivotTableName || showEditPivotFieldNameRelation2" class="btn btn-primary" name="button" @click="submit">Envoyer</button>
    <button v-show="showEditPivotTableName || showEditPivotFieldNameRelation2" class="btn btn-default" name="button" @click="cancel">Cancel</button>
    <button v-show="!showEditPivotTableName || !showEditPivotFieldNameRelation2" class="btn btn-primary" name="button" @click="edit">Edit</button>
</section>
</template>

<script>
export default {
    props : {
        relation1 : {
            type:Object,
            required:true,
        },
        relation2 : {
            type:Object,
            required:true,
        },

        devis : {
            type:Object,
            required:true,
        },

    },
    ready () {
        this.form.pivotTableName = this.relation1.pivot_table.name
        this.form.pivotTableId = this.relation1.pivot_table.id
        this.form.pivotRelation2Name = this.relation2.to_field.name
        this.form.pivotRelation2Id = this.relation2.to_field.id

    },
    data () {
        return {
            form:{
                pivotTableName:'',
                pivotTableId:'',
                pivotRelation2Name:'',
                pivotRelation2Id:'',
            },
            showEditPivotTableName:false,
            showEditPivotFieldNameRelation2:false,
        }
    },

    methods : {
        edit () {
            this.showEditPivotFieldNameRelation2 = true
            this.showEditPivotTableName = true
        },
        editPivotTable () {
            this.showEditPivotTableName = true
        },
        editPivotFieldRelation2 () {
            this.showEditPivotFieldNameRelation2 = true
        },
        cancel () {
            this.showEditPivotFieldNameRelation2 = false
            this.showEditPivotTableName = false
        },
        submit () {
            console.log('editPivotFieldRelation2');
            this.$http.get('/admin/devis/'+this.devis.id+'/post_update_belongs_to_many/'+this.relation1.from_field_id+'/'+this.relation1.to_field_id, this.form).then(response=>{
                alert('')
            })
        },
    }
}
</script>

<style lang="css">
</style>
