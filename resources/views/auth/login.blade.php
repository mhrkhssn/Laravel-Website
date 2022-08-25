@include('layouts.file_links')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}"
              style="margin-left: 40%;margin-top:5%;padding-top:1%;padding-bottom:1%;box-shadow: 5px 5px 5px 5px grey; width: 25%;text-align: center!important;border-radius: 10px">
            @csrf
            <img src="{{ asset('images/logow.PNG')}}" alt="" title="">
            <br><br><br>
            <!-- Email Address -->
            <div>
                {{--                <x-label for="email" :value="__('Email')"/>--}}

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         placeholder="Email"
                         style="height: 25px;width: 200px;border-radius: 10px;padding-left: 10px" autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{--                <x-label for="password" :value="__('Password')"/>--}}

                <x-input id="password" class="block mt-1 w-full" placeholder="Password"
                         style="height: 25px;width: 200px;border-radius: 10px;padding-left: 10px"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" style="background-color: gray"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
{{--            <a href="{{ url('auth/google') }}" class="w-100">--}}
{{--                <strong>Google Login</strong>--}}
{{--            </a>--}}
            <div class="items-center mt-4">
                <x-button class="btn" style="border-radius: 10px;background:linear-gradient(to bottom right, #eca520 0%, #321c69 100%)">
                    {{ __('Log in') }}
                </x-button>
                <br><br>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot password ?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
