<div class="dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)" role="button"
        aria-haspopup="false" aria-expanded="false">
        @if (App::isLocale('en'))
            <img src="{{ asset('images/flags/us.jpg') }}" class="me-0 me-sm-1" height="12">
            <span class="align-middle d-none d-lg-inline-block">English</span>
        @else
            <img src="{{ asset('images/flags/indo.jpg') }}" class="me-0 me-sm-1" height="12">
            <span class="align-middle d-none d-lg-inline-block">Indonesian</span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
        <!-- item-->
        @if (App::isLocale('id'))
            <a href="{{ url('locale/en') }}" class="dropdown-item">
                <img src="{{ asset('images/flags/us.jpg') }}" class="me-1" height="12">
                <span class="align-middle">English</span>
            </a>
        @else
            <a href="{{ url('locale/id') }}" class="dropdown-item">
                <img src="{{ asset('images/flags/indo.jpg') }}" class="me-1" height="12">
                <span class="align-middle">Indonesian</span>
            </a>
        @endif
    </div>
</div>
