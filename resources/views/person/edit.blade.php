<x-app-layout>
    <!-- Session Status -->

   <div style="width:30%; margin:auto;">
    <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

    <form method="POST" action="{{ route('person.update',$person->id) }}">
        @csrf
        <!-- Email Address -->
        <div>                                                                   
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name') ?? $person->name" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="role_description" :value="__('Role Description')" />
            <x-text-input id="role_description" class="block mt-1 w-full" type="role_description" name="role_description" :value="old('role_description') ?? $person->role_description" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('role_description')" class="mt-2" />
        </div>

        <!-- Password -->

        <!-- Remember Me -->


        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ml-3">
                {{ __('Edit') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-end mt-4">



        </div>
    </form>

    </div>


</x-app-layout>