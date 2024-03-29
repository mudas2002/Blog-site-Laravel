@extends('components.layout')

@section('content')

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>

                <h1
                class="text-center font-bold text-xl">
                Log In
            </h1>

            <form method="POST"
            action="/login"
            class="mt-10">

            @csrf


            <x-form.input name="email" type="email" autocomplete="username" ></x-form.input>
            <x-form.input name="password" type="password" autocomplete="curent-password"></x-form.input>

            <x-form.field>

                <x-form.button >Log In</x-form.button>
            </x-form.field>
        </form>
    </x-panel>
    </main>
    </section>

@endsection
