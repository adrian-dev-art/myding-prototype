<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-white">
                Myding
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mt-4 ">
                <x-label for="name" :value="__('Name')"  />

                <x-input id="name" class="block mt-1 bg-secondary text-white w-full @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')"  autofocus />
            </div>
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" class="text-white"/>

                <x-input id="username" class="bg-secondary text-white block mt-1 w-full @error('username') is-invalid @enderror" type="text" name="username" :value="old('username')"   />
            </div>
            
            <div class="mt-4">
                <x-label for="organization" :value="__('Organization')" />

                <x-input id="organization" class="bg-secondary text-white block mt-1 w-full @error('organization') is-invalid @enderror" type="text" name="organization" :value="old('organization')"   />
            </div>
            <div class="mt-4">
                <x-label for="company" :value="__('Company')" />

                <x-input id="company" class="bg-secondary text-white block mt-1 w-full @error('company') is-invalid @enderror" type="text" name="company" :value="old('company')"   />
            </div>
            <div class="mt-4">
                <x-label for="phone_number" :value="__('Phone Number')" />

                <x-input id="phone_number" class="bg-secondary text-white block mt-1 w-full @error('phone_number') is-invalid @enderror" type="text" name="phone_number" :value="old('phone_number')"   />
            </div>
            <div class="mt-4">
                <x-label for="school" :value="__('School')" />

                <x-input id="school" class="bg-secondary text-white block mt-1 w-full @error('school') is-invalid @enderror" type="text" name="school" :value="old('school')"   />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="bg-secondary text-white block mt-1 w-full @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')"  />
            </div>
            
            <div class="mt-4">
                <x-label for="profile_picture" :value="__('Profile Picture')" />

                <input class="form-control  @error('profile_picture') is-invalid @enderror" type="file" id="profile_picture" name="profile_picture">

            </div>

           

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="bg-secondary text-white block mt-1 w-full @error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="bg-secondary text-white block mt-1 w-full @error('password_confirmation') is-invalid @enderror"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white " href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
