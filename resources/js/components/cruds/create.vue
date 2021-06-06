
<template>
  <v-form
    ref="form"
    v-model="valid"
    lazy-validation
  >
  <h3>Create</h3>
    <v-text-field
      v-model="name"
      :counter="10"
      :rules="nameRules"
      label="Name"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>

    <v-text-field
      v-model="website"
      :rules="[v => !!v || 'Item is required']"
      label="Website"
      required
    ></v-text-field>

    <v-checkbox
      v-model="checkbox"
      :rules="[v => !!v || 'You must agree to continue!']"
      label="Do you agree?"
      required
    ></v-checkbox>
    <v-btn dark v-on:click="submit">Submit</v-btn>
  </v-form>
</template>
<script>

  export default {
   
    data: () => ({
      valid: true,
      name: '',
      email:'',
      website:'',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
  
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
      submit:function(){
        const crudsdata = {
          name:this.name,
          email:this.email,
          website:this.website
        }
          axios.post("http://127.0.0.1:8000/api/cruds/store", crudsdata)
          .then(response => console.log(response));
      }
    },
  }
</script>