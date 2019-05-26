<template>
   <div class="detail" @click="Detail">
       <img :src="hinhanh" alt="" style="width:100%" >
       <h3>{{tensp}}</h3>
       <p>{{motangan}}</p>
   </div>
</template>

<script>
    export default {
        props: ['id', 'hinhanh','tensp','motangan'],
        data:function(){
            return {

            }
        },
        mounted() {
            var countLength;
            countLength = this.motangan.length > 100 ? 1:0;
            if (countLength)
            {
                this.motangan=this.motangan.substring(0,100) + '...';

            }
        },
        methods:{
            Detail:function () {
                window.location.href= `/detail/${this.id}`;
            }
        }


    }
</script>

<style  scoped>
    .detail
    {
        cursor: pointer;
    }

</style>



