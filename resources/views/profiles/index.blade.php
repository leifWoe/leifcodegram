@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-sm-5">
            <img src="https://toppng.com/uploads/preview/instagram-default-profile-picture-11562973083brycehrmyv.png" class="rounded-circle" style="height: 150px">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline pb-3 pt-3 pe-5">
                <h2>{{ $user->username }}</h2>
                <a href="#">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>xxxk</strong> posts</div>
                <div class="pe-5"><strong>xxxx</strong> followers</div>
                <div class="pe-5"><strong>xxxx</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div><p>{{ $user->profile->description }}</p></div>
            <div><strong><a href="https://www.freecodecamp.org/">{{ $user->profile->url ?? 'N/A' }}</a></strong></div>
        </div>
    </div>

    <div class="row ps-5 pt-5 ms-5">
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
    </div>
    <div class="row ps-5 pt-5 ms-5">
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
        <div class="col-4">
            <img src="https://www.22places.de/images/2016/01/spiegelung-landschaftsfotografie.jpg" style="height: 280px; width: 280px">
        </div>
    </div>
</div>
@endsection

