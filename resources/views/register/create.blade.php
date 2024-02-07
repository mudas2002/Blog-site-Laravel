@extends('components.layout')

@section('content')

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1
            class="text-center font-bold text-xl">
                Register
            </h1>

            <form method="POST"
            action="/register"
            class="mt-10">

            @csrf

            <x-form.input name="name" type="" autocomplete="name" ></x-form.input>
            <x-form.input name="username" type="" autocomplete="user"></x-form.input>
            <x-form.input name="email" type="email" autocomplete="username"></x-form.input>
            <x-form.input name="password" type="password" autocomplete="new-password"></x-form.input>

            <x-form.field>
                <x-form.button >Register</x-form.button>
            </x-form.field>
            </form>
        </main>
    </section>

@endsection
