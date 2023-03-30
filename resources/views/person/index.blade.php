<x-app-layout>

    <div class="flex">
        <!-- Logo -->


        <!-- Navigation Links -->
        {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Roles') }}
        </h2>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <button href="url('/create')" class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight">
            Check Stock</button>


    </div> --}}

    
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('person.create')">
            {{ __('Create User') }}
        </x-nav-link>
    </div>
    </div>
    <x-slot name="header">

    </x-slot>


    <div class="py-12">



        <div class="relative overflow-x-auto" >
            <table class="container text-sm text-left text-gray-500 dark:text-gray-400" style="margin:auto;">
                <thead class="text-s text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-2">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Father_Name
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Mother_Name
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Age
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Gender
                        </th>
                        <th scope="col" class="px-6 py-2">
                            City
                        </th>
                        <th scope="col" class="px-6 py-2">
                           State
                        </th>

                        <th scope="col" class="px-6 py-2">
                            Email
                         </th>
 
                        <th scope="col" class="px-6 py-2">
                            Date OF creation
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Date OF Updation
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($person as $person)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">
                            {{$person->id}}
                        </td>
                        <td class="px-6 py-4">
                            {{$person->name}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{$person->father_name}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{$person->mother_name}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{$person->Age}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{$person->Gender}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{$person->City}}
                        </td>
                        <td class="px-6 py-4">
                            {{$person->state}}
                        </td>
                        <td class="px-6 py-4">
                            {{$person->email}}
                        </td>
                        

                        <td class="px-6 py-4">
                            {{$person->created_at}}
                        </td>
                        <td class="px-6 py-4">
                            {{$person->updated_at}}
                        </td>
                        <td>
                         
 
                            <div class="inline-flex">
                                <a href="{{ route('person.edit', ['person' => $person->id]) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 mx-5 border border-blue-500 hover:border-transparent rounded">Edit</a>
                                <a href="{{ route('person.delete', ['person' => $person->id]) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 mx-5 border border-blue-500 hover:border-transparent rounded">Delete</a>

                            </div>

                       
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>
</x-app-layout>