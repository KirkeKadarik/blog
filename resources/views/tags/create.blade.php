@extends('partials.layout')

@section('content')

<div class="container mx-auto">

    <h1 class="text-2xl font-bold mb-4">Create Tag</h1>

    <form action="{{ route('tags.store') }}"
          method="POST"
          class="card bg-base-300 shadow-sm w-2/3 mx-auto p-3">

        @csrf

        <fieldset class="fieldset">

            <legend class="fieldset-legend">Name</legend>

            <input
                name="name"
                type="text"
                value="{{ old('name') }}"
                class="input w-full @error('name') input-error @enderror"
                placeholder="Tag name"
            />

            @error('name')
                <p class="label text-error">{{ $message }}</p>
            @enderror

        </fieldset>

        <button type="submit" class="btn btn-primary mt-4">
            Create
        </button>

    </form>

</div>

@endsection