{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="min-h-screen bg-body flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Sign in to your account
          </h2>
          <x-jet-validation-errors class="mb-4" />
       
        </div>
    
    
      
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white py-8 px-4 shadow sm:px-10">
            <form class="space-y-6" action="#" method="POST">
                @csrf
              <div class="flex space-x-1 items-center">
                <i class="fa fa-at text-2xl"></i>
                <div class="mt-1 w-full">
                  <input placeholder="Enter your email" id="email" name="email" type="email" autocomplete="email" required class="this-input">
                </div>
              </div>
      
              <div class="flex space-x-1 items-center">
                <i class="fa fa-lock text-2xl"></i>
                <div class="mt-1 w-full">
                  <input placeholder="Enter your password" id="password" name="password" type="password" autocomplete="current-password" required class="this-input">
                </div>
              </div>
      
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div>
              </div>
      
              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-white ring-2 ring-primary hover:text-primary focus:text-primary  focus:bg-white focus:outline-none  ">
                  Sign in
                </button>
              </div>
              <div class="flex items-center justify-between pt-2">
                <a href="{{route('register')}}" class="underline mx-auto">Register</a> 
            </div>
            </form>
          </div>
        </div>
      </div>
    </x-guest-layout> 