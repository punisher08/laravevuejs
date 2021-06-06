<template>
  <v-card
    class="mx-auto"
    height="100%"
    width="300"
  >
    <v-navigation-drawer
      absolute
      dark
      src="https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
      width="100%"
      permanent
      height="100%"
    >
      <v-list>
        <v-list-item
          v-for="([icon, text], i) in items"
          :key="i"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ text }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>

<script>
 export default {
    data: function(){
      return   {
        items: [
        [' mdi-view-dashboard', 'Dashboard'],
        ['mdi-newspaper', 'News'],
        ['mdi-clock-start', 'Link-hunt']
        ]
      }
    }
  }
</script>

<style scoped>
.v-list-item__icon{
  padding-right:10px;

}
</style>