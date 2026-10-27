@extends('partials.layout')

@section('content')

<div class="container mx-auto">

    <h1 class="text-2xl font-bold mb-4">Edit Tag</h1>

    <form action="{{ route('tags.update', $tag) }}"
          method="POST"
          class="card bg-base-300 shadow-sm w-2/3 mx-auto p-3">

        @csrf
        @method('PUT')

        <fieldset class="fieldset">

            <legend class="fieldset-legend">Name</legend>

            <input
                name="name"
                type="text"
                value="{{ old('name', $tag->name) }}"
                class="input w-full @error('name') input-error @enderror"
                placeholder="Tag name"
            />

            @error('name')
                <p class="label text-error">{{ $message }}</p>
            @enderror

        </fieldset>

        <button type="submit" class="btn btn-primary mt-4">
            Update
        </button>

    </form>

</div>

@endsection