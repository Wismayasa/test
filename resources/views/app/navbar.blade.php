<nav class="navbar navbar-expand-md navbar-light bg-light" id="navbar-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-between d-md-none d-block">
            <a class="navbar-brand fs-4" href="#">Navbar</a>
            <button class="btn px-1 py-0" id="open-btn"><i class="fa-solid fa-bars"></i></button>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ route('logout.perform') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>