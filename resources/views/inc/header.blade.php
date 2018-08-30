<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Liqueros</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('wines') }}">Wines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beers') }}">Beers</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('spirits') }}">Spirits</a>
                </li>
                <li class="nav-item ml-auto">
                    <a href="#" class="nav-link"><i class="fas fa-search fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="badge badge-pill badge-success">
                            {{ Session::has('cart') ? Session::get('cart')->cartTotalQuantity : 0 }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
