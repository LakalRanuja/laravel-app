@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="likePost w-100">
            <div id="heartLike" @click="likes"></div>
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{$post->user->profile->profileImage() }}" class="rounded-circle w-100"
                             style="max-width: 50px">
                    </div>
                    <div>
                        <div style="font-weight: bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                            <a href="" style="padding-left: 10px">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p><span style="font-weight: bold">
                        <a style="padding-right: 10px" href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>
                <div class="row">
                    <div class="col-3 mr-2">
                        <like-component></like-component>
                    </div>
                    <div class="col-9 mt-2 ">
                        <comment-loader></comment-loader>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<style>
    #heartLike {
        position: absolute;
        left: 440px;
        top: 300px;
        display: inline-block;
        width: 100px;
        margin-top: 90px;
        aspect-ratio: 1;
        border-image: radial-gradient(black 69%, #0000 70%) 84.5%/50%;
        clip-path: polygon(-41% 0, 50% 91%, 141% 0);
        cursor: pointer;
        overflow: hidden;
        display: none;
    }
</style>

<script>
    import CommentLoader from "../../js/components/CommentLoader";

    export default {
        components: {CommentLoader}
    }
</script>
@endsection
