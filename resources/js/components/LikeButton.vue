<template>

    <div>

        <div id="heart" @click="likes"></div>

    </div>

</template>

<style>
    @import "/resources/css/likeButton.css";
</style>

<script>
    export default  {
        props: ['likeParent'],
        mounted() {
            console.log('mounted')
        },
        data:function() {
            return {
                likeCount: 0
            }
        },

        methods: {
            likes:function() {
                this.$emit('liked')
            }
        }
    }
</script>
