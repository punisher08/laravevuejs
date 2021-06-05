<template>
    <div class="sidebar">
        <v-btn block>
    Block Button
  </v-btn>
       <ul>
           <li><i class="fas fa-home fa-2x"></i><span>Home</span></li>
           <li><i class="fas fa-newspaper fa-2x"></i><span>News</span></li>
           <li><i class="fas fa-photo-video fa-2x"></i><span>Media</span></li>
           <li><i class="fas fa-poll fa-2x"></i><span>Polls</span></li>
       </ul>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.sidebar ul{
    list-style: none;
    padding-left: 0;
}
.sidebar ul li{
    padding: 10px;
    text-align: left;
}
.sidebar ul li i{
    padding-right: 10px;
    height: 36px;
    width: 50px;
}
.sidebar ul li span{
    font-size: 16px;
    font-weight: 700;;
}
</style>