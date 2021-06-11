
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">
            <img src="../../../public/storage/images/Logo.png" alt="logo" class="d-inline-block align-text-top">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Keel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Est</a>
                        <a class="dropdown-item" href="#">Rus</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Avaleht
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Kontakt
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Meist
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Ostukorv
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

            </ul>
        </div>
    </nav>
</header>


