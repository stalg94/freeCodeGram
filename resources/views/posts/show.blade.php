@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center" >
                <div class="p-3">
                    <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-height:50px;">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}" style="text-decoration: none; font-weight: bold;">
                            <span class="text-dark"> {{$post->user->username}}</span>
                        </a>
                        <a href="#" class="px-3 font-weight-bold" style="text-decoration: none; font-weight: bold;">Follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="p-3">
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" style="text-decoration: none; font-weight: bold;">
                        <span class="text-dark"> {{$post->user->username}}</span>
                    </a>
                </span> {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection
