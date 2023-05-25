<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">laravel-migration-seeder</a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleMainNav" 
          aria-controls="collapsibleMainNav" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleMainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-dark text-white' : ''}}" href="{{route('home')}}"
                aria-current="page">Home <span class="visually-hidden">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-dark text-white' : ''}}" href="{{route('about')}}">About</a>  
              </li>

              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-dark text-white' : ''}}" href="{{route('contacts')}}">Contacts</a>  
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
</header>