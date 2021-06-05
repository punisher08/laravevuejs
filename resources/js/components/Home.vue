<template>
  <div class="first-component">
  <h1>First Component</h1>
  <ul>
    <li v-for="post in posts">{{post.title}}</li>
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
<style></style>