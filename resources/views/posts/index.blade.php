@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row" style="padding-top: 10px; padding-bottom: 10px">
        <div class="col-6 offset-3">
            <div>
                <!--                <div class="d-flex align-items-center">-->
                <!--                    <div class="pe-3">-->
                <!--                        <img src="{{$post->user->profile->profileImage() }}" class="rounded-circle w-100"-->
                <!--                             style="max-width: 50px">-->
                <!--                    </div>-->
                <!--                    <div>-->
                <!--                        <div style="font-weight: bold">-->
                <!--                            <a href="/profile/{{$post->user->id}}">-->
                <!--                                <span class="text-dark">{{$post->user->username}}</span>-->
                <!--                            </a>-->
                <!--                            <a href="" style="padding-left: 10px">Follow</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <hr>-->
                <p><span style="font-weight: bold">
                        <a style="padding-right: 10px" href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>{{$post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>
@endsection
