<template>
    <div class="cruds">
      <div class=" d-flex">
        <v-row
            <v-col dense  class="col-lg-7">  
                <v-card class="p-3">
                  <h4>Crud Component List</h4>
                    <div class="crud-datas">
                        <v-data-table
                        :headers="headers"
                        :items="data"
                        item-key="id"
                        class="elevation-1"
                        :search="search"
                        :custom-filter="filterOnlyCapsText"
                        >
                      <template v-slot:top>
                        <v-text-field
                        v-model="search"
                        label="Search Title"
                        color="black"
                        class="mx-4"
                        ></v-text-field>
                    </template>
                      <template v-slot:item.actions="{ item }">
                      <div class="d-flex">
                        
                      <EditForm :name="{item}"></EditForm>
                   
                      <v-icon
                        small
                        @click="deleteItem(item,$event)"
                      >
                        mdi-delete
                      </v-icon>
                      </div>
                        </template>
                        </v-data-table>
                    </div>
                </v-card>
            </v-col>
            <v-col class="col-lg-5">
              <v-card class="p-3">
              <CreateForm @AddChange="Logchange($event)"></CreateForm>
              </v-card>
            </v-col>
        </v-row>
      </div>
      
    </div>
</template>

<script>
import CreateForm from './create';
import EditForm from './edit';
    export default {
   components:{
    CreateForm,
    EditForm,
   },
    mounted: function(){
        axios.get('http://127.0.0.1:8000/api/cruds').then(response => this.data = response.data.data);
    },
    data () {
      return {
        dialog:false,
        name:'',
        email:'',
        website:'',
        search:'',
        data:[],
        checkbox: false,
      }
    },
    computed: {
      headers () {
        return [
          {
            text: 'Name',
            align: 'start',
            sortable: false,
            value: 'name',
          },
          {
            text: 'Email',
            value: 'email'
          },
          { text: 'Website', value: 'website' },
          { text: 'Actions', value: 'actions', sortable: false },
        ]
      },
    },
    methods: {
      CloseDialog(){
        this.dialog = true;
        console.log(this.dialog);
      },
      deleteItem(item){
        axios.delete('http://127.0.0.1:8000/api/delete/'+item.id);
        this.data.splice(this.data.indexOf(item), 1);   
      },
      //  editItem(item,event){
      //   event.preventDefault();
      //   this.dialog = true;
      //   console.log('test');

      //   // axios.get('http://127.0.0.1:8000/api/edit/'+item.id).then(response => console.log(response))
      // },
      Logchange: function($event){        
        this.data.push({'name':$event.name,'email':$event.email,'website':$event.website});
      },
      filterOnlyCapsText (value, search, item) {
        // console.log(search);
        return value != null &&
          search != null &&
          typeof value === 'string' &&
          value.toString().indexOf(search) !== -1
      },
    },
  }
</script>
<style>
.v-text-field.v-text-field--solo:not(.v-text-field--solo-flat) > .v-input__control > .v-input__slot{
  background:#fff;
  color:#333;
}
.input__label {
   color: #333;
}
</style>

