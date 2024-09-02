<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <x-logo></x-logo>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Menu</li>

            <li class="side-nav-item">
                <a href="{{ url('dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span>
                        @lang('admin/template.sidebar.dashboard')
                    </span>
                </a>
            </li>

            <li class="side-nav-title">Master Data</li>

            <li class="side-nav-item">
                @if (Auth::guard('admin')->user()->level == 'Super Admin')
                    <a href="{{ url('administrators') }}" class="side-nav-link">
                        <i class="ri-admin-line"></i>
                        <span>
                            @lang('admin/template.sidebar.administrator')
                        </span>
                    </a>
                @endif
            </li>

            <li class="side-nav-item">
                <a href="{{ url('drugs') }}" class="side-nav-link">
                    <i class="ri-capsule-fill"></i>
                    <span>
                        @lang('admin/template.sidebar.drug')
                    </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ url('articles') }}" class="side-nav-link">
                    <i class="ri-article-line"></i>
                    <span>
                        @lang('admin/template.sidebar.article')
                    </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ url('tags') }}" class="side-nav-link">
                    <i class="ri-hashtag"></i>
                    <span>
                        @lang('admin/template.sidebar.tag')
                    </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ url('drug-classifications') }}" class="side-nav-link">
                    <i class="ri ri-medicine-bottle-line"></i>
                    <span>
                        @lang('admin/template.sidebar.drug-class')
                    </span>
                </a>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
