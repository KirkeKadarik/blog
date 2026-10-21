@extends('partials.layout')

@section('content')
    <div class="container mx-auto p-4">
        <form method="POST" action="{{ route('password.store') }}"
            class="card bg-base-300 shadow-sm w-full max-w-xl mx-auto p-6">
            @csrf

            <input type="hidden" name="token"
                value="{{ $request->route('token') }}">

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input id="email" name="email" type="email"
                    value="{{ old('email', $request->email) }}"
                    class="input w-full @error('email') input-error @enderror"
                    required autofocus autocomplete="username">

                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input id="password" name="password" type="password"
                    class="input w-full @error('password') input-error @enderror"
                    required autocomplete="new-password">

                @error('password')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input id="password_confirmation" name="password_confirmation"
                    type="password"
                    class="input w-full @error('password_confirmation') input-error @enderror"
                    required autocomplete="new-password">

                @error('password_confirmation')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Reset Password')
                </button>
            </div>
        </form>
    </div>
@endsection