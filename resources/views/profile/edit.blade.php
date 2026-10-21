@extends('partials.layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="max-w-2xl mx-auto space-y-6">
            <h1 class="text-2xl font-bold">
                @lang('Profile')
            </h1>

            <div class="card bg-base-300 shadow-sm p-6">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="card bg-base-300 shadow-sm p-6">
                @include('profile.partials.update-password-form')
            </div>

            <div class="card bg-base-300 shadow-sm p-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection