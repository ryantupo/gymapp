<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div style="display:flex;flex-direction: column" class="p-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">

                <img class="mx-auto" src="{{ url('/images/person1.png') }}" alt="Image" width="300" height="250" />
                <div id="details" class="mx-auto pt-5">

                    <h3>Days Using The App : {{ $data['days_using_app'] }}</h3>
                    <h3>Logged Days : {{ $data['user_details']->logged_days }}</h3>
                    <h3>Gender : {{ $data['user']->gender }}</h3>
                    <h3>Age : {{ $data['user']->age }}</h3>
                    <h3>Height : {{ $data['user']->height }} {{ $data['user']->height_unit }}</h3>
                    <h3>Weight : {{ $data['user']->weight }} {{ $data['user']->weight_unit }}</h3>

                </div>
            </div>
        </div>

        {{--  test we got livewire working thank god XD  --}}
        <livewire:test-h1 />

    </div>
</x-app-layout>
