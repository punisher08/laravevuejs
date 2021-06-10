<template>
  <v-card
    class="mx-auto"
    height="100%"
    width="auto"
  >
    <v-navigation-drawer
      absolute
      dark
      src="https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
      width="100%"
      permanent
      height="100%"
    >
      <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
     
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
                <router-link :to="item.link"><v-list-item-title>{{ item.title }}</v-list-item-title></router-link>
          </v-list-item-content>
     

        </v-list-item>
    </v-navigation-drawer>
  </v-card>
  
</template>

<script>
 export default {
    data: function(){
      return   {
        // items:[
        //  { name:'Dashboard',icon:'mdi-view-dashboard', links:'/dashbard'}
        // ],
       items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard',link:'/dashboard' },
          { title: 'News', icon: 'mdi-newspaper',link:'/news'},
          { title: 'Linkhunt', icon: 'mdi-clock-start',link:'/dashboard' },
          { title: 'Crud Component', icon: 'mdi-server',link:'/cruds' },
        ],
      }
    },
    mounted(){
    
    }
  }
</script>

<style scoped>
.v-list-item__icon{
  padding-right:10px;

}
.v-list-item__content > a{
color:#fff;
}
.v-list-item__content > a:hover{
text-decoration:none;
}
</style>