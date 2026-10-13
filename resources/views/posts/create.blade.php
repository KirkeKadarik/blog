@extends('partials.layout')
@section('content')
    <div class ="container mx-auto">

        <form action="{{route('posts.store')}}" method="POST" class="card bg-base-300 shadow-sm w-2/3 mx-auto p-3">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">What is your name?</legend>
                <input name="title" type="text" class="input w-full @error('title') input-error @enderror" placeholder="Title" />
                @error('title')
                <p class="label text-error">{{$message}}</p>
                @enderror
            </fieldset>
            <fieldset class="fieldset">
  <legend class="fieldset-legend">Content</legend>
  <textarea name="body" class="textarea h-24 w-full @error('body') textarea-error @enderror" placeholder="Some content here"></textarea>
  @error('body')
                <p class="label text-error">{{$message}}</p>
                @enderror
</fieldset>
<button class="btn btn-primary">Create</button>
    </div>
@endsection
