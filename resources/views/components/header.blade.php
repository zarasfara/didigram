<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
        <div class="container">
            <a href="#" class="navbar-brand">Digi<span class="text-primary">Gram.</span></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="{{route('contact')}}" class="nav-link">Контакты</a>
                    </li>
                </ul>

            </div>
            <form class="d-flex" action="" method="get">
                @csrf
                <div class="mb-3">
                    <label for="searchInput" class="form-label">Поиск</label>
                    <select class="js-example-basic-single form-control" name="state">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </form>
        </div>
        {{setting('site.telephone')}}
    </nav>

</header>
