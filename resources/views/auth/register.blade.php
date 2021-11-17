<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('name')" />

                <x-input id="name" class="block mt-1 w-full @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')"  autofocus />
            </div>
            <div>
                <x-label for="username" :value="__('username')" />

                <x-input id="username" class="block mt-1 w-ful @error('username') is-invalid @enderrorl" type="text" name="username" :value="old('username')"   />
            </div>
            
            <div>
                <x-label for="organization" :value="__('organization')" />

                <x-input id="organization" class="block mt-1 w-full @error('organization') is-invalid @enderror" type="text" name="organization" :value="old('organization')"   />
            </div>
            <div>
                <x-label for="company" :value="__('company')" />

                <x-input id="company" class="block mt-1 w-full @error('company') is-invalid @enderror" type="text" name="company" :value="old('company')"   />
            </div>
            <div>
                <x-label for="phone_number" :value="__('phone_number')" />

                <x-input id="phone_number" class="block mt-1 w-full @error('phone_number') is-invalid @enderror" type="text" name="phone_number" :value="old('phone_number')"   />
            </div>
            <div>
                <x-label for="school" :value="__('school')" />

                <x-input id="school" class="block mt-1 w-full @error('school') is-invalid @enderror" type="text" name="school" :value="old('school')"   />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('email')" />

                <x-input id="email" class="block mt-1 w-full @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')"  />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('password')" />

                <x-input id="password" class="block mt-1 w-full @error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full @error('password_confirmation') is-invalid @enderror"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
