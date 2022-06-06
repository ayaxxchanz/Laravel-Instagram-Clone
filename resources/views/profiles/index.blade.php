@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 d-flex align-items-start justify-content-center">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-50" style="border: 1px solid #e4e3e1">
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-start pb-2">
                    <h3 class="font-weight-light mr-3">{{ $user->username }}</h3>
                    <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
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
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection