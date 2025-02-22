<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link home_link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link work_link" href="{{ route('work') }}">Work I do</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link aboutme_link" href="{{ route('aboutme') }}">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact_link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <a class="navbar-brand d-flex justify-content-center align-items-center" href="{{ route('home') }}">
            <img class="rounded-circle" src="/images/mylogo.png" alt="mylogo" width="30" height="30">
            <b class="ms-2">Jetpackz</b>
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link home_link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link work_link" href="{{ route('work') }}">Work I do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aboutme_link" href="{{ route('aboutme') }}">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact_link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>