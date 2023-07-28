<template>
    <div class="row">
        <div class="col-12">
            <post-comment @commented="commented"/>
            <div class="row mt-5">
                <div class="col-12">
                    <div id="commentLoader">
                        <p class="p-2" style="border: 1px solid; border-radius: 20px">{{allComments}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PostComment from '@/components/PostComment.vue'
    export default {
        name: 'App',
        components: {
            PostComment,
        },
        data() {
            return{
                allComments: '',
            }
        },
        methods: {
            commented:function () {
                console.log('Commented');
                this.allComments;
            }
        }
}

</script>


