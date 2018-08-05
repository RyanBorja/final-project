<template>

    <div class="container">
        <div class="form-group">
            <label for="searchBox" class="font-weight-bold">Filter Materials:</label>
            <input id="searchBox" class="form-control" type="text" v-model="searchString" placeholder="Search by name..." />
        </div>
        
        <div class="row justify-content-center">
            <div class="">
                <div class="row justify-content-center">        
                    <div class="card m-2" v-for="stones in filteredStones"  :key="stones.name" style="width: 330px;">
                        <img class="card-img-top bg-dark" :src="stones.path" alt="material image" style="height: 280px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ stones.name }}</h5> 
                            <p v-if="stones.in_stock" class="card-text"><small class="text-muted">In Stock</small></p>
                            <p v-else class="card-text"><small class="text-muted">On Order</small></p>
                            <div class="row justify-content-between">
                                <div class="col-xs-auto">
                                    <button class="btn btn-sm bg-light"><a :href="'/stones/' + stones.id + '/edit'"><i class="fas fa-pencil-alt text-info"></i></a></button>
                                </div>
                                <div class="col-xs-auto">
                                    <form method="post" :action="'/stones/' + stones.id">
                                        <input type="hidden" name="_token" :value="csrf">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm bg-light" type="submit"><i class="far fa-trash-alt text-danger"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {

        props: ['stoneData'],

        data: () => ({
            searchString: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }),

        mounted() {
            console.log('Component mounted.')
        },

        computed: {


            filteredStones: function() {

                var stones_array = this.stoneData;
                var search_string = this.searchString.toLowerCase();


                if (!search_string) {
                    return stones_array;
                }

                stones_array = stones_array.filter(function(item) {
                    if(item.name.toLowerCase().indexOf(search_string) !== -1) {
                        return item;
                    }
                });

                return stones_array;

            }
        }
    }
</script>
