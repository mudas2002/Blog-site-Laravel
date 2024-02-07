@auth

<x-panel>
    <form action="/posts/{{$post->slug}}/comments" method="POST" >
            @csrf
        <header class="flex items-center">

            <img src="https://i.pravatar.cc/400?u={{auth()->id()}}"
            alt=""
            width="40" height="40"
            class="rounded-full ">

            <h2 class="ml-8">Want to participate?</h2>

        </header>

        <x-form.field>
            <textarea
            class="border border-gray-400 pt-9 w-full "
            name="body"
            id="body"
            required>{{old($post->body)}}</textarea>
        </x-form.field>
        {{-- <x-form.textarea name="body" /> --}}

        <div class="flex justify-end mt-2 pt-2 border-t border-gray-200">
            <x-form.button>Post</x-form.button>
        </div>
    </form>
</x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log In </a> to leave a comment.
    </p>
@endauth
