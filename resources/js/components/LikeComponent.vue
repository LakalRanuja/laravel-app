<template>

        <div class="col-9">
            <like-button @liked="liked"/>
            <div class="like-count"><strong>  {{likeCount}}</strong>Likes</div>
        </div>

</template>

<script>

    import LikeButton from '@/components/LikeButton.vue'

    export default {
        name: 'App',
        components: {
            LikeButton,
        },
        data() {
            return {
                likeCount: '',

            }
        },
        methods: {
            liked: function () {
                console.log("llikes");
                this.likeCount++;
            }
        }
    }

</script>

<style scoped>

</style>
