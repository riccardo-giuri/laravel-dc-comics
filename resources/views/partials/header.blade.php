@php
    $nav_Links = [
                ["name" => "Characters"],
                [ "name" => "comics"],
                [ "name" => "movies"],
                [ "name" => "tv"],
                [ "name" => "games"],
                [ "name" => "collectibles"],
                [ "name" => "videos"],
                [ "name" => "fans"],
                [ "name" => "news"],
                [ "name" => "shop"]
];
@endphp

<header class="pb-2 pt-2">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="imgContainer">
            <img src="/images/dc-logo.png" alt="">
        </div>
    
        <ul class="nav nav-underline d-flex gap-4">
            @foreach ($nav_Links as $link )
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Str::upper($link["name"]) }}</a>
                </li>
            @endforeach
    
        </ul>
    </div>
</header>
