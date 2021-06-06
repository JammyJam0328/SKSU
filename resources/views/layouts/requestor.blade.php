<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script defer src="{{asset('fontawesome-free/js/brands.js')}}"></script>
        <script defer src="{{asset('fontawesome-free/js/solid.js')}}"></script>
        <script defer src="{{asset('fontawesome-free/js/fontawesome.js')}}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        <div  x-data="{sidebar:false}" class="h-screen flex overflow-hidden bg-white">
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            <div  x-show="sidebar" class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
              <!--
                Off-canvas menu overlay, show/hide based on off-canvas menu state.
          
                Entering: "transition-opacity ease-linear duration-300"
                  From: "opacity-0"
                  To: "opacity-100"
                Leaving: "transition-opacity ease-linear duration-300"
                  From: "opacity-100"
                  To: "opacity-0"
              -->
              <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
          
              <!--
                Off-canvas menu, show/hide based on off-canvas menu state.
          
                Entering: "transition ease-in-out duration-300 transform"
                  From: "-translate-x-full"
                  To: "translate-x-0"
                Leaving: "transition ease-in-out duration-300 transform"
                  From: "translate-x-0"
                  To: "-translate-x-full"
              -->
              <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white">
                <!--
                  Close button, show/hide based on off-canvas menu state.
          
                  Entering: "ease-in-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in-out duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                  <button x-on:click="sidebar=false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
          
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                  <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
                  </div>
                  <nav class="mt-5 flex-1 px-2 bg-white space-y-1">
                    <div class="grid">
                      <img class="inline-block h-24 w-24 rounded-full mx-auto" src="{{auth()->user()->profile_photo_url}}" alt="">
                  </div>
                      <div x-data="{isOpen:false}" class="relative flex text-left">
                        <div class="mx-auto">
                          <button x-on:click="isOpen=!isOpen" x-on:click.away="isOpen=false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-2 items-center space-x-1 py-1 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span>{{auth()->user()->name}}</span>  
                            <!-- Heroicon name: solid/chevron-down -->
                            <i class="fa fa-cog"></i>
                          </button>
                        </div>
                      
                        <!--
                          Dropdown menu, show/hide based on menu state.
                      
                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="isOpen" class="origin-top-right absolute right-0 mt-9 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            
                            <a href="{{route('profile.show')}}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Profile</a>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                  @csrf

                                  <a class="text-gray-700 block px-4 py-2 text-sm" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                      {{ __('Log out') }}
                                </a>
                              </form>
                          </div>
                         
                        </div>
                      </div>

                
                 <hr>
          
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    <a href="{{route('requestor-dashboard')}}" class="this-menu {{Request::routeIs('requestor-dashboard')? 'bg-primary text-white':'text-primary'}}">
                      <i class="fa fa-chart-bar"></i>
                      <span class="">Dashboard</span>
                    </a>

                    <a href="{{route('requestor-myrequest')}}" class="this-menu {{Request::routeIs('requestor-myrequest')? 'bg-primary text-white':'text-primary'}}">
                      <i class="fa fa-envelope"></i>
                      <span class="">Make Request</span>
                    </a>



        
                  </nav>
                </div>
              
              </div>
          
              <div class="flex-shrink-0 w-14">
                <!-- Force sidebar to shrink to fit close icon -->
              </div>
            </div>
          
            <!-- Static sidebar for desktop -->
            <div class="hidden md:flex md:flex-shrink-0">
              <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col h-0 flex-1 border-r border-gray-200 bg-white">
                  <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
                    </div>
                    <nav class="mt-5 flex-1 px-2 bg-white space-y-1">
                      <div class="grid">
                        <img class="inline-block h-24 w-24 rounded-full mx-auto" src="{{auth()->user()->profile_photo_url}}" alt="">
                    </div>
                        <div x-data="{isOpen:false}" class="relative flex text-left">
                          <div class="mx-auto">
                            <button x-on:click="isOpen=!isOpen" x-on:click.away="isOpen=false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-2 items-center space-x-1 py-1 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                              <span>{{auth()->user()->name}}</span>  
                              <!-- Heroicon name: solid/chevron-down -->
                              <i class="fa fa-cog"></i>
                            </button>
                          </div>
                        
                          <!--
                            Dropdown menu, show/hide based on menu state.
                        
                            Entering: "transition ease-out duration-100"
                              From: "transform opacity-0 scale-95"
                              To: "transform opacity-100 scale-100"
                            Leaving: "transition ease-in duration-75"
                              From: "transform opacity-100 scale-100"
                              To: "transform opacity-0 scale-95"
                          -->
                          <div x-show="isOpen" class="origin-top-right absolute right-0 mt-9 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                              
                              <a href="{{route('profile.show')}}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Profile</a>
                                  <!-- Authentication -->
                                  <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="text-gray-700 block px-4 py-2 text-sm" href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log out') }}
                                  </a>
                                </form>
                            </div>
                           
                          </div>
                        </div>

                  
                   <hr>
            
                      <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                      <a href="{{route('requestor-dashboard')}}" class="this-menu {{Request::routeIs('requestor-dashboard')? 'bg-primary text-white':'text-primary'}}">
                        <i class="fa fa-chart-bar"></i>
                        <span class="">Dashboard</span>
                      </a>

                      <a href="{{route('requestor-myrequest')}}" class="this-menu {{Request::routeIs('requestor-myrequest')? 'bg-primary text-white':'text-primary'}}">
                        <i class="fa fa-envelope"></i>
                        <span class="">Make Request</span>
                      </a>



          
                    </nav>
                  </div>
              
                </div>
              </div>
            </div>
            <div class="flex flex-col w-0 flex-1 overflow-hidden">
              <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button  x-on:click="sidebar=true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Open sidebar</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
              <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none bg-gray-100">
                <div class="py-6">
                  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-4">
                    @yield('content')
                  </div>
                </div>
              </main>
            </div>
          </div>

        @stack('modals')

        @livewireScripts
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        </script>
        <x-livewire-alert::scripts />
    </body>
</html>
