<template>
  <div class="news-component">
  <h1>Crypto News</h1>
  <ul class="news-list">
    <li v-for="post in posts" :key="post.id">News Title: {{post.title}}</li>
  </ul>
  
  </div>
</template>
<script>
 export default {
   mounted: function(){
        axios.get('https://jsonplaceholder.typicode.com/todos').then(response => this.posts = response.data)
        .catch(
          this.posts = [{title:'No Records found'}]
          ).finally(() => console.log('data loading'))
    },
    data: function(){
      return{
        posts:[]
      }
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