<template>
    <div class="row">
        <div class="col-12">
            <input id="postComment" type="text" name="postComment" v-model="postComment" @change="postComment" placeholder="comments"
                   style="text-align: center"/>
            <button id="commentBtn" class="ml-3" @click="commentBtn()">send</button>
        </div>

    </div>
</template>
<style>
    @import "/resources/css/postComment.css";
</style>
<script>
    export default{
        props:['allComments'],
        mounted() {
            console.log('post comments loaded');
        },
        data:function () {
            return{
                allComments: ''
            }
        },
        methods: {
            commentBtn:function (event) {
                this.emit('commented', event.target.value.postComment());
            }
        }
    }
</script>
