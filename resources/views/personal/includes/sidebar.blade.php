<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('personal.main.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Главная
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('personal.liked.index') }}" class="nav-link">
                                <i class="nav-icon far fa-heart"></i>
                                <p>
                                    Понравившиеся посты
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('personal.comment.index') }}" class="nav-link">
                                <i class="nav-icon far fa-comment"></i>
                                <p>
                                    Комментарии
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
        </nav>
    </div>

</aside>
