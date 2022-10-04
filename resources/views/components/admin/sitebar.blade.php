<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request() -> routeIs('admin.hello')) active @endif" aria-current="page" href="{{ route('admin.hello') }}">
                    <span data-feather="home"></span>
                    Главная
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request() -> routeIs('admin.students.*')) active @endif" href="{{ route('admin.students.index') }}">
                    <span data-feather="file"></span>
                    Пользователи
                </a>
            </li>

        </ul>


    </div>
</nav>
