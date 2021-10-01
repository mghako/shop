<div x-data="{ openMobileMenu: false }" class="bg-white">
    
    <div x-show="openMobileMenu" class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
      
      {{-- <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div> --}}
  
      <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" >
        <div class="px-4 pt-5 pb-2 flex">
          <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
  
        <!-- Links -->
        <div class="mt-2">
          <div class="border-b border-gray-200">
            <div class="-mb-px flex flex-col align-middle px-4 space-x-8 space-y-2" aria-orientation="horizontal">
              <h3 class="-m-2 p-2 block font-medium text-gray-900">Menu</h3>
              <x-frontend.partials.link href="/shop"><i class="fas fa-store mr-2"></i> Shop</x-frontend.partials.link>
            </div>
          </div>
        </div>
  
        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
          <div class="flow-root">
            @auth
              <a
                  class="-m-2 p-2 block font-medium text-gray-900"
                  href="#"
                  x-data="{}"
                  @click.prevent="document.querySelector('#logout-form').submit()"
              >
                  Log Out
              </a>
              <form id="logout-form" method="POST" action="{{ route('admin.auth.logout') }}" class="hidden">
                  @csrf
              </form>
            @else
              <a href="{{route('admin.auth.login')}}" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
            @endauth
          </div>
          @guest
          <div class="flow-root">
            <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create account</a>
          </div>
          @endguest
        </div>
      </div>
    </div>
  
    <header class="relative bg-white">
      <p class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
        Get free delivery on orders over $100
      </p>
      <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="h-16 flex items-center">
            <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
            <button @click.prevent="openMobileMenu = !openMobileMenu" @click.away="openMobileMenu = false" type="button" class="bg-white p-2 rounded-md text-gray-400 cursor-pointer lg:hidden">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
  
            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <a href="#">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
              </a>
            </div>
  
            <!-- Flyout menus -->
            <div class="hidden lg:ml-8 lg:block lg:self-stretch">
              <div class="h-full flex space-x-8">
                  <x-frontend.partials.link href="/shop"><i class="fas fa-store mr-2"></i> Shop</x-frontend.partials.link>
              </div>
            </div>
  
            <div class="ml-auto flex items-center">
              {{-- Auth --}}
              <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                @auth
                <a
                    class="text-sm font-medium text-gray-700 hover:text-gray-800"
                    href="#"
                    x-data="{}"
                    @click.prevent="document.querySelector('#logout-form').submit()"
                >
                    Log Out
                </a>
                <form id="logout-form" method="POST" action="{{ route('admin.auth.logout') }}" class="hidden">
                    @csrf
                </form>
                @else
                  <a href="{{ route('admin.auth.login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                @endauth
                
                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                @guest
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                @endguest
              </div>
              <!-- Search -->
              <div class="flex lg:ml-6">
                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <!-- Heroicon name: outline/search -->
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </a>
              </div>
  
              <!-- Cart -->
              <div class="ml-4 flow-root lg:ml-6">
                <a href="#" class="group -m-2 p-2 flex items-center">
                  <!-- Heroicon name: outline/shopping-bag -->
                  <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                  <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                  <span class="sr-only">items in cart, view bag</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>
  