@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t240x240.jpg" class="rounded-circle">
        </div>
    	<div class="col-9 pt-5">
            <div class="px-5 d-flex justify-content-between align-items-baseline">
                <h1 class=" font:weight-bold">{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>

            <div class="d-flex">
                <div class="px-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="px-5"><strong>23k</strong> followers</div>
                <div class="px-5"><strong>265</strong> following</div>
            </div>
            <div class="pt-4 px-5 font-weight-bold">{{$user->profile->title}}</div>
            <div class="px-5">{{$user->profile->description}}</div>
            <div class="px-5"><a href="">{{$user->profile->url ?? 'N/A'}}</a></div>
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
