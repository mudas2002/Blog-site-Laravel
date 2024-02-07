@extends('components.layout')

@section('content')

    <x-setting heading="Manage Posts">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 flex-1">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Post Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)

                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               <a href="/posts/{{$post->slug}}">
                                   {{{$post->title}}}
                                </a>
                            </th>



                                <td class="px-6 py-4">
                                    <a href="/admin/posts/{{$post->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>

                                <td class="px-6 py-4">
                                    {{-- <a href="/admin/posts/{{$post->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a> --}}
                                    <form action="/admin/posts/{{$post->id}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-xs text-gray-500">Delete</button>
                                    </form>
                                </td>

                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>


    </x-setting>



@endsection
