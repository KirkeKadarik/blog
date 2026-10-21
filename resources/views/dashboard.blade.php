@extends('partials.layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="max-w-2xl mx-auto space-y-6">
            <h1 class="text-2xl font-bold">
                @lang('Dashboard')
            </h1>

            <div class="card bg-base-300 shadow-sm p-6">
                <p>{{ __("You're logged in!") }}</p>

                <div class="card-actions justify-end mt-4">
                    <a href="{{ route('profile.edit') }}" class="btn btn-link">
                        @lang('Profile')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection