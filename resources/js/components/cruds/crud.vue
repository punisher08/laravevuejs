<template>
    <div class="cruds d-flex">
        <v-row>
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
                        class="mx-4"
                        ></v-text-field>
                    </template>
                        </v-data-table>
                    </div>
                </v-card>
            </v-col>
            <v-col class="col-lg-5">
              <v-card class="p-3">
              <CreateForm></CreateForm>
              </v-card>
            </v-col>
          
        </v-row>
    </div>
</template>

<script>
import CreateForm from './create';
    export default {
   components:{
    CreateForm
   },
    mounted: function(){
        axios.get('http://127.0.0.1:8000/api/cruds').then(response => this.data = response.data.data)
    },
    data () {
      return {
        search:'',
        data:[],
        checkbox: false
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
        ]
      },
    },
    methods: {
      filterOnlyCapsText (value, search, item) {
        return value != null &&
          search != null &&
          typeof value === 'string' &&
          value.toString().indexOf(search) !== -1
      },
    },
  }
</script>
