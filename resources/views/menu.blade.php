{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Trang Tin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Trang Chủ</a>
                </li>

            </ul>
            {{-- action="{{ route('search') }}" --}}

{{-- <ul class="navbar-nav ms-auto"> --}}
{{-- @guest
    {{-- href="{{ route('login') }}" --}}
{{-- <li class="nav-item">
        <a class="nav-link">Đăng Nhập</a>
    </li>
    <li class="nav-item">
        {{-- href="{{ route('register') }}" --}}
{{-- <a class="nav-link">Đăng Ký</a> --}}
{{-- </li>
@else
    <li class="nav-item">
        {{-- href="{{ route('logout') }}" --}}
{{-- <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Đăng Xuất
        </a> --}}
{{-- action="{{ route('logout') }}" --}}
{{-- <form id="logout-form" method="POST" class="d-none">
            @csrf
        </form>
    </li> --}}
{{-- @endguest  --}}
{{-- </ul>
        </div>
    </div>
</nav>  --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Trang Tin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Trang Chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Chuyên Mục
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://lab3.test/search?query=gi%E1%BA%A3i+tr%C3%AD">Giải
                                trí</a></li>
                        <li><a class="dropdown-item" href="http://lab3.test/tin/9">Công nghệ</a></li>
                        <li><a class="dropdown-item" href="http://lab3.test/tin/7">Thể thao</a></li>
                        <li><a class="dropdown-item" href="http://lab3.test/tin/6">Thời sự</a></li>

                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Tìm kiếm"
                    aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Tìm</button>
            </form>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        {{-- href="{{ route('login') }}" --}}
                        <a class="nav-link">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        {{-- href="{{ route('register') }}" --}}
                        <a class="nav-link">Đăng Ký</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Đăng Xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
