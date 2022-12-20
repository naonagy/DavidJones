
<div class="container-fluid">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('master')}}" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="{{ route('category', ['category' => 'genti'])}}" class="nav-link px-2 link-dark">Genti</a></li>
      <li><a href="{{ route('category', ['category' => 'rucsacuri'])}}" class="nav-link px-2 link-dark">Rucsacuri</a></li>
      <li><a href="{{ route('category', ['category' => 'portofele'])}}" class="nav-link px-2 link-dark">Portofele</a></li>
      <li>
        <a href="{{ route('shoppingCart.index') }}" class="nav-link px-2 link-dark d-flex flex-row align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        Cos de cumparaturi</a></li>
    </ul>

    <div>
      <div class="mx-auto pull-right">
          <div class="">
              <form action="{{ route("produse.index") }}" method="GET" role="search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">

                  <div class="input-group">
                      <input type="text" class="form-control mr-2" name="term" placeholder="Cauta" id="term">
                      <span class="input-group-btn mr-5 mt-1">
                        <button class="btn" type="submit" title="Search projects">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                        </button>
                    </span>
                  </div>
              </form>
          </div>
      </div>
  </div> 
    @if (Auth::check()) 
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
              <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                <div>{{ Auth::user()->name }}</div>
                  <div class="ml-1">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </div>
              </button>
            </x-slot>
            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                              this.closest('form').submit();" 
                              class="bg-white">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                  <x-dropdown-link class="bg-white">
                      <a href="{{ route('myorders')}}" class="nav-link px-2 link-dark">
                        Comenzile mele
                      </a>
                  </x-dropdown-link>
                </form>
                
            </x-slot>
        </x-dropdown>
      @else
      <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        <a href="{{ route('login')}}" class="nav-link px-2 link-dark">
        Log in
      </button>
      @endif
  </div>

  </div>
</div>

