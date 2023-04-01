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
            <x-input-label for="father_name" :value="__('father_name')" />
            <x-text-input id="father_name" class="block mt-1 w-full" type="father_name" name="father_name" :value="old('father_name') ?? $person->father_name" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('father_name')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="mother_name" :value="__('mother_name')" />
            <x-text-input id="mother_name" class="block mt-1 w-full" type="mother_name" name="mother_name" :value="old('mother_name') ?? $person->mother_name" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('mother_name')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="age" name="Age" :value="old('Age') ?? $person->Age" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="gender" :value="__('gender')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender') ?? $person->Gender" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="city" :value="__('city')" />
            <x-text-input id="city" class="block mt-1 w-full" type="city" name="city" :value="old('city') ?? $person->City" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="state" :value="__('state')" />
            <x-text-input id="state" class="block mt-1 w-full" type="state" name="state" :value="old('state') ?? $person->state" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('state')" class="mt-2" />
        </div>
        <div>                                                                   
            <x-input-label for="email" :value="__('email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email') ?? $person->email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- <div>                                                                   
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name') ?? $person->name" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}
        {{-- <div>
            <x-input-label for="role_description" :value="__('Role Description')" />
            <x-text-input id="role_description" class="block mt-1 w-full" type="role_description" name="role_description" :value="old('role_description') ?? $roles->role_description" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('role_description')" class="mt-2" />
        </div> --}}

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