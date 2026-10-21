@extends('partials.layout')

@section('content')
    <div class="container mx-auto p-4">
        <form method="POST" action="{{ route('password.confirm') }}"
            class="card bg-base-300 shadow-sm w-full max-w-xl mx-auto p-6">
            @csrf

            <p class="mb-4">
                @lang('This is a secure area of the application. Please confirm your password before continuing.')
            </p>

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input id="password" name="password" type="password"
                    class="input w-full @error('password') input-error @enderror"
                    required autofocus autocomplete="current-password">

                @error('password')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Confirm')
                </button>
            </div>
        </form>
    </div>
@endsection