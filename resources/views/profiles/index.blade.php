@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 d-flex align-items-center justify-content-center">
            <img src="/img/pp.png" class="rounded-circle" style="width: 300px;border: 1px solid #e4e3e1">
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2 class="font-weight-light">{{ $user->username }}</h2>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex pt-4">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>165</strong> followers</div>
                <div class="pr-5"><strong>176</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection