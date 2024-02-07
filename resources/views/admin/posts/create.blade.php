@extends('components.layout')

@section('content')

    <x-setting heading="Publish New Post">

        <form action="/admin/posts" method="post" enctype="multipart/form-data">

            @csrf

        <x-form.input name="title"/>

        <x-form.input name="slug"/>


        <x-form.input name="thumbnail" type="file"/>

        <x-form.textarea name="excerpt" />


        <x-form.textarea name="body" />

        <x-form.field>
            <x-form.label name="category"/>

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $ct)
                        <option value="{{$ct->id}}"
                        {{old('category_id') == $ct->id ? 'selected' :''}}>
                            {{ucwords($ct->name)}}
                        </option>
                    @endforeach
                </select>
            <x-form.error name="category"/>
        </x-form.field>






        <x-form.field>
            <x-form.button>Publish</x-form.button>
        </x-form.field>
    </form>

    </x-setting>



@endsection
