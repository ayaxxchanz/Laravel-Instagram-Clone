@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle mr-3" style="width:40px;border: 1px solid #e4e3e1">
                <a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
                <a href="#" class="font-weight-bold pl-3">Follow</a>
            </div>
            <hr>
            <p>
                <a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
            
                <span>{{ $post->caption }}</span>
            </p>
        </div>
    </div>
</div>
@endsection