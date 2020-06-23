<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
    <div class="container">
        <a class="navbar-brand" href="/" style="border-right:2px; border-color: hotpink">
            <span><i class="fas fa-paw" style="color: hotpink;"></i></span>

        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                @foreach ($navs as $nav)
                <li class="nav-item @if(Request::is($nav['href']) || Request::is(''))active @endif">
                <a class="nav-link" href="{{$nav['href']}}"><b>{{ucfirst($nav['display'])}}</b></a>
                </li>
                @endforeach
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a class="nav-link" style="color: hotpink;" href="https://www.petfinder.com/" target="_blank"><b>Pet Adoption</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>