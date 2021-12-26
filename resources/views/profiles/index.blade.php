@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
    	<div class="col-9 pt-5">
            <div class="px-5 d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                <div class="h3 ">{{$user->username}}</div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows }}"></follow-button>
                </div>

            @can('update', $user->profile)
                <a href="/p/create">Add new post</a>
            @endcan
            </div>

            @can('update', $user->profile)
            <a class="px-5" href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="px-5"><strong>{{$postCount}}</strong> posts</div>
                <div class="px-5"><strong>{{$followersCount}}</strong> followers</div>
                <div class="px-5"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 px-5 font-weight-bold" style="font-weight: bold;">{{$user->profile->title}}</div>
            <div class="px-5">{{$user->profile->description}}</div>
            <div class="px-5"><a href="{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row py-4    ">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="{{ URL::asset( 'storage/' . $post->image ) }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection
