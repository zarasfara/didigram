<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
        <div class="container">
            <a href="index.html" class="navbar-brand">Digi<span class="text-primary">Gram.</span></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarContent">
                <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blog')}}" class="nav-link">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{$header->item_link}}" class="nav-link">{{$header->item_name}}</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>
