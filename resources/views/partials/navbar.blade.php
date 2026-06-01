<<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <i class="bi bi-house-door-fill me-2"></i>MyKostApp
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li> --}}
                @endauth
            </ul>
        </div>
    </div>
    </nav>