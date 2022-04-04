@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-7 offset-3">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-75">
                </a>
            </div>
        </div>

        <div class="row pt-3 pb-5">
            <div class="col-7 offset-3">
                <p class="pt-2">
                    <strong>
                        <a href="\profile\{{ $post->user->id }}" class="link-dark">{{ $post->user->username }}</a>
                    </strong>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
