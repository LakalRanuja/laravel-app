@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
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
                    </span>{{$post->caption}}
                    <like-button post-id="{{$post->id}}"></like-button>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
