<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request() -> routeIs('students')) active @endif" aria-current="page" href="{{ route('students') }}">
                    <span data-feather="home"></span>
                    Главная
                </a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link @if(request() -> routeIs('admin.students.*')) active @endif" href="{{ route('admin.students.index') }}">
                    <span data-feather="file"></span>
                    Администрирование
                </a>
            </li>
            @endif

        </ul>


    </div>
</nav>
