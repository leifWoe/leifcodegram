@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-sm-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-75 h-100" style="max-height: 168px">
        </div>
        <div class="col-9">
            <div class="pb-3 pt-3">
                <div class="d-flex align-items-center">
                    <h2>{{ $user->username }}</h2>
                        <!-- -->
                    <follow-button
                        user-id="{{ $user->id }}"
                        follows="{{ $follows }}"
                    ></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/create" class="pe-5 ps-5">Add new Post</a>
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>

            <div class="d-flex">
                <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pe-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pe-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div><p>{{ $user->profile->description }}</p></div>
            <div><strong><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>

    <div class="row ps-5 pt-5 ms-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-5">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" style="height: 280px; width: 280px">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
