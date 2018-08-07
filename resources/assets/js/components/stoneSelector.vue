<template>

    <div class="container">
        <div class="form-group">
            <label for="searchBox" class="font-weight-bold">Filter Materials:</label>
            <input id="searchBox" class="form-control" type="text" v-model="searchString" placeholder="Search by name..." />
            <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input value="true" type="radio" name="isGranite" id="isGraniteFlag" autocomplete="off" checked> Granite
                </label>
                <label class="btn btn-secondary">
                    <input value="true" v-model="isGreen" type="radio" name="isGreen" id="isGreenFlag" autocomplete="off"> Green
                </label>
                <label class="btn btn-secondary">
                    <input value="true" type="radio" name="isStock" id="isStockFlag" autocomplete="off"> In Stock
                </label>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="">
                <div class="row justify-content-center">        
                    <div class="card m-2" v-for="stones in filteredStones"  :key="stones.name" style="max-width: 330px;">
                        <img class="card-img-top bg-dark" :src="stones.path" alt="material image" style="height:280px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ stones.name }}</h5> 
                            <p v-if="stones.in_stock" class="card-text"><small class="text-muted">In Stock</small></p>
                            <p v-else class="card-text"><small class="text-muted">On Order</small></p>
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
            isGreen: false,
        }),

        mounted() {
            console.log('Component mounted.')
        },

        computed: {


            filteredStones: function() {

                var stones_array = this.stoneData;
                var search_string = this.searchString.toLowerCase();
                var green = stones_array.filter(function(item) {
                    if(item.color == 'green') {
                        return item;
                    }
                });
                var granite = stones_array.filter(function(item) {
                    if(item.type == 'granite') {
                        return item;
                    }
                });
                var inStock = stones_array.filter(function(item) {
                    if(item.in_stock == true) {
                        return item;
                    }
                });

                if(isGreen){
                    return green;
                }
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
