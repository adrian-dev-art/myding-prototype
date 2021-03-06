@extends('layouts.main')

@section('content')

  <x-create-post-button/>
  <x-navigation/>
  <x-top-bar-main/>


<section class="d-flex">
    

    <div class="wrapper-profile container">
        <div class="left-col profile-img">
            @if (auth()->user()->profile_picture)
                  <img src="{{ asset('storage/'.auth()->user()->profile_picture)}}" alt="" height="150" width="150" class="rounded">
                @else
                    <img src="/Assets/Images/avatar.png" alt="" height="150" width="150" class="rounded">    
                @endif
        </div>
        <div class="right-col">
            <div class="name-username">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->username }}</p>
            </div>
            <div class="call-to-action">
                <a class="dm-btn btn">
                    <img src="/Assets/Icons/message-text-outline.png" alt="">
                </a>
                <div class="follow-btn btn">
                    <p>Follow</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="status-count">
            <div class="followers">
                <p class="count-followers">
                    {{ number_format($user->followers_count) }}
                </p>
                <p class="title">
                    Followers
                </p>
            </div>
            <div class="following">
                <p class="count-following">
                    {{ number_format($user->following_count) }}
                </p>
                <p class="title">
                    Following
                </p>
            </div>
            <div class="posts">
                <p class="count-posts">
                    {{ number_format($posts->count()) }}
                </p>
                <p class="title">
                    Post
                </p>
            </div>
        </div>
        <h2 class="title-wrapper-post">POST</h2>
        @if (session()->has('succes'))
            <div class="alert alert-succes mx-auto" role="alert">
                {{ session('succes') }}
            </div>
        @endif
        <div class="wrapper-post">
            <div class="wrapper-card-post ">
                @foreach ($posts as $post)
                    <div class="card-post-me mx-2">
                        <div class="front-card">
                            <a href="/post/{{ $post->id }}">
                             
                                @if ($post->image)
                                    <img src="{{asset('storage/'.$post->image)}}" alt="">
                                @else
                                <img src="/Assets/Images/img-post1.png" alt="">
                                    
                                @endif
                            </a>
                        </div>
                        <div class="back-card">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
</section>
@endsection()
