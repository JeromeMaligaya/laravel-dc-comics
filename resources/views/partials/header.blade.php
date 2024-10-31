<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3">
        <a href="{{ route('sneaker-index') }}">
            <h1 class="">DB-SNEAKERS</h1>
        </a>
        <nav>
            <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link {{ (Route::currentRouteName() == 'sneaker-index' ? 'active' : '') }}" href="{{ route('sneaker-index') }}">Index</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() == 'sneaker-create' ? 'active' : '') }}" href="{{ route('sneaker-create') }}">Create</a>
                </li>
              </ul>
        </nav>

    </header>
</div>
