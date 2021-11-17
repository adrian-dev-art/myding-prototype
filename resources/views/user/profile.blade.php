@extends('layouts.main')

@section('content')

@section('create-post-btn')
    <section class="create-post">
        <a href="/post/create">
            <img src="/Assets/Icons/plus.png" alt="">
        </a>
    </section>
@endsection

@section('navigation')
  <x-navigation/>
@endsection
<section class="d-flex">
    

    <div class="wrapper-profile container">
        <div class="left-col profile-img">
            @if($user->profile_picture)
                <img src="{{asset('storage/'.$user->profile_picture)}}" alt="" height="40" width="40" class="rounded-circle profile-pic">
                @else
                    <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
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
        <div class="wrapper-post">
            @if (session()->has('succes'))
                <div class="alert alert-succes" role="alert">
                    {{ session('succes') }}
                </div>
            @endif
            <div class="wrapper-card-post mx-5">
                @foreach ($posts as $post)
                    <div class="card-post-me mx-2">
                        <div class="front-card">
                            <a href="/post/{{ $post->id }}">
                                @if($post->image)
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
