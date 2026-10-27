@extends('partials.layout')

@section('content')

<div class="container mx-auto">

    <h1 class="text-2xl font-bold mb-4">Tags</h1>

    <a href="{{ route('tags.create') }}"
       class="btn btn-primary mb-4">
        New Tag
    </a>

    <div class="overflow-x-auto">
        <table class="table table-zebra">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Posts</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tags as $tag)
                    <tr class="hover:bg-base-300">

                        <td>{{ $tag->name }}</td>

                        <td>{{ $tag->posts_count }}</td>

                        <td>
                            <div class="flex flex-wrap gap-2">

                                <a href="{{ route('tags.show', $tag) }}"
                                   class="btn btn-info">
                                    View
                                </a>

                                <a href="{{ route('tags.edit', $tag) }}"
                                   class="btn btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('tags.destroy', $tag) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-error">
                                        Delete
                                    </button>

                                </form>

                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No tags found.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <div class="mt-4">
        {{ $tags->links() }}
    </div>

</div>

@endsection