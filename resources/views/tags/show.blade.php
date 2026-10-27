@extends('partials.layout')

@section('content')

<div class="container mx-auto">

    <a href="{{ route('tags.index') }}"
       class="btn btn-primary mb-4">
        Back
    </a>

    <h1 class="text-2xl font-bold mb-4">
        Tag: {{ $tag->name }}
    </h1>

    <div class="card bg-base-300 shadow-sm p-4">

        <h2 class="text-xl font-bold mb-4">
            Posts with this tag
        </h2>

        <table class="table table-zebra">

            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tag->posts as $post)

                    <tr>
                        <td>{{ $post->title }}</td>

                        <td>
                            <a href="{{ route('post', $post) }}"
                               class="btn btn-info">
                                View
                            </a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="2">
                            No posts with this tag.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

@endsection