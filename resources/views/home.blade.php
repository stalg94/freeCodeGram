@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">   
        <div class="col-3 p-5">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t240x240.jpg" class="rounded-circle">
        </div>
    	<div class="col-9 pt-5">
            <div><h1 class="px-5 font:weight-bold">{{$user -> username}}</h1></div>
            <div class="d-flex">
                <div class="px-5"><strong>153</strong> posts</div>
                <div class="px-5"><strong>23k</strong> followers</div>
                <div class="px-5"><strong>265</strong> following</div>
            </div>
            <div class="pt-4 px-5 font-weight-bold">freeCodeCamp.org</div>
            <div class="px-5">Some text </div>
            <div class="px-5"><a href="#">www.freecodecamp.org</a></div>
        </div>    
    </div>

    <div class="row py-4    ">
        <div class="col-4">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t240x240.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t240x240.jpg"class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t240x240.jpg"class="w-100">
        </div>


    </div>


</div>
@endsection
