
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
      <li><a href="{{ route('shoppingCart.index') }}" class="nav-link px-2 link-dark">Shopping Cart</a></li>
    </ul>

    
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    </form>
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
                              this.closest('form').submit();">
                        {{ __('Log Out') }}
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

