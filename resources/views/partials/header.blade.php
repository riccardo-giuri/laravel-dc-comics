@php
    $nav_Links = [
                [
                    "name" => "Home",
                    "link_route" => "/"
                ],
                [ 
                    "name" => "comics",
                    "link_route" => "/comics"
                ],
                [ 
                    "name" => "movies",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "tv",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "games",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "collectibles",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "videos",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "fans",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "news",
                    "link_route" => "#"
                ],
                [ 
                    "name" => "shop",
                    "link_route" => "#"
                ]
];
@endphp

<header class="pb-2 pt-2">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="imgContainer">
            <a href={{route("index")}}><img src="/images/dc-logo.png" alt=""></a>
        </div>
    
        <ul class="nav nav-underline d-flex gap-4">
            @foreach ($nav_Links as $link )
                <li class="nav-item">
                    <a class="nav-link" href={{$link["link_route"]}}>

                    {{ Str::upper($link["name"]) }}</a>
                </li>
            @endforeach
    
        </ul>
    </div>
</header>
