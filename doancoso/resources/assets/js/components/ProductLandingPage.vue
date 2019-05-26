<template>

    <div class="w3-row-padding w3-padding-16 w3-center" id="menu">
        <div class="box">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" v-model="search" id="search" placeholder="Search..."/>
            </div>
        </div>
        <div class="w3-quarter" v-for="product in products">
            <product :hinhanh="product.hinhanh"
                     :tensp="product.tensp"
                     :motangan="product.motangan"
                     :id="product.id">
            </product>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['products'],
        data() {
            return {
                search: '',
            }
        },
        //Lay du lieu cho component
        mounted() {
            console.log(this.products);
        },
        computed: {
            filteredProduct() {
                return this.products.filter(product => {
                    return product.title.toLowerCase().includes(this.search.toLowerCase());
                })
            }
        }


    }
</script>
<style scoped>
    /*.w3-quarter*/
    /*{*/
    /*border: 1px solid #e0b489;*/
    /*}*/


</style>