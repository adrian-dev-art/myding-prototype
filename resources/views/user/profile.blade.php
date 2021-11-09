@extends('layouts.main')

@section('content')
    
    <div class="wrapper-profile container">
        <div class="left-col profile-img">
            <img src="/Assets/Images/adrian.png" alt="">
        </div>
        <div class="right-col">
            <div class="name-username">
                <h5>{{$user->name}}</h5>
                <p>{{$user->username}}</p>
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
                    {{number_format($user->followers_count)}}
                </p>
                <p class="title">
                    Followers
                </p>
            </div>
            <div class="following">
                <p class="count-following">
                {{$user->following_count}}
                </p>
                <p class="title">
                    Following
                </p>
            </div>
            <div class="posts">
                <p class="count-posts">
                {{$user->post_count}}
                </p>
                <p class="title">
                    Post
                </p>
            </div>
        </div>
        <h2 class="title-wrapper-post">POST</h2>
        <div class="wrapper-post">
            <div class="wrapper-card-post mx-5">
                @foreach ($posts as $post)
                <div class="card-post-me ">
                    <div class="front-card">
                        <a href="/post/{{$post->user->username}}">
                        <img src="/Assets/Images/img-post1.png" alt="" >
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

@endsection()