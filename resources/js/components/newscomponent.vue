<template>
 <div class="new-component">
   <h3>JSON Placeholder Datas</h3>
 <v-data-table
    :headers="headers"
    :items="posts"
    :items-per-page="5"
    item-key="title"
    class="elevation-1"
    :footer-props="{
      showFirstLastPage: true,
      firstIcon: 'mdi-arrow-collapse-left',
      lastIcon: 'mdi-arrow-collapse-right',
      prevIcon: 'mdi-minus',
      nextIcon: 'mdi-plus'
    }"
  ></v-data-table>
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
</style>