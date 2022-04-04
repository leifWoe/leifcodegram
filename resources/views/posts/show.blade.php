@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-7">
            <img src="/storage/{{ $post->image }}" class="w-75">
        </div>
        <div class="col-4">
            <div class="d-flex align-content-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 60px">
                </div>
                <div class="ps-5 pt-3">
                    <h4>
                        <strong>
                            <a href="\profile\{{ $post->user->id }}" class="link-dark">{{ $post->user->username }}</a>
                        </strong>
                        <a href="/#" class="ps-5">Follow</a>
                    </h4>
                </div>
            </div>
            <hr>
            <p class="pt-2">
                <strong>
                    <a href="\profile\{{ $post->user->id }}" class="link-dark">{{ $post->user->username }}</a>
                </strong>
                {{ $post->caption }}
            </p>
        </div>


    </div>
</div>
@endsection
