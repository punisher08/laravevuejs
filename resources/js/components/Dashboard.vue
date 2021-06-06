<template>
 <div class="dashboard">
      <v-row dense>
        <v-col
          v-for="(item, i) in items"
          :key="i"
          cols="4"
        >
          <v-card
            :color="item.color"
            dark
          >
            <div class="d-flex flex-no-wrap justify-space-between">
              <div>
                <v-card-title
                  class="text-h5"
                  v-text="item.title"
                ></v-card-title>

                <v-card-subtitle v-text="item.artist"></v-card-subtitle>

                <v-card-actions>
                    <v-btn text>
                    Listen Now
                    </v-btn>
                </v-card-actions>
              </div>

            </div>
          </v-card>
        </v-col>
      </v-row>
  

  </v-card>
 </div>
</template>
|<script>
export default {
    // name: 'Dashboard',
    data: () => ({
      items: [
        {
          color: '#1F7087',
          title: 'DASHBOARD',
          artist: 'Foster the People',
        },
        {
          color: '#952175',
          title: 'LATEST NEWS',
          artist: 'Ellie Goulding',
        },
         {
          color: '#1D9BEE',
          title: 'LINK HUNT',
          artist: 'Ellie Goulding',
        },
      ],
    }),
  }
</script>