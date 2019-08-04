<template>
    <div>
    <table class="table">
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Description</td>
        </tr>
        <tr v-for="item in liste" :key="item.id">
            <td>{{item.id}}</td>
            <td>{{item.title}}</td>
            <td>{{item.description}}</td>
        </tr>
            <!-- <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading> -->
        </table>
        <button @click="getData">Load Data</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              liste: [],
              page: 1,
            };
          },
          methods: {
            infiniteHandler($state) {
                let vm = this;
 
                this.$http.get('/items?page='+this.page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        $.each(data.data, function(key, value) {
                                vm.liste.push(value);
                        });
                        //$state.loaded();
                    });
 
                this.page = this.page + 1;
            },
            getData() {
                let vm = this;
 
                this.$http.get('/items?page='+this.page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        console.log(data);
                        $.each(data.data, function(key, value) {
                                vm.liste.push(value);
                        });
                        //$state.loaded();
                    });

                this.page = this.page + 1;
            },
          },
          mounted: function() {
                this.getData();
          }
    }


</script>

