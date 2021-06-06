<template>
 <div class="new-component">
    <v-card>
      <v-card-title cols="4" class="subheading font-weight-bold">Top 10 Crypto News</v-card-title>
      <v-data-table
          :headers="headers"
          :items="posts"
          :items-per-page="10"
          item-key="title"
          class="elevation-1"
          :footer-props="{
            showFirstLastPage: true,
            firstIcon: 'mdi-arrow-collapse-left',
            lastIcon: 'mdi-arrow-collapse-right',
            prevIcon: 'mdi-minus',
            nextIcon: 'mdi-plus'
          }"
        >
        </v-data-table>
    </v-card>
 </div>
</template>
<script>
  export default {
    data () {
      return {
        headers: [
          {
            text: 'User Id',
            align: 'start',
            value: 'userId',
          },
          { text: 'News Title', value: 'title' },
          { text: 'Completed', value: 'completed' },
        ],
        posts:[],
      }
    },
    mounted: function(){
      axios.get('https://jsonplaceholder.typicode.com/todos').then(response => this.posts = response.data)
        .catch(
          this.posts = [{title:'No Records found'}]
          ).finally(() => console.log('data loading'))

    }
  }
</script>
<style>
.news-component ul{
     padding-left:0px;
    list-style: none;
}
.news-component ul li{
    list-style: none;
}
.v-card{
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
</style>