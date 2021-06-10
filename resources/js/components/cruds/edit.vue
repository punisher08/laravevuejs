<template>
    <div>
    <v-icon small class="mr-2"    data-app  @click="dialog = true" >mdi-pencil</v-icon>
    <v-row justify="center">  
    <v-dialog
      
      v-model="dialog"
      max-width="400"
      >
     <v-card>
       <v-card-title class="text-h5">Edit Data</v-card-title>
        <v-card-text>  
             <v-text-field :label="name.item.name" v-model="itemname" name="name" ></v-text-field>
             <v-text-field :label="name.item.email" v-model="itememail" name="email" :rules="emailRules" ></v-text-field>
             <v-text-field :label="name.item.website" v-model="itemwebsite" name="website" ></v-text-field>
              <v-btn v-on:click="CloseModal()" dark>close</v-btn>
              <v-btn v-on:click="SaveData()" dark>Save</v-btn>
             
        
        </v-card-text>
     </v-card>
    </v-dialog>
  </v-row>
    
    </div>
</template>

<script>

  export default {
     data () {
      return {
        dialog: false,
        itemname:'', 
        itememail:'', 
        itemwebsite:'', 
        itemid:this.name,
        emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],

      
      }
    },
    props:{
      name,
    },
    methods:{
      SaveData(){
        var id = this.itemid.item.id;
         const crudsdata = {
          name:this.itemname,
          email:this.itememail,
          website:this.itemwebsite
        }
        axios.post("http://127.0.0.1:8000/api/update/"+id,crudsdata).then(response => console.log(response)).catch(() => alert('Please follow'));
        this.$router.go(0);
      },
      CloseModal(){
         this.$router.go(0);
      }
    }
 
  }
</script>