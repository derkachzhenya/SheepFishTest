<header class="py-3 border bg-light justify-content-beetwen d-flex">

    <div class="container d-flex justify-between">
        <div class="container text-left">
            <a class="nav-link active fw-bold fs-3" aria-current="page"
                href="{{ route('company.index') }}">{{ __('SheepFish') }}</a>
        </div>
        <div class="col-2 pt-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-decoration-none text-reset" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}</a>
            </form>
        </div>
    </div>

</header>
