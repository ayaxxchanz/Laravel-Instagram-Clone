@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 d-flex align-items-center justify-content-center">
            <img src="/img/pp.png" class="rounded-circle" style="width: 300px;border: 1px solid #e4e3e1">
        </div>
        <div class="col-8">
            <div>
                <h2 class="font-weight-light">{{$user -> username}}</h2>
            </div>
            <div class="d-flex pt-4">
                <div class="pr-5"><strong>4</strong> posts</div>
                <div class="pr-5"><strong>165</strong> followers</div>
                <div class="pr-5"><strong>176</strong> following</div>
            </div>
            <div class="pt-3"><strong>Aliya</strong></div>
            <div>I am a programmer who loves programming.</div>
            <div><a href="#">ayaxxchanz.github.io</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/photo01.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/photo02.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/photo03.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection