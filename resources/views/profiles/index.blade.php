@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/dhanush.jpg" style="height: 150px; width: 150px;  " class="rounded-circle">
        </div>

        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>150</strong> posts</div>
                <div class="pe-5"><strong>26k</strong> followers</div>
                <div class="pe-5"><strong>250</strong> following</div>
            </div>
            <div class="pt-3 " style="font-weight: bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="https://en.wikipedia.org/wiki/Dhanush">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row" style="text-align: center">
        <div class="col-4"><img class="w-5" src="/svg/dhanush.jpg" style="height: 250px; width: 250px; right: 100px  ">
        </div>
        <div class="col-4"><img class="w-5" src="/svg/dhanush.jpg" style="height: 250px; width: 250px;  "></div>
        <div class="col-4"><img class="w-5" src="/svg/dhanush.jpg" style="height: 250px; width: 250px;  "></div>
    </div>
</div>
@endsection
