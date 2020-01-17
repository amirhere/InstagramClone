@extends('layouts.app')

@section('content')
<div class="container">



        <div class="row">
            <div class="col-3 p-5">
                <img width="220" src="https://res.cloudinary.com/practicaldev/image/fetch/s--MYZ584sb--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://secure.meetupstatic.com/photos/event/4/c/b/b/600_468259643.jpeg" alt="">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>


=
                        <a href="/p/create">Add New Post</a>



                </div>




                    <a href="/profile/{{ $user-> id }}/edit">Edit Profile</a>



                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong>posts</div>
                    <div class="pr-5"><strong>23k</strong>followers</div>
                    <div class="pr-5"><strong>23k</strong>following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{$user->profile->title ?? 'N/A'}}</div>

                <div>{{$user->profile->description}}</div>
                <div> <a href="http://127.0.0.1:8000/home#">{{$user->profile->url ?? 'N/A'}}</a> </div>

            </div>

        </div>

        <div class="row pt-5" >
            @foreach($user->posts as $post)
                <div class="col-4">
                    <a href="/p/{{ $post->id }}">
                    <img class="w-100 h-75"  src="/storage/{{$post->image}}" style="object-fit: cover;">
                    </a>
                </div>


            @endforeach

        </div>



</div>
@endsection
