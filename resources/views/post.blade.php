@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card')
         @auth
        <form action="{{ route('comments.store', $post) }}"
              method="POST"
              class="card bg-base-300 shadow-sm mt-4 p-4">

            @csrf

            <fieldset class="fieldset">
                <legend class="fieldset-legend">Add comment</legend>

                <textarea
                    name="body"
                    class="textarea h-36 w-full @error('body') textarea-error @enderror"
                    placeholder="Write your comment...">{{ old('body') }}</textarea>

                @error('body')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <button type="submit" class="btn btn-primary">
                Comment
            </button>

        </form>
    @endauth

    <h2 class="text-xl font-bold mt-6">Comments:</h2>

    @forelse ($post->comments as $comment)

        <div class="card bg-base-100 shadow-sm mt-2">
            <div class="card-body">

                <p>{{ $comment->body }}</p>

                <span class="text-base-content/70">
                    {{ $comment->user->name }}
                </span>

                <span class="text-base-content/70">
                    {{ $comment->created_at->diffForHumans() }}
                </span>

            </div>
        </div>

    @empty
        <p class="mt-2">No comments yet.</p>
    @endforelse

</div>

@endsection